.PHONY: help pull-staging pull-staging-db pull-staging-files pull-staging-uploads pull-staging-all

help:
	@echo "╔════════════════════════════════════════════════════════════════════════╗"
	@echo "║              EdgeDelta WordPress - Development Commands                ║"
	@echo "╚════════════════════════════════════════════════════════════════════════╝"
	@echo ""
	@echo "📥 STAGING SYNC COMMANDS"
	@echo "  make pull-staging         - Daily sync (database + theme files)"
	@echo "                              Fast sync for regular development work"
	@echo ""
	@echo "  make pull-staging-all     - Complete sync (db + themes + uploads)"
	@echo "                              Use when images/media need updating"
	@echo ""
	@echo "  make pull-staging-db      - Database only"
	@echo "                              Quick database refresh without files"
	@echo ""
	@echo "  make pull-staging-files   - Theme files only"
	@echo "                              Sync theme code without database changes"
	@echo ""
	@echo "  make pull-staging-uploads - Media/uploads only"
	@echo "                              Large sync - images and media files"
	@echo ""
	@echo "⚙️  CONFIGURATION"
	@echo "  Credentials are stored in .env (not tracked in git)"
	@echo "  Script: ./scripts/sync-staging.sh"
	@echo ""
	@echo "💡 DAILY WORKFLOW"
	@echo "  1. Run 'make pull-staging-all' once per day when starting work"
	@echo "  2. This ensures your local matches staging (db + files + images)"
	@echo "  3. Use 'make pull-staging' for quick refreshes during the day"
	@echo ""

pull-staging:
	@./scripts/sync-staging.sh both

pull-staging-db:
	@./scripts/sync-staging.sh db

pull-staging-files:
	@./scripts/sync-staging.sh files

pull-staging-uploads:
	@./scripts/sync-staging.sh uploads

pull-staging-all:
	@./scripts/sync-staging.sh all
