@if ($cookieConsentConfig['enabled'] && !$alreadyConsentedWithCookies)
    @include('cookie-consent::dialogContents')

    <script>
        window.laravelCookieConsent = (function() {
            const COOKIE_VALUE = 1;
            const COOKIE_NAME = '{{ $cookieConsentConfig['cookie_name'] }}';
            const COOKIE_DOMAIN = '{{ config('session.domain') ?? request()->getHost() }}';
            const COOKIE_LIFETIME = {{ $cookieConsentConfig['cookie_lifetime'] }};

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value +
                    ';expires=' + date.toUTCString() +
                    ';domain=' + COOKIE_DOMAIN +
                    ';path=/{{ config('session.secure') ? ';secure' : null }}' +
                    '{{ config('session.same_site') ? ';samesite=' . config('session.same_site') : null }}';
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').find(c => c.startsWith(name + '=')) !== undefined);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');
                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            // Actions
            function acceptAll() {
                setCookie(COOKIE_NAME, COOKIE_VALUE, COOKIE_LIFETIME);
                hideCookieDialog();
            }

            function denyAll() {
                setCookie(COOKIE_NAME, 0, COOKIE_LIFETIME);
                hideCookieDialog();
            }

            function saveSettings() {
                let settings = {};
                document.querySelectorAll('.cookie-toggle').forEach(toggle => {
                    settings[toggle.dataset.type] = toggle.checked;
                });
                setCookie('cookie_settings', JSON.stringify(settings), COOKIE_LIFETIME);
                setCookie(COOKIE_NAME, COOKIE_VALUE, COOKIE_LIFETIME);
                hideCookieDialog();
            }

            // Init
            if (cookieExists(COOKIE_NAME)) {
                hideCookieDialog();
            }

            // Attach events
            const acceptBtn = document.querySelector('.js-cookie-accept');
            if (acceptBtn) acceptBtn.addEventListener('click', acceptAll);

            const denyBtn = document.querySelector('.js-cookie-deny');
            if (denyBtn) denyBtn.addEventListener('click', denyAll);

            const saveBtn = document.querySelector('.js-cookie-save');
            if (saveBtn) saveBtn.addEventListener('click', saveSettings);

            return {
                acceptAll: acceptAll,
                denyAll: denyAll,
                saveSettings: saveSettings,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>
@endif
