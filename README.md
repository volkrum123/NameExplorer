🌍 Name Explorer

A clean, MVC-inspired PHP application that allows users to search and explore names using a PostgreSQL database.
Built with PHP (PDO), Composer, Bootstrap 5 (SCSS), ESBuild, and modern JavaScript (Fetch API).

🚀 Features

🔎 Live AJAX search (case-insensitive)

📋 Initial table view of all names

🗄 PostgreSQL integration (secure PDO)

🧱 Clean MVC-style architecture

🎨 Customizable Bootstrap theme (SCSS)

⚡ Production-ready asset pipeline (Sass + ESBuild)

🔐 Environment-based configuration (.env)

🏗 Project Structure
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
│   └── bootstrap.php           # App bootstrap
│
├── .env                        # Environment variables
├── composer.json
├── package.json
└── vendor/
⚙️ Installation
1️⃣ Clone the Repository
git clone https://github.com/your-username/name-explorer.git
cd name-explorer
2️⃣ Install PHP Dependencies
composer install
3️⃣ Setup Environment Variables

Create a .env file in the project root:

DB_HOST=127.0.0.1
DB_PORT=5432
DB_NAME=nameExplorer
DB_USER=postgres
DB_PASS=postgres
4️⃣ Setup PostgreSQL Database

Create the database:

CREATE DATABASE nameExplorer;

Create the table:

CREATE TABLE names (
    id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    origin TEXT,
    meaning TEXT
);

Insert sample data:

INSERT INTO names (name, origin, meaning)
VALUES 
('John', 'Hebrew', 'God is gracious'),
('Ava', 'Latin', 'Life'),
('Liam', 'Irish', 'Strong-willed warrior');
5️⃣ Install Node Dependencies
npm install
6️⃣ Build Frontend Assets

Development build:

npm run dev:css
npm run build:js

Production build:

npm run build:css
npm run build:js
7️⃣ Configure Apache

Set your Apache DocumentRoot to:

/path-to-project/name-explorer/public

Restart Apache.

🧠 Architecture Overview

The application follows a clean layered structure:

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
🔹 Layer Responsibilities
📦 Connection (Database Layer)

Creates PDO instance

Uses environment variables

Secure configuration

📚 Repository (Data Layer)

Contains SQL queries

Uses prepared statements

Prevents SQL injection

🎮 Controller (HTTP Layer)

Handles $_GET

Validates input

Returns JSON responses

🖥 View (Presentation Layer)

Pure HTML + Bootstrap

No SQL or backend logic

⚡ Frontend JS

Uses Fetch API

Dynamically updates DOM

Handles search behavior

🔄 Application Flow

Page loads → Fetches all names → Displays table

User types (≥ 2 characters)

AJAX request sent to index.php?action=search&q=term

JSON returned

Results rendered dynamically as Bootstrap cards

🎨 Bootstrap Customization

SCSS entry file:

resources/scss/app.scss

Example customization:

$primary: #2563eb;
$border-radius: 0.75rem;

@import "../../node_modules/bootstrap/scss/bootstrap";

This allows full Bootstrap theming without modifying vendor files.

📦 Build System
CSS (Sass)
Command	Description
npm run dev:css	Compile once
npm run watch:css	Auto-compile on change
npm run build:css	Minified production CSS
JS (ESBuild)
npm run build:js

Bundles Bootstrap JS into:

public/assets/js/bootstrap.js
🔐 Security Practices

Environment-based configuration

PDO prepared statements

Disabled emulated prepares

Input length validation

Public folder as DocumentRoot

📈 Future Improvements

Implement full Router class

Add pagination

Add RESTful routing

Add CSRF protection

Add Docker setup

Add unit tests

Convert to full API + SPA frontend

🏁 Final Result

You now have a:

Clean, maintainable PHP application

Proper MVC-style separation

Secure PostgreSQL integration

Modern AJAX frontend

Custom Bootstrap theme

Production-ready asset pipeline

👤 Author

Developed as a structured PHP architecture project focusing on clean separation of concerns and modern frontend integration.
