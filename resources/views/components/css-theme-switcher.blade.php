<!-- Pure CSS Theme Switcher Component -->
<div class="theme-switcher-container">
    <!-- Hidden checkbox for theme state -->
    <input type="checkbox" id="theme-toggle" class="theme-toggle-checkbox" aria-label="Toggle dark mode">

    <!-- Theme Toggle Switch -->
    <label for="theme-toggle" class="theme-toggle-container">
        <div class="theme-toggle-switch">
            <div class="theme-toggle-slider">
                <div class="theme-toggle-icons">
                    <!-- Sun Icon (Light Mode) -->
                    <svg class="sun-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>

                    <!-- Moon Icon (Dark Mode) -->
                    <svg class="moon-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <span class="theme-toggle-label">Dark Mode</span>
    </label>
</div>

<!-- Alternative Dropdown Version (CSS Only) -->
<div class="theme-dropdown-container">
    <!-- Hidden radio buttons for theme states -->
    <input type="radio" id="light-theme" name="theme" value="light" class="theme-radio" checked>
    <input type="radio" id="dark-theme" name="theme" value="dark" class="theme-radio">
    <input type="radio" id="auto-theme" name="theme" value="auto" class="theme-radio">

    <!-- Dropdown Toggle -->
    <input type="checkbox" id="theme-dropdown-toggle" class="dropdown-toggle-checkbox">

    <!-- Dropdown Button -->
    <label for="theme-dropdown-toggle" class="dropdown-button">
        <div class="current-theme-display">
            <div class="current-theme-icon">
                <!-- Light Icon -->
                <svg class="light-theme-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>

                <!-- Dark Icon -->
                <svg class="dark-theme-icon" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>

                <!-- Auto Icon -->
                <svg class="auto-theme-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <span class="current-theme-label">Tema</span>
        </div>

        <!-- Dropdown Arrow -->
        <svg class="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </label>

    <!-- Dropdown Menu -->
    <div class="dropdown-menu">
        <!-- Light Theme Option -->
        <label for="light-theme" class="theme-option">
            <svg class="option-icon" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
            <div class="option-text">
                <span class="option-title">Terang</span>
                <span class="option-description">Mode terang</span>
            </div>
            <svg class="check-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
        </label>

        <!-- Dark Theme Option -->
        <label for="dark-theme" class="theme-option">
            <svg class="option-icon" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <div class="option-text">
                <span class="option-title">Gelap</span>
                <span class="option-description">Mode gelap</span>
            </div>
            <svg class="check-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
        </label>

        <!-- Auto Theme Option -->
        <label for="auto-theme" class="theme-option">
            <svg class="option-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
            <div class="option-text">
                <span class="option-title">Otomatis</span>
                <span class="option-description">Sesuai sistem</span>
            </div>
            <svg class="check-icon" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
        </label>
    </div>
</div>

<style>
/* CSS-Only Theme Dropdown Styles */
.theme-dropdown-container {
    position: relative;
    display: inline-block;
}

/* Hide radio buttons and dropdown toggle */
.theme-radio,
.dropdown-toggle-checkbox {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

/* Dropdown Button */
.dropdown-button {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    user-select: none;
}

.dropdown-button:hover {
    background: var(--btn-hover);
    box-shadow: 0 4px 12px var(--shadow-color);
}

/* Current Theme Display */
.current-theme-display {
    display: flex;
    align-items: center;
    gap: 8px;
}

.current-theme-icon {
    position: relative;
    width: 20px;
    height: 20px;
}

.light-theme-icon,
.dark-theme-icon,
.auto-theme-icon {
    position: absolute;
    width: 20px;
    height: 20px;
    opacity: 0;
    transition: all 0.3s ease;
}

/* Show appropriate icon based on selected theme */
#light-theme:checked ~ .dropdown-button .light-theme-icon {
    opacity: 1;
    color: #fbbf24;
}

#dark-theme:checked ~ .dropdown-button .dark-theme-icon {
    opacity: 1;
    color: #818cf8;
}

#auto-theme:checked ~ .dropdown-button .auto-theme-icon {
    opacity: 1;
    color: var(--text-secondary);
}

/* Update label text based on selected theme */
.current-theme-label {
    font-size: 14px;
    font-weight: 500;
    color: var(--text-primary);
}

#light-theme:checked ~ .dropdown-button .current-theme-label::after {
    content: " - Terang";
}

#dark-theme:checked ~ .dropdown-button .current-theme-label::after {
    content: " - Gelap";
}

#auto-theme:checked ~ .dropdown-button .current-theme-label::after {
    content: " - Otomatis";
}

/* Dropdown Arrow */
.dropdown-arrow {
    width: 16px;
    height: 16px;
    color: var(--text-secondary);
    transition: transform 0.3s ease;
}

.dropdown-toggle-checkbox:checked ~ .dropdown-button .dropdown-arrow {
    transform: rotate(180deg);
}

/* Dropdown Menu */
.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    margin-top: 8px;
    min-width: 200px;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    box-shadow: 0 10px 25px var(--shadow-color);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px) scale(0.95);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 50;
    overflow: hidden;
}

.dropdown-toggle-checkbox:checked ~ .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
}

/* Theme Options */
.theme-option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-bottom: 1px solid var(--border-color);
}

.theme-option:last-child {
    border-bottom: none;
}

.theme-option:hover {
    background: var(--bg-tertiary);
}

.option-icon {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.option-text {
    display: flex;
    flex-direction: column;
    flex: 1;
}

.option-title {
    font-weight: 500;
    color: var(--text-primary);
    font-size: 14px;
}

.option-description {
    font-size: 12px;
    color: var(--text-secondary);
}

.check-icon {
    width: 16px;
    height: 16px;
    color: var(--accent-color);
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Show check icon for selected theme */
#light-theme:checked ~ .dropdown-menu .theme-option:nth-child(1) .check-icon,
#dark-theme:checked ~ .dropdown-menu .theme-option:nth-child(2) .check-icon,
#auto-theme:checked ~ .dropdown-menu .theme-option:nth-child(3) .check-icon {
    opacity: 1;
}

/* Close dropdown when option is selected */
.theme-radio:checked ~ .dropdown-toggle-checkbox {
    pointer-events: none;
}

.theme-radio:checked ~ .dropdown-toggle-checkbox:checked {
    pointer-events: auto;
}

/* Apply themes based on radio button selection */
#dark-theme:checked ~ * {
    color-scheme: dark;
}

#light-theme:checked ~ * {
    color-scheme: light;
}

/* Auto theme using media query */
#auto-theme:checked ~ * {
    color-scheme: light dark;
}

@media (prefers-color-scheme: dark) {
    #auto-theme:checked ~ * {
        color-scheme: dark;
    }
}
</style>
