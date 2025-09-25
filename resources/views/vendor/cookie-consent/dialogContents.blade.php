<div class="js-cookie-consent cookie-consent-popup hidden" id="cookieConsentPopup">
    <div class="cookie-popup-content">
        <h4 class="cookie-popup-title">Privacy Settings</h4>
        <p class="cookie-popup-message">
            This site uses third-party website tracking technologies to provide and continually improve your experience
            on our website and our services. You may revoke or change your consent at any time.
        </p>

        <!-- Toggles -->
        <div class="cookie-settings">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" data-type="marketing" role="switch" id="marketing">
                <label class="form-check-label switch-label" for="marketing">Marketing</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" data-type="functional" role="switch" id="functional"
                    checked>
                <label class="form-check-label switch-label" for="functional">Functional</label>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" data-type="essential" role="switch" id="essential"
                    disabled checked>
                <label class="form-check-label switch-label" for="essential">Essential</label>
            </div>
        </div>

        <div class="text-center mt-5">
            <div class="cookie-popup-actions">
                <button class="btn-secondary js-cookie-save m-1">Save Settings</button>
                <button class="btn-deny js-cookie-deny m-1">Deny</button>
                <button class="btn-accept js-cookie-accept m-1">Accept All</button>
            </div>
        </div>

    </div>
</div>

<style>
    .cookie-consent-popup {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #fff;
        border-top: 2px solid #f1f1f1;
        box-shadow: 0 -4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        padding: 25px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        text-align: left;
        z-index: 9999;

        opacity: 0;
        visibility: hidden;
        transform: translateY(100%);
        transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
    }

    .cookie-consent-popup.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        border-radius: 15px 15px 0 0;
    }

    .hidden {
        display: block;
    }

    .cookie-popup-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #2d3748;
    }

    .form-switch .form-check-input {
        width: 3rem;
        height: 1.5rem;
    }

    .switch-label {
        font-size: 20px !important;
        margin-left: 25px !important;
    }

    .cookie-popup-message {
        font-size: 0.9rem;
        color: #4a5568;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    /* Layout in one row */

    .cookie-settings {
        display: flex;
        gap: 20px;
        align-items: center;
        flex-wrap: wrap;
    }

    .cookie-settings label {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        gap: 6px;
    }

    /* Buttons */
    .cookie-popup-actions button {
        padding: 10px 20px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        font-weight: 500;
        transition: 0.2s;
    }

    .btn-secondary {
        background: #f1f1f1;
        color: #333;
    }

    .btn-secondary:hover {
        background: #e2e2e2;
    }

    .btn-deny,
    .btn-accept {
        background: #ff9800;
        color: #fff;
    }

    .btn-deny:hover,
    .btn-accept:hover {
        background: #f57c00;
    }

    .cookie-links {
        font-size: 0.85rem;
        margin-left: auto;
    }


    /* Responsive: stack on small screens */
    @media (max-width: 768px) {
        .cookie-popup-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .cookie-popup-actions {
            width: 100%;
            justify-content: space-between;
        }

        .btn-accept {
            flex: 1;
        }
    }
</style>

<script>
    window.addEventListener('load', function() {
        const popup = document.getElementById('cookieConsentPopup');

        if (!document.cookie.includes('cookie_consent=yes')) {
            popup.classList.remove('hidden');
            setTimeout(() => popup.classList.add('show'), 100);
        }

        document.querySelector('.js-cookie-accept').addEventListener('click', () => {
            document.cookie = "cookie_consent=yes; path=/; max-age=" + 60 * 60 * 24 * 365;
            popup.classList.remove('show');
        });

        document.querySelector('.js-cookie-deny').addEventListener('click', () => {
            document.cookie = "cookie_consent=no; path=/; max-age=" + 60 * 60 * 24 * 365;
            popup.classList.remove('show');
        });

        document.querySelector('.js-cookie-save').addEventListener('click', () => {
            let settings = {};
            document.querySelectorAll('.cookie-toggle').forEach(toggle => {
                settings[toggle.dataset.type] = toggle.checked;
            });
            document.cookie = "cookie_settings=" + JSON.stringify(settings) + "; path=/; max-age=" +
                60 * 60 * 24 * 365;
            popup.classList.remove('show');
        });
    });
</script>
