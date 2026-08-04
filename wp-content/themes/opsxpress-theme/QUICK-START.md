# OpsXpress Theme - Quick Start Guide 🚀

## Installation in 3 Minutes

### Step 1: Upload Theme
Copy the `opsxpress-theme` folder to:
```
C:\xampp\htdocs\[your-site]\wp-content\themes\
```

### Step 2: Activate
1. Open WordPress Admin: `http://localhost/[your-site]/wp-admin`
2. Go to **Appearance → Themes**
3. Find **OpsXpress** theme
4. Click **Activate**

### Step 3: Done! ✅
Your theme is now active with the hero section ready.

---

## Hero Section Preview

The homepage features a stunning hero with:

```
┌─────────────────────────────────────────────┐
│  Menu          [Logo]          AIRLOOM      │ ← Header
├─────────────────────────────────────────────┤
│                                             │
│   The next era of resilient power.         │ ← Main Title (Black)
│   Utility-scale, low-cost energy,          │ ← Subtitle (Gray)
│   built for the world.                     │
│                                             │
│   [Discover]  [Watch]                      │ ← CTA Buttons
│                                             │
└─────────────────────────────────────────────┘
```

**Colors Used:**
- Background: Light Purple (#F3F0FF)
- Main Text: Black
- Subtitle: Gray
- Primary Button: Black → Blue on hover
- Secondary Button: White → Orange border on hover

---

## Customize Hero Text

Edit: `front-page.php` (around line 15)

```php
<span class="hero-title-main">Your Main Headline</span>
<span class="hero-title-sub">Your subtitle here</span>
```

---

## Optional: Add Menu

1. **Appearance → Menus**
2. Create new menu
3. Add pages (Home, About, Services, Contact)
4. Select "Primary Navigation" location
5. Save

---

## Optional: Upload Logo

1. **Appearance → Customize**
2. **Site Identity → Select Logo**
3. Upload image (recommended: 200x60px PNG)
4. Publish

---

## File Locations

```
opsxpress-theme/
├── front-page.php          ← Homepage (Hero Section)
├── header.php              ← Header with Menu & Logo
├── footer.php              ← Footer
├── assets/css/main.css     ← All Styles
├── assets/js/main.js       ← JavaScript
└── functions.php           ← Theme Setup
```

---

## Brand Colors

```css
Primary Blue:     #003366  (Headers, Hover)
Primary Orange:   #F27B2C  (Accents, CTAs)
Light Background: #F3F0FF  (Hero, Cards)
```

To change: Edit `assets/css/main.css` (top section, CSS variables)

---

## Support Files

- 📖 **README.md** - Theme overview
- 📋 **INSTALLATION.md** - Detailed setup
- 🏗️ **THEME-STRUCTURE.md** - Complete documentation
- ⚡ **QUICK-START.md** - This file

---

## Need Help?

Check the documentation files above for:
- Detailed installation
- Customization guide
- File structure
- Troubleshooting

---

**Theme Version:** 1.0.0  
**WordPress Version:** 6.4+  
**PHP Version:** 7.4+

Happy building with OpsXpress! 🎉
