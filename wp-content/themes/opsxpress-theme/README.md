# OpsXpress WordPress Theme

A modern, high-performance custom WordPress theme built for OpsXpress operations and logistics.

## Brand Colors

- **Primary Blue**: #003366 (RGB: 0, 51, 102)
- **Primary Orange**: #F27B2C (RGB: 242, 123, 44)
- **Light Background**: #F3F0FF (RGB: 243, 240, 255)

## Features

- ✅ Custom hero section with elegant typography
- ✅ Responsive design (mobile-first approach)
- ✅ Clean, modern header with menu toggle
- ✅ Smooth animations and transitions
- ✅ SEO-friendly structure
- ✅ Performance optimized
- ✅ Accessibility compliant
- ✅ Custom color palette
- ✅ WordPress theme standards compliant

## Installation

1. Copy the `opsxpress-theme` folder to your WordPress themes directory:
   ```
   wp-content/themes/
   ```

2. Activate the theme from WordPress Admin:
   - Go to Appearance → Themes
   - Find "OpsXpress" theme
   - Click "Activate"

3. Configure the theme:
   - Upload your logo: Appearance → Customize → Site Identity
   - Set up menus: Appearance → Menus
   - Create pages and assign them to menu locations

## Theme Structure

```
opsxpress-theme/
├── assets/
│   ├── css/
│   │   └── main.css          # Main stylesheet
│   └── js/
│       └── main.js            # JavaScript functionality
├── 404.php                    # 404 error page
├── footer.php                 # Footer template
├── front-page.php             # Homepage template with hero
├── functions.php              # Theme functions and setup
├── header.php                 # Header template
├── index.php                  # Main template file
├── page.php                   # Default page template
├── style.css                  # Theme information
└── README.md                  # This file
```

## Hero Section

The hero section features:
- Large, impactful typography
- Two-tone headline (main text + subtitle)
- Clean call-to-action buttons
- Subtle gradient background effect
- Smooth fade-in animation
- Fully responsive design

## Customization

### Changing Colors

Edit the CSS variables in `assets/css/main.css`:

```css
:root {
    --color-primary-blue: #003366;
    --color-primary-orange: #F27B2C;
    --color-light-bg: #F3F0FF;
}
```

### Modifying Hero Text

Edit `front-page.php` and update the hero section content.

### Adding Navigation

1. Go to WordPress Admin → Appearance → Menus
2. Create a new menu
3. Assign it to "Primary Navigation" location

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Requirements

- WordPress 6.4+
- PHP 7.4+

## Version

1.0.0 - Initial release

## Credits

Designed and developed for OpsXpress
