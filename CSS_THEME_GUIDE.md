# CSS-Only Theme System Documentation

## Overview

Sistem tema CSS-only untuk Nexus yang memberikan pengalaman pengguna yang seamless dengan performa optimal dan kompatibilitas browser yang luas.

## Fitur Utama

### ✅ CSS-Only Implementation
- Tidak memerlukan JavaScript untuk fungsi dasar
- Menggunakan CSS `:checked` pseudo-class dan general sibling combinator
- Performa optimal dengan minimal overhead

### ✅ Multiple Theme Options
- **Light Mode**: Tema terang dengan warna yang cerah
- **Dark Mode**: Tema gelap yang nyaman untuk mata
- **Auto Mode**: Mengikuti preferensi sistem operasi

### ✅ Accessibility Support
- Keyboard navigation (Tab, Enter, Space)
- Screen reader compatibility
- Respects `prefers-reduced-motion`
- Focus indicators yang jelas

### ✅ Persistent Settings
- LocalStorage untuk menyimpan preferensi
- Sinkronisasi antar tab
- Fallback ke preferensi sistem

## File Structure

```
resources/
├── css/
│   ├── app.css                    # Main CSS dengan CSS variables
│   └── theme-toggle.css           # Styles untuk theme toggle
├── js/
│   ├── app.js                     # Main JavaScript
│   └── css-theme-controller.js    # Theme persistence controller
└── views/
    └── components/
        ├── navbar.blade.php       # Navbar dengan CSS theme toggle
        └── css-theme-switcher.blade.php  # Advanced dropdown switcher
```

## Implementasi

### 1. Basic Toggle Switch

```html
<!-- HTML -->
<div class="theme-switcher-container">
    <input type="checkbox" id="css-theme-toggle" class="theme-toggle-checkbox" aria-label="Toggle dark mode">
    <label for="css-theme-toggle" class="theme-toggle-container">
        <div class="theme-toggle-switch">
            <div class="theme-toggle-slider">
                <div class="theme-toggle-icons">
                    <!-- Sun & Moon Icons -->
                </div>
            </div>
        </div>
    </label>
</div>
```

### 2. CSS Variables System

```css
/* CSS Variables */
:root {
    --color-bg-primary: #f9fafb;
    --color-text-primary: #111827;
    /* ... other variables */
}

[data-theme="dark"] {
    --color-bg-primary: #111827;
    --color-text-primary: #f9fafb;
    /* ... dark theme variables */
}

/* Auto theme using media query */
@media (prefers-color-scheme: dark) {
    :root:not([data-theme="light"]) {
        /* Dark theme variables */
    }
}
```

### 3. CSS-Only Logic

```css
/* Toggle slider movement */
.theme-toggle-checkbox:checked + .theme-toggle-switch .theme-toggle-slider {
    transform: translateX(22px);
}

/* Icon switching */
.theme-toggle-checkbox:checked + .theme-toggle-switch .sun-icon {
    opacity: 0;
}

.theme-toggle-checkbox:checked + .theme-toggle-switch .moon-icon {
    opacity: 1;
}

/* Theme application */
.theme-toggle-checkbox:checked ~ * {
    color-scheme: dark;
}
```

## JavaScript Controller (Optional)

File `css-theme-controller.js` menyediakan:

- **LocalStorage persistence**: Menyimpan preferensi tema
- **System preference detection**: Mendeteksi preferensi sistem
- **Cross-tab synchronization**: Sinkronisasi antar tab
- **Keyboard shortcuts**: Ctrl+Shift+D untuk toggle tema
- **Custom events**: Event `themeChanged` untuk komponen lain

### Global Functions

```javascript
// Set tema secara manual
window.setCSSTheme('dark' | 'light');

// Get tema saat ini
window.getCurrentTheme();

// Get preferensi sistem
window.getSystemThemePreference();
```

## Cara Penggunaan

### 1. Include CSS Files

```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

### 2. Add Theme Toggle to Layout

```blade
<!-- Simple toggle -->
<x-navbar />

<!-- Advanced dropdown -->
<x-css-theme-switcher />
```

### 3. Use CSS Variables in Components

```css
.my-component {
    background-color: var(--color-bg-secondary);
    color: var(--color-text-primary);
    border: 1px solid var(--color-border);
    transition: all 0.3s ease;
}
```

### 4. Listen for Theme Changes

```javascript
document.addEventListener('themeChanged', function(event) {
    const { theme, isDark } = event.detail;
    // Update komponen yang memerlukan theme awareness
});
```

## Customization

### 1. Color Variables

Edit file `resources/css/app.css` untuk mengubah warna tema:

```css
:root {
    /* Light theme colors */
    --color-bg-primary: #your-color;
    --color-accent: #your-accent;
}

[data-theme="dark"] {
    /* Dark theme colors */
    --color-bg-primary: #your-dark-color;
    --color-accent: #your-dark-accent;
}
```

### 2. Toggle Styling

Edit file `resources/css/theme-toggle.css` untuk mengubah tampilan toggle:

```css
.theme-toggle-switch {
    width: 60px;        /* Lebar toggle */
    height: 30px;       /* Tinggi toggle */
    border-radius: 15px; /* Border radius */
}
```

### 3. Animation Timing

```css
.theme-toggle-slider {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
```

## Browser Support

- ✅ Chrome 88+ (Full support)
- ✅ Firefox 85+ (Full support)  
- ✅ Safari 14+ (Full support)
- ✅ Edge 88+ (Full support)
- ⚠️ IE 11 (Fallback to light theme)

## Performance Benefits

1. **No JavaScript Required**: Fungsi dasar bekerja tanpa JS
2. **CSS-Only Animations**: Smooth transitions menggunakan CSS
3. **Minimal Bundle Size**: Tidak ada library tambahan
4. **Hardware Acceleration**: CSS transforms dioptimasi GPU
5. **Instant Theme Switching**: Tidak ada delay atau flash

## Best Practices

### 1. Accessibility
```html
<!-- Sempre use aria-label -->
<input type="checkbox" aria-label="Toggle dark mode">

<!-- Support keyboard navigation -->
<label tabindex="0" role="button">
```

### 2. Performance
```css
/* Use will-change for smoother animations */
.theme-toggle-slider {
    will-change: transform;
}

/* Respect user preferences */
@media (prefers-reduced-motion: reduce) {
    .theme-toggle-slider {
        transition: none;
    }
}
```

### 3. Compatibility
```css
/* Provide fallbacks */
.theme-toggle-switch {
    background: #e5e7eb; /* Fallback */
    background: var(--toggle-bg); /* CSS variable */
}
```

## Troubleshooting

### Theme Not Persisting
- Pastikan localStorage tersedia
- Check browser privacy settings
- Verify script loading order

### Icons Not Switching
- Check CSS selector specificity
- Verify checkbox ID matches label for
- Ensure icons are properly nested

### Styles Not Applying
- Verify CSS variable definitions
- Check for conflicting Tailwind classes
- Ensure proper CSS cascade

## Migration from JavaScript

Jika Anda migrasi dari sistem tema berbasis JavaScript:

1. Replace JavaScript toggle dengan CSS toggle
2. Update event listeners ke CSS-based approach
3. Migrate theme variables ke CSS custom properties
4. Test keyboard navigation dan accessibility

## Demo

Lihat implementasi lengkap di file `css-theme-demo.html` yang menampilkan:
- Theme toggle variations
- CSS variables demonstration
- Real-time theme information
- Performance comparison

---

*Dokumentasi ini dibuat untuk Nexus CSS-Only Theme System v1.0*
