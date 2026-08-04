# OpsXpress Theme - Installation Guide

## Step-by-Step Installation

### 1. Upload Theme to WordPress

**Option A: Via WordPress Admin (Recommended)**
1. Log into your WordPress Admin Dashboard
2. Navigate to **Appearance → Themes**
3. Click **Add New** button
4. Click **Upload Theme** button
5. Choose the `opsxpress-theme.zip` file (zip the folder first)
6. Click **Install Now**
7. Click **Activate** once installation is complete

**Option B: Via FTP/File Manager**
1. Zip the `opsxpress-theme` folder (not required, can upload folder directly)
2. Connect to your server via FTP or use cPanel File Manager
3. Navigate to: `wp-content/themes/`
4. Upload the `opsxpress-theme` folder
5. Go to WordPress Admin → Appearance → Themes
6. Find "OpsXpress" and click **Activate**

**Option C: Via XAMPP Local Installation**
1. Copy the `opsxpress-theme` folder
2. Paste it into: `C:\xampp\htdocs\[your-site]\wp-content\themes\`
3. Go to WordPress Admin (http://localhost/[your-site]/wp-admin)
4. Navigate to Appearance → Themes
5. Activate "OpsXpress" theme

### 2. Initial Theme Setup

After activation:

1. **Set Homepage**
   - Go to **Settings → Reading**
   - Select "A static page" for homepage display
   - Choose your home page from dropdown
   - Click **Save Changes**

2. **Upload Logo** (Optional)
   - Go to **Appearance → Customize**
   - Click **Site Identity**
   - Click **Select Logo**
   - Upload your logo image
   - Click **Publish**

3. **Create Navigation Menu**
   - Go to **Appearance → Menus**
   - Create a new menu (e.g., "Main Menu")
   - Add pages to your menu
   - Check "Primary Navigation" location
   - Click **Save Menu**

4. **Create Essential Pages**
   Create these pages:
   - Home (set as front page)
   - About
   - Services
   - Contact
   - Any other pages you need

### 3. Customize Brand Colors

If you need to adjust the brand colors:

1. Access your theme files via FTP or File Manager
2. Open: `wp-content/themes/opsxpress-theme/assets/css/main.css`
3. Modify the CSS variables at the top:

```css
:root {
    --color-primary-blue: #003366;
    --color-primary-orange: #F27B2C;
    --color-light-bg: #F3F0FF;
}
```

4. Save the file

### 4. Customize Hero Section Content

To change the hero section text:

1. Open: `wp-content/themes/opsxpress-theme/front-page.php`
2. Find the hero section (around line 15-25)
3. Edit the text:

```php
<h1 class="hero-title">
    <span class="hero-title-main">Your Main Headline Here</span>
    <span class="hero-title-sub">Your subtitle text here</span>
</h1>
```

4. Change button text and links as needed
5. Save the file

### 5. Install Recommended Plugins

For full functionality, install these plugins:

**Essential:**
- Contact Form 7 or WPForms (for contact form)
- Yoast SEO (for SEO optimization)

**Recommended:**
- WP Super Cache or W3 Total Cache (for performance)
- Wordfence Security (for security)
- Akismet Anti-Spam (pre-installed, just activate)

### 6. Configure Site Settings

1. **Permalinks**
   - Go to **Settings → Permalinks**
   - Select "Post name"
   - Click **Save Changes**

2. **Site Title & Tagline**
   - Go to **Settings → General**
   - Set your site title: "OpsXpress"
   - Add tagline: "Your tagline here"
   - Click **Save Changes**

### 7. Add Content

1. Create pages with content
2. Add featured images to pages/posts
3. Populate your menu items
4. Test all links and buttons

### 8. Testing

Check the following:

- [ ] Homepage displays correctly
- [ ] Hero section shows proper text and styling
- [ ] Navigation menu works
- [ ] All pages load without errors
- [ ] Mobile responsive design works
- [ ] Contact form submits (if added)
- [ ] Logo displays (if uploaded)
- [ ] Footer shows correctly

### 9. Go Live

**For Local to Live Migration:**

1. Export database from phpMyAdmin
2. Upload theme files to live server
3. Import database to live server
4. Update `wp-config.php` with live database credentials
5. Use Search-Replace-DB script to update URLs
6. Test everything on live site

## Troubleshooting

**Issue: Theme doesn't appear in themes list**
- Check folder structure: theme files should be directly in `opsxpress-theme` folder
- Ensure `style.css` and `index.php` exist in the root of theme folder

**Issue: Homepage shows posts instead of custom front page**
- Go to Settings → Reading → Set "A static page" and select your home page

**Issue: Styles not loading**
- Clear browser cache (Ctrl+F5 or Cmd+Shift+R)
- Clear WordPress cache if using a caching plugin
- Check file permissions (files should be 644, folders 755)

**Issue: Menu not showing**
- Create a menu: Appearance → Menus
- Assign it to "Primary Navigation" location

**Issue: Logo not showing**
- Check image file format (PNG, JPG, SVG supported)
- Try uploading a different size (recommended: 200x60px)

## Support

For theme-specific issues:
- Check README.md for features and structure
- Review code comments in theme files
- Verify WordPress and PHP version requirements

## Version History

- **1.0.0** - Initial release
  - Custom hero section
  - Responsive design
  - Brand color implementation
  - Header and footer templates
  - Page templates

---

**Last Updated:** 2026
**Theme Version:** 1.0.0
**Tested up to:** WordPress 6.4+
