# Fitur Ganti Tema - Nexus

## Overview
Fitur ganti tema memungkinkan user untuk mengubah tampilan website antara mode terang, gelap, dan otomatis sesuai preferensi sistem mereka.

## Fitur Utama

### 1. Tiga Mode Tema
- **Mode Terang**: Tampilan dengan latar belakang terang
- **Mode Gelap**: Tampilan dengan latar belakang gelap yang nyaman untuk mata
- **Mode Otomatis**: Mengikuti preferensi sistem operasi user

### 2. Persistensi Tema
- Pilihan tema tersimpan di localStorage
- Tema akan diingat saat user kembali ke website
- Dukungan untuk perubahan tema sistem secara real-time

### 3. User Interface
- Dropdown theme switcher di navbar
- Icon yang berubah sesuai tema aktif
- Notifikasi toast saat mengganti tema
- Animasi transisi yang smooth

## Cara Penggunaan

### 1. Melalui Theme Switcher
1. Klik tombol tema di navbar (sebelah kanan)
2. Pilih mode yang diinginkan:
   - **Terang** - untuk mode terang
   - **Gelap** - untuk mode gelap  
   - **Otomatis** - mengikuti sistem

### 2. Keyboard Shortcut
- Tekan `Ctrl + Shift + T` (Windows) atau `Cmd + Shift + T` (Mac)
- Akan toggle antara ketiga mode tema secara berurutan

## Implementasi Teknis

### Files yang Dibuat/Dimodifikasi

1. **resources/views/components/theme-switcher.blade.php**
   - Komponen dropdown untuk memilih tema
   - Menggunakan Alpine.js untuk interaktivitas

2. **resources/js/theme-manager.js**
   - Class ThemeManager untuk mengelola tema
   - Fungsi global setTheme() untuk penggunaan dari HTML
   - Event listener untuk perubahan tema sistem

3. **resources/css/app.css**
   - Style untuk tema yang ditingkatkan
   - Scrollbar theme-aware
   - Toast notifications
   - Print styles

4. **resources/views/components/navbar.blade.php**
   - Integrasi theme switcher ke navbar
   - Mengganti toggle sederhana dengan dropdown

5. **resources/views/home.blade.php**
   - Menambah Alpine.js CDN
   - Meta theme-color untuk mobile browsers

### JavaScript API

```javascript
// Set tema programmatically
setTheme('light');   // Mode terang
setTheme('dark');    // Mode gelap
setTheme('auto');    // Mode otomatis

// Access theme manager
window.themeManager.getCurrentTheme();  // Mendapat tema aktif
window.themeManager.isDarkMode();       // Cek apakah sedang dark mode

// Listen untuk perubahan tema
document.addEventListener('themeChanged', function(event) {
    const { theme, isDark } = event.detail;
    console.log(`Tema berubah ke: ${theme}, Dark mode: ${isDark}`);
});
```

### CSS Classes

Untuk komponen custom yang ingin mendukung tema:

```css
/* Background yang mengikuti tema */
.bg-white dark:bg-gray-800

/* Text yang mengikuti tema */
.text-gray-900 dark:text-gray-100

/* Border yang mengikuti tema */
.border-gray-200 dark:border-gray-700
```

## Fitur Tambahan

### 1. Accessibility
- Keyboard navigation support
- Screen reader friendly
- High contrast mode support
- Reduced motion support

### 2. Mobile Support
- Touch-friendly interface
- Meta theme-color untuk status bar
- Responsive design

### 3. Performance
- Tema dimuat sebelum konten untuk menghindari flash
- Efficient DOM updates
- Minimal bundle size impact

## Browser Support
- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## Customization

### Menambah Tema Baru
1. Tambah tema baru di `ThemeManager.themes`
2. Update `applyTheme()` method
3. Tambah option di theme switcher component
4. Update CSS dengan class baru

### Mengubah Warna Tema
Modifikasi di `tailwind.config.js`:

```javascript
theme: {
    extend: {
        colors: {
            'nexus-indigo': {
                // Custom color palette
            }
        }
    }
}
```

## Testing

### Manual Testing
1. Test semua kombinasi tema
2. Refresh browser dan pastikan tema tersimpan
3. Ubah tema sistem dan pastikan mode auto berfungsi
4. Test di berbagai browser dan device

### Automated Testing
```javascript
// Contoh test dengan Jest
describe('Theme Manager', () => {
    test('should save theme preference', () => {
        setTheme('dark');
        expect(localStorage.getItem('nexus-theme')).toBe('dark');
    });
});
```

## Troubleshooting

### Theme Tidak Tersimpan
- Pastikan localStorage tidak diblokir
- Cek console untuk error JavaScript

### Transisi Tidak Smooth
- Pastikan CSS transitions dimuat
- Cek reduced motion preferences

### Alpine.js Error
- Pastikan Alpine.js CDN loaded
- Cek order script loading

## Future Enhancements

1. **Custom Color Themes**
   - User bisa pilih custom color palette
   - Preset tema tambahan (high contrast, sepia, etc.)

2. **Scheduled Themes**
   - Auto switch berdasarkan waktu
   - Location-based theme switching

3. **Theme Sync**
   - Sync tema across devices
   - User account integration
