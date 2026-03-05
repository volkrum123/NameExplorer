# Bootstrap Class Reference for Name Explorer

A quick reference for Bootstrap classes used in the project.

---

## 1. Layout / Grid System

| Class | Use / Effect |
|-------|--------------|
| `container` | Centers content and adds horizontal padding |
| `container-fluid` | Full-width container |
| `row` | Groups columns, necessary for grid |
| `col`, `col-6`, `col-md-8`, etc. | Creates columns, responsive widths |
| `justify-content-center` | Horizontally centers content in a row |
| `align-items-center` | Vertically centers content in a row |
| `mt-#`, `mb-#`, `pt-#`, `pb-#` | Margin / padding spacing (`#` = 1–5) |
| `g-#` | Gap spacing between columns (`g-3` for example) |

---

## 2. Typography / Text

| Class | Use / Effect |
|-------|--------------|
| `text-center` | Centers text horizontally |
| `text-start` | Align text to left |
| `text-end` | Align text to right |
| `text-muted` | Gray / muted text |
| `fw-bold` | Bold text |
| `fw-light` | Lighter text weight |
| `h1, h2, h3, h4, h5, h6` | Heading sizes |
| `display-1, display-2, display-3, display-4` | Large headings for hero text |
| `lead` | Bigger, lighter paragraph (like a subtitle) |

---

## 3. Buttons

| Class | Use / Effect |
|-------|--------------|
| `btn` | Base button class (required for all buttons) |
| `btn-primary` | Primary styled button (blue by default) |
| `btn-secondary` | Secondary style (gray) |
| `btn-success` | Green, indicates success |
| `btn-danger` | Red, indicates danger / delete |
| `btn-warning` | Yellow / warning |
| `btn-info` | Light blue / info |
| `btn-light` | White / light button |
| `btn-dark` | Dark button |
| `btn-outline-*` | Outlined version of buttons (`btn-outline-primary`) |
| `btn-lg`, `btn-sm` | Large or small buttons |

---

## 4. Forms / Inputs

| Class | Use / Effect |
|-------|--------------|
| `form-control` | Style text inputs / textareas / selects |
| `form-control-lg` | Larger input |
| `form-control-sm` | Smaller input |
| `form-label` | Style labels |
| `form-check` | Checkbox / radio container |
| `form-check-input` | Checkbox / radio input |
| `form-check-label` | Checkbox / radio label |
| `form-select` | Styled select dropdown |

---

## 5. Cards / Panels

| Class | Use / Effect |
|-------|--------------|
| `card` | Base card container |
| `card-body` | Inner card content area |
| `card-title` | Card heading / title |
| `card-text` | Card paragraph text |
| `card-footer` | Footer section of a card |
| `mb-#` | Spacing between cards (`mb-2`, `mb-3`) |
| `shadow`, `shadow-sm`, `shadow-lg` | Adds shadow to card |

---

## 6. Tables

| Class | Use / Effect |
|-------|--------------|
| `table` | Base table style |
| `table-striped` | Alternating row colors |
| `table-hover` | Highlight row on hover |
| `table-bordered` | Adds borders to table |
| `table-sm` | Smaller, compact table |
| `table-responsive` | Makes table horizontally scrollable on small screens |

---

## 7. Navigation / Navbar

| Class | Use / Effect |
|-------|--------------|
| `navbar` | Base navbar container |
| `navbar-expand-lg` | Makes navbar collapsible on smaller screens |
| `navbar-dark` | Dark text for navbar items |
| `navbar-light` | Light text for navbar items |
| `bg-primary`, `bg-secondary`, `bg-light`, `bg-dark` | Background color of navbar |
| `navbar-brand` | Brand text or logo |
| `nav`, `nav-item`, `nav-link` | Navbar links |

---

## 8. Utilities (Quick Helpers)

| Class | Use / Effect |
|-------|--------------|
| `d-none`, `d-block`, `d-flex` | Display control (`flexbox`, block, hidden) |
| `flex-row`, `flex-column` | Flex direction |
| `justify-content-*`, `align-items-*` | Flex alignment |
| `text-white`, `text-primary`, `text-success`, etc. | Text colors |
| `bg-primary`, `bg-success`, `bg-light`, `bg-dark` | Background colors |
| `rounded`, `rounded-circle`, `rounded-pill` | Border radius |
| `overflow-auto` | Adds scrolling for overflowing content |

---

## 9. Spacing Helpers

| Class | Use / Effect |
|-------|--------------|
| `m-*` | Margin on all sides |
| `mt-*` | Margin-top |
| `mb-*` | Margin-bottom |
| `ms-*` | Margin-left (start) |
| `me-*` | Margin-right (end) |
| `p-*` | Padding on all sides |
| `pt-*`, `pb-*`, `ps-*`, `pe-*` | Padding top, bottom, start, end |

> `*` = number from 0–5, e.g., `mt-3` → medium margin-top

---

## 10. Interactive Components (JS-driven)

| Class / Attribute | Use / Effect |
|------------------|--------------|
| `data-bs-toggle="modal"` | Opens a modal popup |
| `data-bs-target="#id"` | Target modal / collapse / tooltip |
| `collapse` | Hidden section for accordion / collapsible content |
| `dropdown`, `dropdown-toggle`, `dropdown-menu` | Dropdown menus |
| `carousel`, `carousel-inner`, `carousel-item` | Image / content carousel |

