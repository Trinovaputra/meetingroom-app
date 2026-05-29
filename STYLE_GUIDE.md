# 🎨 Style Guide - Meeting Room Reservation

## Color System

### Primary Palette
```
Primary Blue      : #0d6efd (RGB: 13, 110, 253)
Primary Dark      : #0b5ed7 (RGB: 11, 94, 215)
Primary Light     : #0dcaf0 (RGB: 13, 202, 240)
```

**Usage**: 
- Main brand color untuk buttons, links, accents
- Dark variant untuk hover states
- Light variant untuk backgrounds/overlays

### Neutral Palette
```
Dark Text         : #212529 (RGB: 33, 37, 41)
Medium Gray       : #6c757d (RGB: 108, 117, 125)
Light Gray        : #f8f9fa (RGB: 248, 249, 250)
Border Gray       : #dee2e6 (RGB: 222, 226, 230)
White             : #ffffff (RGB: 255, 255, 255)
```

**Usage**:
- Dark untuk main text
- Medium gray untuk secondary text
- Light gray untuk backgrounds
- Border untuk dividers
- White untuk cards, modals

### Status Palette
```
Success Green     : #198754 (RGB: 25, 135, 84)
Danger Red        : #dc3545 (RGB: 220, 53, 69)
Warning Yellow    : #ffc107 (RGB: 255, 193, 7)
Info Cyan         : #0dcaf0 (RGB: 13, 202, 240)
```

**Usage**:
- Success untuk positive actions/states
- Danger untuk destructive actions/errors
- Warning untuk cautions/warnings
- Info untuk information/alerts

---

## Typography System

### Font Stack
```css
-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", 
"Helvetica Neue", "Arial", sans-serif
```

### Font Sizes
```
Heading 1 (h1)    : 2rem (32px)   | weight: 600
Heading 2 (h2)    : 1.75rem (28px) | weight: 600
Heading 3 (h3)    : 1.5rem (24px) | weight: 600
Heading 4 (h4)    : 1.25rem (20px) | weight: 600
Heading 5 (h5)    : 1.125rem (18px) | weight: 600
Heading 6 (h6)    : 1rem (16px)   | weight: 600

Body Large        : 1.125rem (18px) | weight: 400
Body Normal       : 1rem (16px)    | weight: 400
Body Small        : 0.875rem (14px) | weight: 400

Label             : 0.875rem (14px) | weight: 500
Caption           : 0.8125rem (13px) | weight: 400
```

### Line Heights
```
Headings          : 1.2 (tight, untuk impact)
Body Text         : 1.5 (comfortable reading)
Small Text        : 1.4 (untuk captions/labels)
```

### Font Weights
```
Thin              : 100
Extra Light       : 200
Light             : 300
Normal            : 400 (body text default)
Medium            : 500 (labels, semi-bold)
Semi-Bold        : 600 (headings default)
Bold              : 700 (emphasis)
Extra Bold        : 800
Black             : 900
```

---

## Spacing System

Menggunakan 8px as base unit (8px grid system)

```
xs : 0.5rem (8px)   - Minimal spacing
sm : 0.75rem (12px) - Small spacing
md : 1rem (16px)    - Standard spacing
lg : 1.5rem (24px)  - Large spacing
xl : 2rem (32px)    - Extra large
2xl: 3rem (48px)    - Extra extra large
```

**Usage Examples**:
```html
<div style="padding: var(--spacing-md);">Standard padding</div>
<div style="margin-bottom: var(--spacing-lg);">Large bottom margin</div>
<div style="gap: var(--spacing-sm);">Small gap between items</div>
```

---

## Border Radius System

```
Small  (sm)  : 8px    - Input fields, small elements
Medium (md)  : 12px   - Cards, buttons (DEFAULT)
Large  (lg)  : 16px   - Large containers, modals
XL     (xl)  : 20px   - Hero sections, featured elements
```

**Usage Examples**:
```css
.btn { border-radius: var(--radius-md); }           /* 12px */
.card { border-radius: var(--radius-md); }          /* 12px */
.input { border-radius: var(--radius-md); }         /* 12px */
.container { border-radius: var(--radius-lg); }     /* 16px */
.hero { border-radius: var(--radius-lg); }          /* 16px */
```

---

## Shadow System

Menggunakan soft shadows dengan blue tint (primary color)

