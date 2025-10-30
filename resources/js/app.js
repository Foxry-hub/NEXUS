import './bootstrap';

// Dark Mode Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Check for saved theme preference or default to light mode
    const currentTheme = localStorage.getItem('theme') || 'light';

    // Set initial theme
    if (currentTheme === 'dark') {
        document.documentElement.classList.add('dark');
        themeToggleLightIcon?.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        themeToggleDarkIcon?.classList.remove('hidden');
    }

    // Toggle theme on button click
    themeToggleBtn?.addEventListener('click', function() {
        // Toggle icons
        themeToggleDarkIcon?.classList.toggle('hidden');
        themeToggleLightIcon?.classList.toggle('hidden');

        // Toggle dark mode
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
});

// Lazy Loading Images
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[loading="lazy"]');

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('fade-in');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    }
});

// Masonry Grid Initialization (optional enhancement)
document.addEventListener('DOMContentLoaded', function() {
    const masonryGrid = document.getElementById('masonry-grid');

    if (masonryGrid) {
        // Add smooth reveal animation to items
        const items = masonryGrid.querySelectorAll('.masonry-item');
        items.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';

            setTimeout(() => {
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 50); // Stagger animation
        });
    }
});

// Smooth Scroll for anchor links
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Add to Collection functionality (placeholder)
document.addEventListener('click', function(e) {
    if (e.target.closest('[title="Simpan ke Koleksi"]')) {
        const button = e.target.closest('button');
        const svg = button.querySelector('svg');

        // Toggle saved state
        if (svg.getAttribute('fill') === 'none') {
            svg.setAttribute('fill', 'currentColor');
            button.classList.add('bg-indigo-500');
            button.querySelector('svg').classList.add('text-white');

            // Show toast notification (you can implement a toast component)
            console.log('Ditambahkan ke koleksi');
        } else {
            svg.setAttribute('fill', 'none');
            button.classList.remove('bg-indigo-500');
            button.querySelector('svg').classList.remove('text-white');

            console.log('Dihapus dari koleksi');
        }
    }
});

// Listen for theme changes and update components accordingly
document.addEventListener('themeChanged', function(event) {
    const { theme, isDark } = event.detail;
    console.log(`Theme changed to: ${theme}`);

    // Update any dynamic components that need theme awareness
    // Example: update chart colors, map styles, etc.
    updateDynamicComponents(isDark);
});

// Function to update components that need theme awareness
function updateDynamicComponents(isDark) {
    // Update any charts, maps, or other dynamic content
    // that need to be aware of the current theme

    // Example: Update chart colors
    const charts = document.querySelectorAll('.chart-container');
    charts.forEach(chart => {
        if (isDark) {
            chart.classList.add('dark-theme');
        } else {
            chart.classList.remove('dark-theme');
        }
    });

    // Example: Update image filters or overlays
    const artworkImages = document.querySelectorAll('.artwork-image');
    artworkImages.forEach(img => {
        if (isDark) {
            img.style.filter = 'brightness(0.95)';
        } else {
            img.style.filter = 'brightness(1)';
        }
    });
}
