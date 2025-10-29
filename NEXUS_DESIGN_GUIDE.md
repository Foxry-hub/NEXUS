# Nexus - Panduan Desain & Implementasi

## 🎨 Konsep Desain

Nexus adalah platform marketplace untuk seniman digital dengan fokus pada visual karya seni. Desain menggunakan pendekatan **Pinterest-style masonry grid** dengan interaksi yang halus dan modern.

## 🎯 Skema Warna

### Light Mode
- **Background Utama**: `#F9FAFB` (Gray-50) - Putih gading lembut yang netral
- **Background Card**: `#FFFFFF` - Putih bersih
- **Text Primary**: `#111827` (Gray-900)
- **Text Secondary**: `#6B7280` (Gray-500)

### Dark Mode
- **Background Utama**: `#111827` (Gray-900) - Abu-abu gelap dengan hint kebiruan
- **Background Card**: `#1F2937` (Gray-800)
- **Text Primary**: `#F9FAFB` (Gray-50)
- **Text Secondary**: `#9CA3AF` (Gray-400)

### Warna Brand "Nexus" (Indigo/Violet)
- **Primary**: `#6366F1` (Indigo-600)
- **Primary Dark**: `#5C2D91` (Violet)
- **Accent**: `#8B5CF6` (Violet-500)

Warna brand ini digunakan untuk:
- ✅ Tombol Call-to-Action (Upload Karya, Jual Karya, Buka Jasa)
- ✅ Overlay hover pada gambar karya
- ✅ Link dan elemen interaktif
- ✅ Logo dan branding

## 🏗️ Struktur Halaman

### 1. Header Navigation (Fixed)
- Logo Nexus dengan gradient indigo-violet
- Search bar di tengah
- Theme toggle (dark/light mode)
- Tombol Login/Register atau Profile Avatar

### 2. Hero Section
- Judul dengan gradient text
- Deskripsi singkat platform
- Category pills untuk filter

### 3. Masonry Grid
- Responsive: 1 kolom (mobile) → 2 kolom (tablet) → 3-4 kolom (desktop)
- Auto-adjust berdasarkan tinggi gambar
- Gap spacing yang konsisten

### 4. Artwork Card
Setiap karya menampilkan:
- **Image**: Gambar karya dengan lazy loading
- **Overlay (on hover)**: 
  - Gradient background indigo dengan opacity
  - Judul karya
  - Nama seniman
  - Tombol "Simpan ke Koleksi" (indigo-600)
  - Tombol "Tawarkan Jasa" (white/10 dengan backdrop blur)
  - Jumlah likes

### 5. Footer
- Grid 4 kolom dengan links
- Social media icons
- Copyright

## 🎭 Interaksi & Animasi

### Hover Effects
```css
/* Pada artwork card */
- Shadow elevation: shadow-sm → shadow-xl
- Overlay opacity: 0 → 1 (300ms ease)
- Transform translate pada info: translateY(8px) → translateY(0)
```

### Dark Mode Toggle
- Smooth transition 300ms pada semua warna
- Persistent menggunakan localStorage
- Icon sun/moon yang berganti

### Lazy Loading
- Images menggunakan Intersection Observer API
- Loading="lazy" untuk performance

## 📱 Responsiveness

### Breakpoints
- **Mobile**: < 640px (sm) - 1 column
- **Tablet**: 640px - 1024px - 2 columns
- **Desktop**: 1024px - 1280px - 3 columns
- **Large Desktop**: > 1280px - 4 columns

### Mobile Optimizations
- Hamburger menu (jika diperlukan)
- Touch-friendly button sizes (min 44px)
- Simplified overlay pada mobile
- Reduced gap spacing

## 🚀 Teknologi

### Frontend
- **Laravel Blade**: Templating engine
- **Tailwind CSS v4**: Utility-first CSS framework
- **Vite**: Modern build tool
- **Vanilla JavaScript**: Dark mode & lazy loading

### Custom CSS
```css
/* Masonry Grid */
.masonry-grid {
    column-count: 1-4 (responsive);
    column-gap: 1-2rem;
}

.masonry-item {
    break-inside: avoid;
}
```

## 🎨 Brand Identity

### Typography
- **Font Family**: Instrument Sans (Google Fonts)
- **Weights**: 400 (regular), 500 (medium), 600 (semibold), 700 (bold)
- **Sizes**: 
  - Heading: 3xl - 5xl
  - Body: sm - base
  - Caption: xs - sm

### Logo Concept
- Shield/Hexagon dengan dot pattern
- Gradient indigo to violet
- Modern dan tech-forward
- Mewakili "connection" dan "creative hub"

## 📋 Fitur Utama

### Untuk Pengunjung
- [x] Browse karya seni dengan masonry grid
- [x] Filter berdasarkan kategori
- [x] Search functionality
- [x] Dark/Light mode toggle
- [ ] Simpan ke koleksi (requires auth)

### Untuk Seniman
- [ ] Upload karya baru
- [ ] Manage portfolio
- [ ] Tawarkan jasa profesional
- [ ] Profile page (LinkedIn-style)
- [ ] Analytics dashboard

### Future Enhancements
- [ ] Infinite scroll
- [ ] Advanced filtering
- [ ] Social features (comments, shares)
- [ ] Payment integration
- [ ] Messaging system
- [ ] Commission requests

## 🎯 Best Practices

### Performance
1. Lazy loading images
2. Optimized image sizes (WebP format)
3. CSS/JS minification
4. CDN untuk static assets

### Accessibility
1. Semantic HTML
2. ARIA labels pada interactive elements
3. Keyboard navigation support
4. Color contrast ratios (WCAG AA)

### SEO
1. Meta tags optimization
2. Structured data (Schema.org)
3. Sitemap generation
4. Fast page load times

## 🔧 Development Commands

```bash
# Install dependencies
npm install

# Run development server
npm run dev

# Build for production
npm run build

# Run Laravel server
php artisan serve
```

## 📝 Notes

- Background warna HARUS netral agar karya seni menonjol
- Warna brand hanya untuk interaksi (buttons, overlays, links)
- Konsistensi visual sangat penting
- Mobile-first approach
- Performance is key untuk image-heavy platform

---

**Dibuat dengan** 💜 **untuk komunitas seniman digital Indonesia**
