# Fuzzy Fleur – Responsive Product Landing Page

## Introduction

Fuzzy Fleur is a responsive product landing page for a handmade fuzzy-wire flower business. The project was created using Laravel, Blade Components, Tailwind CSS, and Vite.

The purpose of this project is to transform a real-world flower business concept into a clean, modern, and responsive website. The landing page presents the products, features, pricing options, customer testimonials, and contact information in an organized way.

A landing page is important because it gives customers a simple way to learn about a business and its products. It also helps create a professional first impression and makes important information easy to find.

## Objectives

The main objectives of this project are:

* Create a modern responsive product landing page.
* Use Laravel and Blade Components for the website structure.
* Use Tailwind CSS for responsive styling.
* Create reusable UI components.
* Apply proper spacing, typography, colors, buttons, and cards.
* Make the website usable on desktop, tablet, and mobile devices.
* Practice responsive web design and UI/UX principles.
* Organize the project using a clean Laravel folder structure.

---

# Responsive Web Design

Responsive web design allows a website to adjust to different screen sizes and devices.

This project follows a responsive approach so that the landing page can be viewed on:

* Desktop
* Laptop
* Tablet
* Mobile phone

### Mobile-First Design

The page uses responsive Tailwind CSS classes to make the layout work on smaller screens first and expand for larger screens.

### Breakpoints

Tailwind responsive breakpoints were used to change layouts depending on screen size.

Examples:

```html
sm:grid-cols-2
md:flex
lg:grid-cols-2
lg:grid-cols-3
```

### Flexbox

Flexbox is used for navigation bars, buttons, product information, and other horizontal or vertical arrangements.

Example:

```html
<div class="flex items-center justify-between">
```

### Grid

CSS Grid is used for features, products, pricing cards, and testimonials.

Example:

```html
<div class="grid gap-6 md:grid-cols-3">
```

### User Experience

Responsive design is important because users access websites using different devices. A responsive layout improves readability, navigation, and overall usability.

---

# Tailwind CSS

Tailwind CSS is a utility-first CSS framework. Instead of writing large custom CSS files, developers can apply utility classes directly to HTML or Blade elements.

### Advantages

Tailwind CSS provides:

* Faster UI development
* Responsive utility classes
* Consistent spacing
* Easy color and typography control
* Hover and transition utilities
* Reusable styling patterns

### Responsive Utilities

Examples used in this project include:

```html
sm:text-4xl
md:grid-cols-3
lg:grid-cols-2
lg:px-8
```

These classes allow the design to adapt to different screen sizes.

### Component Styling

Tailwind classes were used to create:

* Navigation
* Buttons
* Feature cards
* Product cards
* Pricing cards
* Testimonial cards
* CTA section
* Footer

Example:

```html
rounded-3xl border shadow-sm transition hover:-translate-y-1
```

This provides rounded corners, borders, shadows, transitions, and hover effects.

---

# Blade Components

Blade Components were used to make the interface modular and reusable.

Instead of placing the same UI code repeatedly inside one large page, separate components were created for important sections.

## Components Used

```text
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
├── footer.blade.php
└── layouts/
    └── app.blade.php
```

### Why Blade Components?

Blade Components improve:

* Code organization
* Reusability
* Maintainability
* Readability
* Consistency

For example, the pricing card can be reused with different names, prices, descriptions, and features.

Example:

```blade
<x-pricing-card
    name="Classic"
    price="399"
    description="Our most-loved arrangement."
    :featured="true"
    :features="[
        '3–5 handmade flowers',
        'Premium wrapping',
        'Custom color combination'
    ]"
/>
```

This makes it easier to create multiple pricing cards without repeating the complete HTML structure.

---

# UI Design

The Fuzzy Fleur interface uses a soft and elegant visual style inspired by flowers and handmade gifts.

### Color Palette

The main colors include:

* Soft pink
* Cream
* White
* Warm brown
* Muted rose

These colors create a warm and gentle appearance that matches the flower-shop concept.

### Typography

The project uses **Poppins** as the main font.

Poppins provides a clean and modern appearance while keeping the text easy to read.

### Iconography

Simple floral and gift-related visual elements are used to support the content.

### Buttons

Buttons use:

* Rounded corners
* Clear text
* Strong contrast
* Hover effects
* Consistent spacing

### Cards

Cards are used for:

* Features
* Products
* Pricing plans
* Testimonials

They use rounded corners, borders, shadows, and consistent spacing.

### Design Consistency

The same colors, typography, spacing, rounded corners, and interaction styles are used throughout the page to create a consistent visual identity.

---

# Main Sections

The landing page contains the required sections:

1. Navbar
2. Hero Section
3. Features
4. Product Showcase
5. Pricing
6. Testimonials
7. Call-to-Action
8. Footer

The navigation also provides links to important sections of the page.

---

# Project Folder Structure

```text
week05-product-landing-page/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── documentation/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── button.blade.php
│       │   ├── footer.blade.php
│       │   └── layouts/
│       │       └── app.blade.php
│       │
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── pages/
│           └── home.blade.php
│
├── routes/
│   └── web.php
│
├── screenshots/
├── README.md
├── package.json
├── vite.config.js
└── composer.json
```

---

# Screenshots

The project documentation includes screenshots showing:

* Before and after design
* Desktop view
* Tablet view
* Mobile view
* Navbar
* Hero section
* Features
* Product showcase
* Pricing
* Testimonials
* Footer
* Blade Components folder
* VS Code project structure
* GitHub repository

Screenshots are stored in the `screenshots` folder.

---

# Before and After Design

The before design represents the basic initial layout before the final visual improvements.

The final design includes:

* Improved spacing
* Responsive layouts
* Product photography
* Rounded cards
* Shadows
* Hover effects
* Consistent typography
* Improved navigation
* Mobile navigation
* Organized product showcase
* Improved pricing and testimonial sections

The comparison demonstrates how the initial layout was transformed into a more polished responsive interface.

---

# Technologies Used

* Laravel
* PHP
* Blade
* Blade Components
* Tailwind CSS
* Vite
* HTML
* CSS
* JavaScript
* Git
* GitHub

---

# GitHub

The project repository is publicly available on GitHub.

Repository name:

`week05-product-landing-page`

The project was developed using meaningful Git commits to document the development process.

---

# Conclusion

This project helped demonstrate how Laravel, Blade Components, and Tailwind CSS can be combined to create a modern responsive landing page.

The project also provided practice in responsive web design, component-based development, UI/UX design, Git version control, and documentation.
