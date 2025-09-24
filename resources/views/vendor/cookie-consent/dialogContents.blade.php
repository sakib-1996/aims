<div class="js-cookie-consent cookie-consent-popup hidden" id="cookieConsentPopup">
    <div class="cookie-popup-content">
        <h4 class="cookie-popup-title">Privacy Settings</h4>
        <p class="cookie-popup-message">{!! trans('cookie-consent::texts.message') !!}</p>
        <div class="cookie-popup-actions">
            <button class="js-cookie-consent-agree btn-agree">
                {{ trans('cookie-consent::texts.agree') }}
            </button>
        </div>
    </div>
</div>
<style>
    .cookie-consent-popup {
        /* --- MODIFICATION: Changed positioning to bottom-center --- */
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        /* Used for horizontal centering */

        /* --- MODIFICATION: Modern, neutral color scheme & design --- */
        background: #ffffff;
        border: none;
        border-radius: 8px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        max-width: 450px;
        width: 90%;
        z-index: 9999;
        padding: 25px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        text-align: left;
        /* Better for readability */

        /* --- MODIFICATION: Smoother slide-in and fade-in animation --- */
        opacity: 0;
        visibility: hidden;
        transform: translate(-50%, 20px);
        /* Start slightly lower */
        transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
    }

    /* State when the popup is visible */
    .cookie-consent-popup.show {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, 0);
        /* End at the final position */
    }

    /* Remove the initial 'hidden' class style if it conflicts */
    .hidden {
        display: block;
        /* Overriding any potential display:none */
    }

    .cookie-popup-title {
        /* --- MODIFICATION: Improved typography --- */
        font-size: 1.15rem;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 10px;
        color: #2d3748;
        /* Dark grey for better contrast */
    }

    .cookie-popup-message {
        font-size: 0.9rem;
        color: #4a5568;
        /* Softer grey for body text */
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .cookie-popup-actions {
        text-align: right;
        /* Align button to the right */
    }

    .cookie-popup-actions .btn-agree {
        /* --- MODIFICATION: Professional button styling --- */
        background-color: #3182ce;
        /* A professional blue */
        color: #fff;
        padding: 10px 24px;
        border-radius: 6px;
        font-weight: 500;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .cookie-popup-actions .btn-agree:hover {
        background-color: #2b6cb0;
        /* Darker shade on hover */
        transform: translateY(-2px);
        /* Slight lift effect */
    }

    /* --- MODIFICATION: Better responsiveness for mobile --- */
    @media (max-width: 480px) {
        .cookie-consent-popup {
            width: 100%;
            bottom: 0;
            left: 0;
            border-radius: 0;
            transform: translateX(0);
            /* Reset transform */
        }

        .cookie-consent-popup.show {
            transform: translateY(0);
        }

        .cookie-consent-popup {
            transform: translateY(100%);
            /* Start off-screen at the bottom */
        }

        .cookie-popup-actions {
            text-align: center;
        }

        .btn-agree {
            width: 100%;
        }
    }
</style>
<script>
    window.addEventListener('load', function() {
        const popup = document.getElementById('cookieConsentPopup');

        // Show popup if cookie not set
        if (!document.cookie.includes('cookie_consent=yes')) {
            popup.classList.remove('hidden');

            // Small delay to trigger CSS transition
            setTimeout(() => {
                popup.classList.add('show');
            }, 100);
        }

        // Agree button click
        document.querySelectorAll('.js-cookie-consent-agree').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.cookie = "cookie_consent=yes; path=/; max-age=" + 60 * 60 * 24 * 365;

                // Animate hide
                popup.classList.remove('show');
                // The original 'hidden' class can be re-added after animation if needed,
                // but visibility:hidden in the CSS already handles this.
            });
        });
    });
</script>
