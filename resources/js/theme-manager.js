// Enhanced Theme Management System
class ThemeManager {
    constructor() {
        this.themes = {
            light: 'light',
            dark: 'dark',
            auto: 'auto'
        };

        this.currentTheme = this.getStoredTheme() || this.themes.auto;
        this.mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

        this.init();
    }

    init() {
        // Apply initial theme
        this.applyTheme(this.currentTheme);

        // Listen for system theme changes
        this.mediaQuery.addEventListener('change', () => {
            if (this.currentTheme === this.themes.auto) {
                this.applySystemTheme();
            }
        });

        // Update UI elements
        this.updateThemeUI();

        // Add smooth transition after initial load
        setTimeout(() => {
            document.documentElement.style.transition = 'background-color 0.3s ease, color 0.3s ease';
        }, 100);
    }

    setTheme(theme) {
        if (!Object.values(this.themes).includes(theme)) {
            console.warn(`Invalid theme: ${theme}`);
            return;
        }

        this.currentTheme = theme;
        this.storeTheme(theme);
        this.applyTheme(theme);
        this.updateThemeUI();
        this.notifyThemeChange(theme);
    }

    applyTheme(theme) {
        const html = document.documentElement;

        // Remove existing theme classes
        html.classList.remove('dark');

        if (theme === this.themes.dark) {
            html.classList.add('dark');
        } else if (theme === this.themes.auto) {
            this.applySystemTheme();
        }

        // Update meta theme-color for mobile browsers
        this.updateMetaThemeColor(theme);
    }

    applySystemTheme() {
        const html = document.documentElement;

        if (this.mediaQuery.matches) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }
    }

    updateMetaThemeColor(theme) {
        let metaThemeColor = document.querySelector('meta[name="theme-color"]');

        if (!metaThemeColor) {
            metaThemeColor = document.createElement('meta');
            metaThemeColor.name = 'theme-color';
            document.head.appendChild(metaThemeColor);
        }

        // Set theme color based on current theme
        if (theme === this.themes.dark || (theme === this.themes.auto && this.mediaQuery.matches)) {
            metaThemeColor.content = '#111827'; // gray-900
        } else {
            metaThemeColor.content = '#f9fafb'; // gray-50
        }
    }

    updateThemeUI() {
        // Update current theme icon and label
        this.updateCurrentThemeDisplay();

        // Update check marks in dropdown
        this.updateThemeChecks();

        // Update any other theme-related UI elements
        this.updateThemeButtons();
    }

    updateCurrentThemeDisplay() {
        const lightIcon = document.getElementById('light-icon');
        const darkIcon = document.getElementById('dark-icon');
        const autoIcon = document.getElementById('auto-icon');
        const themeLabel = document.getElementById('current-theme-label');

        // Hide all icons first
        [lightIcon, darkIcon, autoIcon].forEach(icon => {
            if (icon) icon.classList.add('hidden');
        });

        // Show appropriate icon and update label
        let labelText = 'Tema';

        switch (this.currentTheme) {
            case this.themes.light:
                lightIcon?.classList.remove('hidden');
                labelText = 'Terang';
                break;
            case this.themes.dark:
                darkIcon?.classList.remove('hidden');
                labelText = 'Gelap';
                break;
            case this.themes.auto:
                autoIcon?.classList.remove('hidden');
                labelText = 'Otomatis';
                break;
        }

        if (themeLabel) {
            themeLabel.textContent = labelText;
        }
    }

    updateThemeChecks() {
        const lightCheck = document.getElementById('light-check');
        const darkCheck = document.getElementById('dark-check');
        const autoCheck = document.getElementById('auto-check');

        // Hide all checks first
        [lightCheck, darkCheck, autoCheck].forEach(check => {
            if (check) check.classList.add('hidden');
        });

        // Show appropriate check
        switch (this.currentTheme) {
            case this.themes.light:
                lightCheck?.classList.remove('hidden');
                break;
            case this.themes.dark:
                darkCheck?.classList.remove('hidden');
                break;
            case this.themes.auto:
                autoCheck?.classList.remove('hidden');
                break;
        }
    }

    updateThemeButtons() {
        // Update old theme toggle button if it exists
        const oldThemeToggleDark = document.getElementById('theme-toggle-dark-icon');
        const oldThemeToggleLight = document.getElementById('theme-toggle-light-icon');

        if (oldThemeToggleDark && oldThemeToggleLight) {
            const isDark = document.documentElement.classList.contains('dark');

            if (isDark) {
                oldThemeToggleDark.classList.add('hidden');
                oldThemeToggleLight.classList.remove('hidden');
            } else {
                oldThemeToggleDark.classList.remove('hidden');
                oldThemeToggleLight.classList.add('hidden');
            }
        }
    }

    getStoredTheme() {
        try {
            return localStorage.getItem('nexus-theme');
        } catch (e) {
            console.warn('Unable to access localStorage for theme preference');
            return null;
        }
    }

    storeTheme(theme) {
        try {
            localStorage.setItem('nexus-theme', theme);
        } catch (e) {
            console.warn('Unable to store theme preference in localStorage');
        }
    }

    notifyThemeChange(theme) {
        // Dispatch custom event for other components to listen to
        const event = new CustomEvent('themeChanged', {
            detail: {
                theme: theme,
                isDark: document.documentElement.classList.contains('dark')
            }
        });
        document.dispatchEvent(event);

        // Show toast notification (optional)
        this.showThemeChangeToast(theme);
    }

    showThemeChangeToast(theme) {
        // Simple toast notification
        const toastMessages = {
            light: 'Tema terang diaktifkan',
            dark: 'Tema gelap diaktifkan',
            auto: 'Tema otomatis diaktifkan'
        };

        const message = toastMessages[theme] || 'Tema berhasil diubah';

        // Create or update toast element
        let toast = document.getElementById('theme-toast');
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'theme-toast';
            toast.className = 'fixed bottom-4 right-4 px-4 py-2 bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 rounded-lg shadow-lg transform translate-y-full opacity-0 transition-all duration-300 z-50';
            document.body.appendChild(toast);
        }

        toast.textContent = message;

        // Show toast
        setTimeout(() => {
            toast.classList.remove('translate-y-full', 'opacity-0');
        }, 100);

        // Hide toast after 2 seconds
        setTimeout(() => {
            toast.classList.add('translate-y-full', 'opacity-0');
        }, 2000);
    }

    getCurrentTheme() {
        return this.currentTheme;
    }

    isDarkMode() {
        return document.documentElement.classList.contains('dark');
    }
}

