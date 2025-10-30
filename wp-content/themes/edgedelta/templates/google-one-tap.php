
<script src="https://cdn.auth0.com/js/auth0-spa-js/2.7/auth0-spa-js.production.js" async defer></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>

<div id="g_id_onload"
   data-client_id="810621337351-jgjmqc6af246eld3oe509e2phht58cdh.apps.googleusercontent.com"
   data-callback="handleSocialLogin"
></div>

<script>
    async function getAuthStateParam() {
        const response = await fetch('https://api.edgedelta.com/v1/login/code?redirect_uri=https://app.edgedelta.com', {
            credentials: 'include',
        });

        return response?.State;
    }

    async function handleSocialLogin() {
        const state = await getAuthStateParam();

        const auth0Client = await auth0.createAuth0Client({
            domain: 'edgedelta.us.auth0.com',
            clientId: 'gtjMLdDOjb2thQrsvjESPyHpIAG1kWCK',
            authorizationParams: {
                redirect_uri: 'https://app.edgedelta.com/auth/callback',
                scope: 'openid profile email',
                audience: 'https://edgedelta.us.auth0.com/userinfo',
            },
        });

        auth0Client.loginWithRedirect({
            authorizationParams: { connection: 'google-oauth2' },
            openUrl(url) {
                const urlObj = new URL(url);
                const params = new URLSearchParams(urlObj.search);
                params.set('response_type', 'token id_token');
                params.set('response_mode', 'fragment');
                params.set('state', state);
                const newUrl = `${urlObj.origin}${urlObj.pathname}?${params.toString()}`;
                window.location.href = newUrl;
            },
        });
    }
</script>