```
xs : 0 1px 2px 0 rgba(13, 110, 253, 0.05)
sm : 0 2px 4px 0 rgba(13, 110, 253, 0.08)      - Default card
md : 0 4px 8px 0 rgba(13, 110, 253, 0.1)       - Elevated state
lg : 0 8px 16px 0 rgba(13, 110, 253, 0.12)     - Important element
xl : 0 12px 24px 0 rgba(13, 110, 253, 0.15)    - Maximum depth
```

**Elevation Levels**:
```
Level 0 (xs)  - Border only, minimal card, subtle elements
Level 1 (sm)  - Default card shadow
Level 2 (md)  - Hovered card, elevated containers
Level 3 (lg)  - Modals, important cards
Level 4 (xl)  - Maximum elevation, hero sections
```

**Usage**:
```html
<div class="card shadow-sm">Standar card</div>
<div class="card shadow-md">Hovered/elevated card</div>
<div class="card shadow-lg">Modal/important element</div>
```

---

## Component Specifications

### Buttons

#### Button States
```
DEFAULT     : background-color: primary, text: white
HOVER       : background-color: primary-dark, slight elevation
ACTIVE      : background-color: darker variant
DISABLED    : opacity: 0.6, cursor: not-allowed
FOCUS       : outline dengan ring
```

#### Button Sizes
```
Small (sm)   : padding: 0.375rem 0.75rem | font-size: 0.8125rem
Normal (md)  : padding: 0.625rem 1.25rem | font-size: 0.875rem
Large (lg)   : padding: 0.75rem 1.5rem   | font-size: 1rem
```

#### Button Variants
```
Primary     : blue background
Secondary   : gray background
Danger      : red background
Success     : green background
Outline     : transparent background, colored border
```

### Cards

#### Struktur Card
```
┌─────────────────────────────┐
│ card-header (optional)      │ bg: light-gray, padding: lg
├─────────────────────────────┤
│ card-body                   │ bg: white, padding: lg
├─────────────────────────────┤
│ card-footer (optional)      │ bg: light-gray, padding: lg
└─────────────────────────────┘
```

#### Card Properties
```
Border        : 1px solid border-gray
Border Radius : 12px (var(--radius-md))
Shadow        : shadow-sm (default)
Shadow Hover  : shadow-md (on hover)
Transition    : 0.3s ease-in-out
```

### Form Elements

#### Input States
```
DEFAULT   : border: 1px border-gray, bg: white
FOCUS     : border: primary-blue, box-shadow: 0 0 0 3px rgba(primary, 0.1)
DISABLED  : bg: light-gray, opacity: 0.6, cursor: not-allowed
ERROR     : border: danger-red, bg: rgba(danger, 0.05)
SUCCESS   : border: success-green, bg: rgba(success, 0.05)
```

#### Form Properties
```
Border Radius : 12px (var(--radius-md))
Padding       : 0.625rem 0.875rem
Font Size     : 1rem (16px)
Line Height   : 1.5
```

### Navbar

#### Navbar Properties
```
Background      : white
Border Bottom   : 1px solid border-gray
Shadow          : shadow-xs
Padding         : md (1rem 0)
Position        : sticky (top: 0)
Z-Index         : 100
```

#### Navbar Items
```
Brand           : font-size: 1.5rem, font-weight: 700, color: primary
Links           : font-size: sm, font-weight: 500, color: dark
Active Link     : color: primary, bottom border indicator
Buttons         : standard button styling
```

---

## Layout Specifications

### Container
```
Default (container)  : max-width: 1200px, padding: 0 24px
Small (container-sm) : max-width: 576px
Medium (container-md): max-width: 768px
Large (container-lg) : max-width: 992px
```

### Grid System
```
Columns         : 12-column grid
Gap             : 24px (default), 16px (mobile)
Column Widths   : equal distribution (1/12 per column)
Responsive      : Full width on mobile, grid on desktop
```

### Responsive Breakpoints
```
Mobile   : < 576px  (single column, full width)
Tablet   : 576-768px (2 columns, adjusted spacing)
Desktop  : > 768px  (12-column grid, full layout)
```

---

## Interaction Design

### Transitions
```
Duration        : 0.2s - 0.3s
Timing Function : ease-in-out
Properties      : all (color, background, border, shadow)
```

### Hover Effects
```
Buttons         : background color change + slight elevation
Cards           : shadow increase + subtle border change
Links           : color change + underline appear
Inputs          : border color change + ring appear
```

### Focus States
```
Keyboard Focus  : blue ring around element
Visual Indicator: 3px ring with primary color
Offset          : 2px from element
```

---

## Accessibility Guidelines

