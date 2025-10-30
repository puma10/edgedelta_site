#!/bin/bash

# Sync staging database and files to local
# Usage: ./scripts/sync-staging.sh [files|db|both]

# Load environment variables from .env if it exists
if [ -f .env ]; then
    set -a
    eval "$(grep -v '^#' .env | sed 's/\r$//' | sed 's/^/export /')"
    set +a
fi

STAGING_HOST="${STAGING_HOST:?Error: STAGING_HOST environment variable is required}"
STAGING_PORT="${STAGING_PORT:?Error: STAGING_PORT environment variable is required}"
STAGING_USER="${STAGING_USER:?Error: STAGING_USER environment variable is required}"
STAGING_PATH="${STAGING_PATH:?Error: STAGING_PATH environment variable is required}"
STAGING_PASS="${STAGING_PASS:?Error: STAGING_PASS environment variable is required}"

LOCAL_DB_NAME="edgedelta"
LOCAL_DB_USER="edgedelta"
LOCAL_DB_PASS=""  # Herd uses no password by default

# SSH command with password
SSH_CMD="sshpass -p '$STAGING_PASS' ssh -p $STAGING_PORT $STAGING_USER@$STAGING_HOST"
RSYNC_CMD="sshpass -p '$STAGING_PASS' rsync -avz -e 'ssh -p $STAGING_PORT'"

# Colors
GREEN='\033[0;32m'
BLUE='\033[0;34m'
RED='\033[0;31m'
NC='\033[0m' # No Color

MODE=${1:-both}

sync_database() {
    echo -e "${BLUE}Syncing staging database...${NC}"

    # Export from staging (Kinsta uses global wp command)
    sshpass -p "$STAGING_PASS" ssh -p $STAGING_PORT $STAGING_USER@$STAGING_HOST \
        "cd $STAGING_PATH && wp db export - --add-drop-table 2>/dev/null" > /tmp/staging-db.sql

    if [ $? -eq 0 ]; then
        echo -e "${GREEN}✓ Database exported from staging${NC}"

        # Import to local
        php wp-cli.phar db import /tmp/staging-db.sql

        if [ $? -eq 0 ]; then
            echo -e "${GREEN}✓ Database imported to local${NC}"

            # Detect local URL from wp-config or use default
            LOCAL_URL=$(php wp-cli.phar option get siteurl 2>/dev/null | grep -v "Deprecated" | grep -v "Notice" | head -1)
            if [ -z "$LOCAL_URL" ]; then
                LOCAL_URL="https://edgedelta.test"
            fi

            echo -e "${BLUE}Updating URLs to: $LOCAL_URL${NC}"

            # Update URLs (handle both staging URLs)
            php wp-cli.phar search-replace 'https://stg-edgedelta-edgestage.kinsta.cloud' "$LOCAL_URL" --all-tables --skip-columns=guid 2>/dev/null
            php wp-cli.phar search-replace 'https://staging.edgedelta.com' "$LOCAL_URL" --all-tables --skip-columns=guid 2>/dev/null
            php wp-cli.phar search-replace 'http://staging.edgedelta.com' "$LOCAL_URL" --all-tables --skip-columns=guid 2>/dev/null

            echo -e "${GREEN}✓ URLs updated for local environment${NC}"

            # Clean up
            rm /tmp/staging-db.sql
        else
            echo -e "${RED}✗ Failed to import database${NC}"
            exit 1
        fi
    else
        echo -e "${RED}✗ Failed to export database from staging${NC}"
        exit 1
    fi
}

sync_files() {
    echo -e "${BLUE}Syncing staging theme files...${NC}"

    # Sync theme files (updates existing files, adds new files)
    sshpass -p "$STAGING_PASS" rsync -avz -e "ssh -p $STAGING_PORT" \
        --exclude 'node_modules' \
        --exclude '.git' \
        $STAGING_USER@$STAGING_HOST:$STAGING_PATH/wp-content/themes/ \
        ./wp-content/themes/

    echo -e "${GREEN}✓ Theme files synced from staging${NC}"
}

sync_uploads() {
    echo -e "${BLUE}Syncing uploads/media files... (this may take a while)${NC}"

    # Sync uploads (updates existing files, adds new files)
    sshpass -p "$STAGING_PASS" rsync -avz -e "ssh -p $STAGING_PORT" \
        --progress \
        --delete-after \
        $STAGING_USER@$STAGING_HOST:$STAGING_PATH/wp-content/uploads/ \
        ./wp-content/uploads/

    echo -e "${GREEN}✓ Uploads synced from staging${NC}"
}

case $MODE in
    db)
        sync_database
        ;;
    files)
        sync_files
        ;;
    uploads)
        sync_uploads
        ;;
    both)
        sync_database
        sync_files
        ;;
    all)
        sync_database
        sync_files
        sync_uploads
        ;;
    *)
        echo "Usage: $0 [db|files|uploads|both|all]"
        exit 1
        ;;
esac

echo -e "${GREEN}✓ Sync complete!${NC}"
