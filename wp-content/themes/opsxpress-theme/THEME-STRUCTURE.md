# OpsXpress Theme - Complete Structure

## Theme Overview

**Theme Name:** OpsXpress  
**Version:** 1.0.0  
**Created For:** OpsXpress Operations & Logistics  
**Type:** Custom WordPress Theme

## Brand Identity

### Color Palette
```css
Primary Blue:     #003366 (RGB: 0, 51, 102)   - Headers, Primary Elements
Primary Orange:   #F27B2C (RGB: 242, 123, 44)  - CTAs, Accents, Hover States
Light Background: #F3F0FF (RGB: 243, 240, 255) - Hero Background, Cards
White:            #FFFFFF                       - Clean Backgrounds
Black:            #000000                       - Typography
Gray Light:       #E5E5E5                       - Borders, Dividers
```

### Typography
- **Font Family:** System Font Stack (-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, etc.)
- **Base Font Size:** 16px
- **Line Height:** 1.6
- **Hero Title:** 3-5rem (responsive via clamp)
- **Hero Subtitle:** 2-4rem (responsive via clamp)

## File Structure

```
opsxpress-theme/
│
├── assets/                      # Theme assets
│   ├── css/
│   │   ├── main.css            # Main stylesheet with all theme styles
│   │   └── editor.css          # Block editor styles
│   └── js/
│       └── main.js             # JavaScript for interactivity
│
├── Core Theme Files
├── 404.php                      # 404 error page template
├── footer.php                   # Footer template part
├── front-page.php               # Homepage template (with hero)
├── functions.php                # Theme functions and hooks
├── header.php                   # Header template part
├── index.php                    # Main fallback template
├── page.php                     # Default page template
├── page-about.php               # About page template
├── page-contact.php             # Contact page template
├── style.css                    # Theme metadata (required)
│
└── Documentation
    ├── README.md                # Theme overview and quick start
    ├── INSTALLATION.md          # Detailed installation guide
    └── THEME-STRUCTURE.md       # This file - complete structure
```

## Template Hierarchy

### Homepage
`front-page.php` → Displays custom hero section with:
- Large headline (main + subtitle)
- Two CTA buttons (Discover, Watch)
- Light purple gradient background
- Smooth animations

### Pages
`page.php` → Default page template with:
- Page title
- Full content area
- Standard layout

`page-about.php` → About page with:
- Hero banner
- Content area

`page-contact.php` → Contact page with:
- Contact info section
- Contact form area (plugin required)

### Error Pages
`404.php` → Custom 404 error page with:
- Large "404" text
- Helpful message
- "Go Home" button

## Key Features

### 1. Hero Section
Located in: `front-page.php`

**Structure:**
```html
<section class="hero-section">
  <div class="hero-container">
    <div class="hero-content">
      <h1 class="hero-title">
        <span class="hero-title-main">Main Headline</span>
        <span class="hero-title-sub">Subtitle Text</span>
      </h1>
      <div class="hero-actions">
        <button class="btn btn-primary">Discover</button>
        <button class="btn btn-secondary">Watch</button>
      </div>
    </div>
  </div>
</section>
```