### Color Contrast
```
Normal Text (14px+)      : 4.5:1 (WCAG AA)
Large Text (18px+)       : 3:1 (WCAG AA)
UI Components & Borders  : 3:1 (WCAG AA)
```

### Touch Targets
```
Minimum Size    : 44x44px (mobile)
Spacing         : 8px minimum between targets
Cursor          : pointer for interactive elements
```

### Text
```
Minimum Size    : 12px (14px preferred)
Line Height     : 1.4 - 1.5 for optimal reading
Line Length     : 45-75 characters for readability
```

---

## Icon System

### Icon Sizes
```
Small    : 16px x 16px (for inline use)
Normal   : 24px x 24px (default)
Large    : 32px x 32px (prominent use)
XL       : 48px x 48px (hero/featured)
```

### Icon Positioning
```
Inline   : center-aligned with text
Button   : 4px spacing from text
Card     : centered above title
Header   : left-aligned with title
```

---

## Animation & Motion

### Principles
```
Subtle          : Keep animations under 300ms
Purpose-driven  : Only animate for clarity/feedback
Consistent      : Use same timing across app
Accessible      : Respect prefers-reduced-motion
```

### Common Animations
```
Fade In         : opacity 0 → 1 (200ms)
Slide In        : transform translateX/Y (250ms)
Scale           : transform scale (150ms)
Elevation       : box-shadow depth change (300ms)
```

---

## State Indicators

### Visual States
```
DEFAULT  : Normal appearance, no special styling
HOVER    : Background/color/shadow change
ACTIVE   : Darker/more prominent appearance
FOCUSED  : Ring outline in primary color
DISABLED : Opacity 0.6, cursor not-allowed
LOADING  : Spinner or loader indicator
ERROR    : Red border/background, error message
SUCCESS  : Green checkmark, success message
```

---

## Example Implementations

### Card Hierarchy
```html
<!-- Level 0 (Subtle) -->
<div class="card shadow-xs">
  <!-- Minimal depth -->
</div>

<!-- Level 1 (Standard) -->
<div class="card shadow-sm">
  <!-- Default card appearance -->
</div>

<!-- Level 2 (Elevated) -->
<div class="card shadow-md">
  <!-- Hovered or featured content -->
</div>

<!-- Level 3 (Important) -->
<div class="card shadow-lg">
  <!-- Modal or critical information -->
</div>
```

### Color Usage
```html
<!-- Text Colors -->
<p class="text-primary">Important information</p>
<p class="text-muted">Secondary information</p>
<p class="text-success">Positive action result</p>
<p class="text-danger">Error or warning</p>

<!-- Background Colors -->
<div class="bg-light">Light background</div>
<div class="bg-primary">Accent background</div>

<!-- Alerts -->
<div class="alert alert-success">Success message</div>
<div class="alert alert-danger">Error message</div>
<div class="alert alert-warning">Warning message</div>
<div class="alert alert-info">Information message</div>
```

---

## Design Tokens Summary

| Token Type | Usage | Example |
|-----------|-------|---------|
| Colors | UI Elements | Primary, Secondary, Status colors |
| Typography | Text Rendering | Headings, Body, Labels |
| Spacing | Margins, Padding | 8px grid system |
| Radius | Border Curves | 8px - 20px range |
| Shadows | Depth & Elevation | 5 elevation levels |
| Transitions | Motion & Animation | 200-300ms animations |

---

## Quick Reference

### CSS Variables
```css
/* Colors */
--primary: #0d6efd;
--secondary: #f8f9fa;
--dark: #212529;

/* Spacing */
--spacing-md: 1rem;
--spacing-lg: 1.5rem;

/* Borders */
--radius-md: 12px;
--radius-lg: 16px;

/* Shadows */
--shadow-sm: 0 2px 4px 0 rgba(13, 110, 253, 0.08);
--shadow-md: 0 4px 8px 0 rgba(13, 110, 253, 0.1);
```

### Common Classes
```html
<!-- Buttons -->
<button class="btn btn-primary">Primary Button</button>

<!-- Cards -->
<div class="card shadow-sm">Card Content</div>

<!-- Layout -->
<div class="container">
  <div class="row">
    <div class="col-6">Half Width</div>
  </div>
</div>

<!-- Alerts -->
<div class="alert alert-success">Success!</div>
```

---

**Dokumen ini berlaku untuk semua development pada Meeting Room Reservation App**

Versi: 1.0.0 | Tanggal: Mai 24, 2026