// Initialize theme manager
let themeManager;

document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing theme manager...');
    themeManager = new ThemeManager();

    // Make it globally accessible
    window.themeManager = themeManager;

    console.log('Theme manager initialized:', themeManager.getCurrentTheme());
});

// Global function for theme switching (called from HTML)
function setTheme(theme) {
    if (window.themeManager) {
        window.themeManager.setTheme(theme);
    } else {
        // Fallback if theme manager not ready yet
        console.log('Theme manager not ready, applying fallback');
        const html = document.documentElement;

        html.classList.remove('dark');
        if (theme === 'dark') {
            html.classList.add('dark');
        } else if (theme === 'auto') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (prefersDark) {
                html.classList.add('dark');
            }
        }

        try {
            localStorage.setItem('nexus-theme', theme);
        } catch (e) {
            console.warn('Could not save theme preference');
        }
    }
}

// Make setTheme globally available
window.setTheme = setTheme;

// Export for potential module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = ThemeManager;
}

// Additional theme-related utilities
const ThemeUtils = {
    // Get system preference
    getSystemPreference() {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    },

    // Check if system supports dark mode
    supportsColorScheme() {
        return window.matchMedia('(prefers-color-scheme)').media !== 'not all';
    },

    // Apply theme to specific element
    applyThemeToElement(element, theme) {
        if (!element) return;

        element.classList.remove('light-theme', 'dark-theme');
        element.classList.add(`${theme}-theme`);
    },

    // Get appropriate color for current theme
    getThemeColor(lightColor, darkColor) {
        return document.documentElement.classList.contains('dark') ? darkColor : lightColor;
    }
};

// Listen for theme changes and update other components
document.addEventListener('themeChanged', function(event) {
    const { theme, isDark } = event.detail;

    // Update any charts, maps, or other dynamic content that needs theme awareness
    console.log(`Theme changed to: ${theme}, Dark mode: ${isDark}`);

    // Example: Update chart colors, map styles, etc.
    // updateChartTheme(isDark);
    // updateMapTheme(isDark);
});

// Keyboard shortcut for theme switching (Ctrl/Cmd + Shift + T)
document.addEventListener('keydown', function(event) {
    if ((event.ctrlKey || event.metaKey) && event.shiftKey && event.key === 'T') {
        event.preventDefault();

        if (themeManager) {
            const currentTheme = themeManager.getCurrentTheme();
            const themes = ['light', 'dark', 'auto'];
            const currentIndex = themes.indexOf(currentTheme);
            const nextIndex = (currentIndex + 1) % themes.length;

            themeManager.setTheme(themes[nextIndex]);
        }
    }
});

// Handle page visibility changes to update theme if needed
document.addEventListener('visibilitychange', function() {
    if (!document.hidden && themeManager && themeManager.getCurrentTheme() === 'auto') {
        // Re-apply auto theme in case system preference changed while page was hidden
        themeManager.applyTheme('auto');
        themeManager.updateThemeUI();
    }
});
