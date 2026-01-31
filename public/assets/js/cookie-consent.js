/**
 * Cookie Consent Management
 * Conforme GDPR e normativa italiana
 */
(function() {
    'use strict';

    const COOKIE_NAME = 'vldlab_cookie_consent';
    const COOKIE_EXPIRY_DAYS = 365;

    // Default consent state
    const defaultConsent = {
        necessary: true,
        analytics: false,
        marketing: false,
        timestamp: null
    };

    /**
     * Get current consent from cookie
     */
    function getConsent() {
        const cookie = document.cookie
            .split('; ')
            .find(row => row.startsWith(COOKIE_NAME + '='));

        if (cookie) {
            try {
                return JSON.parse(decodeURIComponent(cookie.split('=')[1]));
            } catch (e) {
                return null;
            }
        }
        return null;
    }

    /**
     * Save consent to cookie
     */
    function saveConsent(consent) {
        consent.timestamp = new Date().toISOString();
        const expires = new Date();
        expires.setDate(expires.getDate() + COOKIE_EXPIRY_DAYS);

        document.cookie = COOKIE_NAME + '=' + encodeURIComponent(JSON.stringify(consent)) +
            '; expires=' + expires.toUTCString() +
            '; path=/; SameSite=Lax';

        // Dispatch event for other scripts to listen
        window.dispatchEvent(new CustomEvent('cookieConsentUpdated', { detail: consent }));

        // Apply consent (load/block scripts)
        applyConsent(consent);
    }

    /**
     * Apply consent settings
     */
    function applyConsent(consent) {
        // Enable analytics scripts if consented
        if (consent.analytics) {
            enableAnalytics();
        } else {
            disableAnalytics();
        }

        // Enable marketing scripts if consented
        if (consent.marketing) {
            enableMarketing();
        } else {
            disableMarketing();
        }
    }

    /**
     * Enable analytics scripts - loads Google Tag Manager
     */
    function enableAnalytics() {
        if (window._gtmLoaded) return;
        window._gtmLoaded = true;

        // Load Google Tag Manager
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W6CLV3N2');

        document.querySelectorAll('script[data-cookie-type="analytics"]').forEach(function(script) {
            if (script.dataset.src) {
                var newScript = document.createElement('script');
                newScript.src = script.dataset.src;
                newScript.async = true;
                document.head.appendChild(newScript);
            }
        });
    }

    /**
     * Disable analytics - remove GA cookies
     */
    function disableAnalytics() {
        var hostname = window.location.hostname;
        var domainParts = hostname.split('.');
        var rootDomain = domainParts.slice(-2).join('.');

        document.cookie.split(';').forEach(function(cookie) {
            var name = cookie.split('=')[0].trim();
            if (name.startsWith('_ga') || name.startsWith('_gid')) {
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.' + rootDomain;
                document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.' + hostname;
            }
        });
    }

    /**
     * Enable marketing scripts (placeholder for future implementation)
     */
    function enableMarketing() {
        document.querySelectorAll('script[data-cookie-type="marketing"]').forEach(function(script) {
            if (script.dataset.src) {
                const newScript = document.createElement('script');
                newScript.src = script.dataset.src;
                newScript.async = true;
                document.head.appendChild(newScript);
            }
        });
    }

    /**
     * Disable marketing
     */
    function disableMarketing() {
        // Remove or disable marketing cookies
    }

    /**
     * Show cookie banner
     */
    function showBanner() {
        const banner = document.getElementById('cookie-banner');
        if (banner) {
            banner.style.display = 'block';
            // Add animation class
            setTimeout(function() {
                banner.classList.add('show');
            }, 10);
        }
    }

    /**
     * Hide cookie banner
     */
    function hideBanner() {
        const banner = document.getElementById('cookie-banner');
        if (banner) {
            banner.classList.remove('show');
            setTimeout(function() {
                banner.style.display = 'none';
            }, 300);
        }
    }

    /**
     * Show preferences modal
     */
    function showPreferencesModal() {
        const modalEl = document.getElementById('cookie-preferences-modal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const modal = new bootstrap.Modal(modalEl);

            // Load current preferences into checkboxes
            const consent = getConsent() || defaultConsent;
            document.getElementById('cookie-analytics').checked = consent.analytics;
            document.getElementById('cookie-marketing').checked = consent.marketing;

            modal.show();
        }
    }

    /**
     * Hide preferences modal
     */
    function hidePreferencesModal() {
        const modalEl = document.getElementById('cookie-preferences-modal');
        if (modalEl && typeof bootstrap !== 'undefined') {
            const modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) {
                modal.hide();
            }
        }
    }

    /**
     * Accept all cookies
     */
    function acceptAll() {
        const consent = {
            necessary: true,
            analytics: true,
            marketing: true
        };
        saveConsent(consent);
        hideBanner();
        hidePreferencesModal();
    }

    /**
     * Reject non-essential cookies
     */
    function rejectNonEssential() {
        const consent = {
            necessary: true,
            analytics: false,
            marketing: false
        };
        saveConsent(consent);
        hideBanner();
        hidePreferencesModal();
    }

    /**
     * Save custom preferences
     */
    function savePreferences() {
        const consent = {
            necessary: true,
            analytics: document.getElementById('cookie-analytics').checked,
            marketing: document.getElementById('cookie-marketing').checked
        };
        saveConsent(consent);
        hideBanner();
        hidePreferencesModal();
    }

    /**
     * Initialize cookie consent
     */
    function init() {
        const consent = getConsent();

        if (!consent) {
            // No consent recorded, show banner
            showBanner();
        } else {
            // Apply saved consent
            applyConsent(consent);
        }

        // Event listeners for banner buttons
        const acceptBtn = document.getElementById('cookie-accept-btn');
        if (acceptBtn) {
            acceptBtn.addEventListener('click', acceptAll);
        }

        const rejectBtn = document.getElementById('cookie-reject-btn');
        if (rejectBtn) {
            rejectBtn.addEventListener('click', rejectNonEssential);
        }

        const settingsBtn = document.getElementById('cookie-settings-btn');
        if (settingsBtn) {
            settingsBtn.addEventListener('click', function() {
                hideBanner();
                showPreferencesModal();
            });
        }

        // Event listeners for modal buttons
        const acceptModalBtn = document.getElementById('cookie-accept-modal-btn');
        if (acceptModalBtn) {
            acceptModalBtn.addEventListener('click', acceptAll);
        }

        const rejectModalBtn = document.getElementById('cookie-reject-modal-btn');
        if (rejectModalBtn) {
            rejectModalBtn.addEventListener('click', rejectNonEssential);
        }

        const savePreferencesBtn = document.getElementById('cookie-save-preferences-btn');
        if (savePreferencesBtn) {
            savePreferencesBtn.addEventListener('click', savePreferences);
        }

        // Footer link to open preferences
        const manageCookiesLinks = document.querySelectorAll('.manage-cookies-link');
        manageCookiesLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                showPreferencesModal();
            });
        });
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose functions globally for external use
    window.CookieConsent = {
        getConsent: getConsent,
        showPreferencesModal: showPreferencesModal,
        acceptAll: acceptAll,
        rejectNonEssential: rejectNonEssential
    };
})();