# 🌍 Name Explorer

A clean, MVC-inspired PHP application that allows users to search and explore names stored in a PostgreSQL database.

Built with:

- PHP (PDO)
- Composer
- PostgreSQL
- Bootstrap 5 (SCSS customization)
- ESBuild
- Modern JavaScript (Fetch API)

---

## 🚀 Features

- 🔎 Live AJAX search (case-insensitive)
- 📋 Initial table view of all names
- 🗄 Secure PostgreSQL integration (PDO + prepared statements)
- 🧱 Clean MVC-style architecture
- 🎨 Customizable Bootstrap theme (SCSS)
- ⚡ Production-ready asset pipeline (Sass + ESBuild)
- 🔐 Environment-based configuration using `.env`

---

# 🏗 Project Structure

```
name-explorer/
│
├── public/                     # Apache DocumentRoot
│   ├── index.php               # Front controller
│   ├── views/
│   │   └── home.php            # Main UI
│   └── assets/
│       ├── css/
│       │   └── app.min.css     # Compiled CSS
│       └── js/
│           ├── app.js          # Frontend logic
│           └── bootstrap.js    # Bundled Bootstrap JS
│
├── resources/                  # Source assets
│   ├── scss/
│   │   └── app.scss            # Bootstrap + custom SCSS
│   └── js/
│       └── bootstrap.js        # JS entry file
│
├── src/                        # Backend source
│   ├── Database/
│   │   └── Connection.php
│   ├── Repository/
│   │   └── NameRepository.php
│   └── Controller/
│       └── NameController.php
│
├── config/
│   └── bootstrap.php           # Application bootstrap
│
├── .env                        # Environment variables
├── composer.json
├── package.json
└── vendor/
```

---

# ⚙️ Installation

## 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/name-explorer.git
cd name-explorer
```

---

## 2️⃣ Install PHP Dependencies

```bash
composer install
```

---

## 3️⃣ Setup Environment Variables

Create a `.env` file in the project root:

```
DB_HOST=127.0.0.1
DB_PORT=5432
DB_NAME=nameExplorer
DB_USER=postgres
DB_PASS=postgres
```

---

## 4️⃣ Setup PostgreSQL Database

Create the database:

```sql
CREATE DATABASE nameExplorer;
```

Create the table:

```sql
CREATE TABLE names (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    origin TEXT,
    meaning TEXT
);
```

Insert sample data:

```sql
INSERT INTO names (name, origin, meaning)
VALUES 
('John', 'Hebrew', 'God is gracious'),
('Ava', 'Latin', 'Life'),
('Liam', 'Irish', 'Strong-willed warrior');
```

---

## 5️⃣ Install Node Dependencies

```bash
npm install
```

---

## 6️⃣ Build Frontend Assets

Development build:

```bash
npm run dev:css
npm run build:js
```

Production build:

```bash
npm run build:css
npm run build:js
```

---

## 7️⃣ Configure Apache

Set your Apache **DocumentRoot** to:

```
/path-to-project/name-explorer/public
```

Restart Apache.

---

# 🧠 Architecture Overview

```
Browser
   ↓
index.php (Front Controller)
   ↓
NameController
   ↓
NameRepository
   ↓
PDO Connection
   ↓
PostgreSQL
```

---

## 🔹 Layer Responsibilities

### Database Layer (Connection)
- Creates PDO instance
- Uses environment variables
- Secure configuration

### Repository Layer
- Contains SQL queries
- Uses prepared statements
- Prevents SQL injection

### Controller Layer
- Handles HTTP requests
- Validates input
- Returns JSON responses

### View Layer
- Pure HTML + Bootstrap
- No SQL or backend logic

### Frontend JS
- Uses Fetch API
- Dynamically updates the DOM
- Handles search behavior

---

# 🔄 Application Flow

1. Page loads → Fetches all names → Displays table  
2. User types (minimum 2 characters)  
3. AJAX request sent to `index.php?action=search&q=term`  
4. JSON response returned  
5. Results rendered dynamically as Bootstrap cards  

---

# 🎨 Bootstrap Customization

SCSS entry file:

```
resources/scss/app.scss
```

Example customization:

```scss
$primary: #2563eb;
$border-radius: 0.75rem;

@import "../../node_modules/bootstrap/scss/bootstrap";
```

This allows full Bootstrap theming without modifying vendor files.

---

# 📦 Build System

## CSS (Sass)

| Command | Description |
|----------|-------------|
| `npm run dev:css` | Compile once |
| `npm run watch:css` | Auto-compile on change |
| `npm run build:css` | Minified production CSS |

## JS (ESBuild)

```bash
npm run build:js
```

Bundles Bootstrap JS into:

```
public/assets/js/bootstrap.js
```

---

# 🔐 Security Practices

- Environment-based configuration
- PDO prepared statements
- Disabled emulated prepares
- Input length validation
- Public folder as DocumentRoot

---

# 📈 Future Improvements

- Implement full Router class
- Add pagination
- Add RESTful routing
- Add CSRF protection
- Add Docker setup
- Add unit tests
- Convert to full API + SPA frontend

---

# 🏁 Final Result

A clean, maintainable PHP application with:

- Proper MVC-style separation
- Secure PostgreSQL integration
- Modern AJAX-powered frontend
- Custom Bootstrap theme
- Production-ready asset pipeline