**Styling Features:**
- Full viewport height (100vh)
- Centered content
- Light purple background (#F3F0FF)
- Radial gradient overlay
- Fade-in animation on load
- Fully responsive typography

### 2. Header
Located in: `header.php`

**Components:**
- Left: Menu toggle button
- Center: Logo (SVG or custom logo)
- Right: "AIRLOOM" link
- Navigation menu (toggleable on mobile)

**Features:**
- Fixed positioning
- Glass-morphism effect (backdrop blur)
- Scroll shadow effect
- Smooth transitions

### 3. Buttons
Two button styles:

**Primary Button:**
- Black background
- White text
- Hover: Blue background with shadow
- Rounded (50px radius)

**Secondary Button:**
- White background
- Black text with border
- Hover: Light purple bg, orange border
- Rounded (50px radius)

### 4. Responsive Design

**Breakpoints:**
```css
Desktop:  1400px+ (full width)
Tablet:   768px - 1399px
Mobile:   < 768px
Small:    < 480px
```

**Mobile Optimizations:**
- Stacked button layout
- Reduced font sizes
- Adjusted padding/spacing
- Touch-friendly UI elements

## Functions & Hooks

### Main Functions (functions.php)

1. **opsxpress_setup()**
   - Theme support registration
   - Navigation menus
   - Custom logo support
   - HTML5 support

2. **opsxpress_assets()**
   - Enqueues CSS and JavaScript
   - Version control for cache busting

3. **opsxpress_preload_home_hero()**
   - Preloads hero image for performance
   - Only on homepage

### JavaScript Features (main.js)

1. **Mobile Menu Toggle**
   - Toggles navigation visibility
   - Keyboard accessible (ESC to close)

2. **Smooth Scrolling**
   - Smooth scroll for anchor links
   - Offset for fixed header

3. **Header Scroll Effect**
   - Adds shadow on scroll
   - Performance optimized

4. **Animation on Scroll**
   - Intersection Observer API
   - Progressive enhancement

5. **Form Validation**
   - Basic client-side validation
   - Accessible error messages

## CSS Architecture

### Organization
1. CSS Variables (custom properties)
2. Reset & Base styles
3. Header styles
4. Hero section styles
5. Button styles
6. Page template styles
7. Footer styles
8. Responsive media queries
9. Accessibility styles
10. Print styles

### Naming Convention
- BEM-inspired: `.block-element--modifier`
- Semantic class names
- Utility classes where appropriate

## Browser Support

**Tested & Supported:**
- ✅ Chrome (latest 2 versions)
- ✅ Firefox (latest 2 versions)
- ✅ Safari (latest 2 versions)
- ✅ Edge (latest 2 versions)
- ✅ iOS Safari 12+
- ✅ Chrome Mobile (latest)

**Features Using Progressive Enhancement:**
- CSS Grid (fallback to flexbox)
- CSS Custom Properties (fallback values)
- Intersection Observer (graceful degradation)

## Performance Optimizations

1. **Asset Loading**
   - CSS in `<head>`
   - JavaScript in footer with defer
   - Preload critical images

2. **CSS**
   - Minify for production
   - Single CSS file (reduced HTTP requests)
   - Critical CSS inlined (can be added)

3. **JavaScript**
   - Vanilla JS (no jQuery dependency)
   - Event delegation
   - Debounced scroll handlers

4. **Images**
   - Use WebP format when possible
   - Responsive images with srcset
   - Lazy loading for below-fold images

## Accessibility Features

- ✅ Semantic HTML5 elements
- ✅ ARIA labels where needed
- ✅ Keyboard navigation support
- ✅ Focus visible indicators
- ✅ Skip to main content link
- ✅ Color contrast (WCAG AA compliant)
- ✅ Screen reader friendly
- ✅ Alternative text for images

## SEO Features

- Semantic HTML structure
- Proper heading hierarchy
- Meta tags support (via WordPress)
- Clean URL structure
- Mobile-friendly design
- Fast loading times
- Schema.org markup ready

## Customization Guide

### Changing Hero Text
Edit: `front-page.php` (lines 15-25)

### Changing Colors
Edit: `assets/css/main.css` (CSS variables at top)

### Changing Fonts
Edit: `assets/css/main.css` (--font-primary variable)

### Adding New Templates
1. Create file: `page-{name}.php`
2. Add template header comment
3. Copy structure from `page.php`
4. Customize as needed

### Modifying Header/Footer
- Edit `header.php` for header changes
- Edit `footer.php` for footer changes

## WordPress Requirements

- **WordPress Version:** 6.4 or higher
- **PHP Version:** 7.4 or higher
- **MySQL Version:** 5.6 or higher (or MariaDB 10.1+)

## Recommended Plugins

**Essential:**
- Contact Form 7 or WPForms
- Yoast SEO

**Performance:**
- WP Super Cache or W3 Total Cache
- Autoptimize (for minification)

**Security:**
- Wordfence Security
- Limit Login Attempts

## Known Limitations

1. No built-in contact form (requires plugin)
2. No custom post types (can be added)
3. No e-commerce support (requires WooCommerce)
4. Limited block patterns (can be added)

## Future Enhancement Ideas

- [ ] Add more page templates
- [ ] Create custom Gutenberg blocks
- [ ] Add WooCommerce support
- [ ] Create child theme starter
- [ ] Add more animation options
- [ ] Add dark mode toggle
- [ ] Create customizer options
- [ ] Add widget areas
- [ ] Create block patterns
- [ ] Add custom post types

## Credits

**Design Inspiration:** Modern energy/tech website aesthetics  
**Developed For:** OpsXpress  
**Built With:** WordPress, HTML5, CSS3, Vanilla JavaScript  
**Year:** 2026

## Support & Maintenance

For theme updates and support:
1. Backup theme before updating
2. Test in staging environment
3. Check WordPress and PHP compatibility
4. Review changelog for breaking changes

---

**Document Version:** 1.0  
**Last Updated:** August 3, 2026  
**Theme Version:** 1.0.0
