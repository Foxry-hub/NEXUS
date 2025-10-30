// Minimal CSS Theme Controller
// This script provides localStorage persistence for the CSS-only theme toggle

(function() {
    'use strict';

    const THEME_STORAGE_KEY = 'nexus-css-theme';
    const THEME_TOGGLE_ID = 'css-theme-toggle';

    // Get theme toggle checkbox
    function getThemeToggle() {
        return document.getElementById(THEME_TOGGLE_ID);
    }

    // Get stored theme preference
    function getStoredTheme() {
        try {
            return localStorage.getItem(THEME_STORAGE_KEY);
        } catch (e) {
            console.warn('Unable to access localStorage for theme preference');
            return null;
        }
    }

    // Store theme preference
    function storeTheme(isDark) {
        try {
            localStorage.setItem(THEME_STORAGE_KEY, isDark ? 'dark' : 'light');
        } catch (e) {
            console.warn('Unable to store theme preference in localStorage');
        }
    }

    // Apply theme by setting checkbox state
    function applyTheme(isDark) {
        const toggle = getThemeToggle();
        if (toggle) {
            toggle.checked = isDark;
        }

        // Apply to document element for broader compatibility
        const html = document.documentElement;
        if (isDark) {
            html.setAttribute('data-theme', 'dark');
            html.classList.add('dark');
        } else {
            html.setAttribute('data-theme', 'light');
            html.classList.remove('dark');
        }

        // Update meta theme-color for mobile browsers
        updateMetaThemeColor(isDark);
    }

    // Update meta theme color
    function updateMetaThemeColor(isDark) {
        let metaThemeColor = document.querySelector('meta[name="theme-color"]');

        if (!metaThemeColor) {
            metaThemeColor = document.createElement('meta');
            metaThemeColor.name = 'theme-color';
            document.head.appendChild(metaThemeColor);
        }

        metaThemeColor.content = isDark ? '#111827' : '#f9fafb';
    }

    // Get system theme preference
    function getSystemPreference() {
        return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    // Initialize theme on page load
    function initializeTheme() {
        const storedTheme = getStoredTheme();
        let isDark;

        if (storedTheme) {
            isDark = storedTheme === 'dark';
        } else {
            // Use system preference if no stored preference
            isDark = getSystemPreference();
        }

        applyTheme(isDark);
    }

    // Handle theme toggle change
    function handleThemeToggle() {
        const toggle = getThemeToggle();
        if (!toggle) return;

        toggle.addEventListener('change', function(e) {
            const isDark = e.target.checked;
            storeTheme(isDark);
            applyTheme(isDark);

            // Dispatch custom event for other components
            const event = new CustomEvent('themeChanged', {
                detail: {
                    theme: isDark ? 'dark' : 'light',
                    isDark: isDark
                }
            });
            document.dispatchEvent(event);
        });
    }

    // Listen for system theme changes
    function listenForSystemChanges() {
        if (window.matchMedia) {
            const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

            mediaQuery.addEventListener('change', function(e) {
                // Only apply system preference if user hasn't set a manual preference
                const storedTheme = getStoredTheme();
                if (!storedTheme) {
                    applyTheme(e.matches);
                }
            });
        }
    }

    // Keyboard shortcut for theme switching (Ctrl/Cmd + Shift + D)
    function addKeyboardShortcut() {
        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && event.shiftKey && event.key === 'D') {
                event.preventDefault();
                const toggle = getThemeToggle();
                if (toggle) {
                    toggle.checked = !toggle.checked;
                    toggle.dispatchEvent(new Event('change'));
                }
            }
        });
    }

    // Initialize when DOM is ready
    function init() {
        initializeTheme();
        handleThemeToggle();
        listenForSystemChanges();
        addKeyboardShortcut();

        // Add smooth transitions after initial load
        setTimeout(() => {
            document.body.style.transition = 'background-color 0.3s ease, color 0.3s ease';
        }, 100);
    }

    // Run initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Export global function for manual theme setting (backward compatibility)
    window.setCSSTheme = function(theme) {
        const isDark = theme === 'dark';
        storeTheme(isDark);
        applyTheme(isDark);
    };

    // Global utility functions
    window.getCurrentTheme = function() {
        return getStoredTheme() || (getSystemPreference() ? 'dark' : 'light');
    };

    window.getSystemThemePreference = getSystemPreference;

})();

// Optional: CSS-in-JS fallback for critical theme styles
// This ensures the theme works even if CSS files fail to load
(function addCriticalStyles() {
    const criticalCSS = `
        :root {
            color-scheme: light dark;
        }

        [data-theme="dark"] {
            color-scheme: dark;
        }

        [data-theme="light"] {
            color-scheme: light;
        }

        @media (prefers-color-scheme: dark) {
            :root:not([data-theme="light"]) {
                color-scheme: dark;
            }
        }
    `;

    const style = document.createElement('style');
    style.textContent = criticalCSS;
    document.head.insertBefore(style, document.head.firstChild);
})();
