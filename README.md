<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
PKL Blog - Information Portal & Journal of Internship Activities

PKL Blog is a web-based platform specifically developed to manage articles, news updates, and activity logs during the Internship (Praktik Kerja Lapangan - PKL) period. Built with the Laravel framework, this project focuses on robust Content Management and seamless information sharing.

🚀 Key Features

This application comes equipped with essential features for a dynamic blog portal:

Authentication & Multi-user Access: Secure login and registration flows for Administrators, Authors (Writers), and general Visitors.

Full Article CRUD System: Effortless creation, reading, updating, and deletion of internship-related articles and news.

Dynamic Categories & Tagging: Dynamic classification of articles to make finding specific topics fast and easy.

Admin Dashboard: A visual control panel for administrators to monitor blog performance, approve/verify articles, and manage user accounts.

Media Management: Support for secure local image uploads (e.g., article thumbnails) utilizing Laravel's storage systems.

Responsive Interface: Modern, clean, and fluid UI design optimized for both desktop browsers and mobile devices.

🛠️ Tech Stack

Backend Framework: Laravel (PHP)

Database: MySQL / MariaDB

Frontend Template Engine: Blade (Laravel)

Styling Framework: Tailwind CSS / Bootstrap (please adjust based on your exact choice)

Package Managers: Composer (PHP) & NPM (NodeJS)

⚙️ Local Installation Guide

Follow these step-by-step instructions to get your local development environment up and running:

1. Prerequisites

Ensure your system has the following dependencies installed:

PHP (Version 8.1 or higher)

Composer

Node.js & NPM

MySQL or local development servers like XAMPP / Laragon

2. Clone the Repository

Open your terminal or Git Bash and execute:

git clone https://github.com/to6661q/pkl_blog.git
cd pkl_blog


3. Install Dependencies

Download and install the required backend PHP packages and frontend dependencies:

# Install PHP packages
composer install

# Install JavaScript and CSS packages
npm install


4. Environment Configuration (.env)

Create a local configuration file by copying the template:

cp .env.example .env


Open the newly created .env file in your preferred code editor (such as VS Code) and update your database connection credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name_here
DB_USERNAME=root
DB_PASSWORD=


5. Generate the Application Key

Secure your application session keys by generating a unique app key:

php artisan key:generate


6. Database Migrations & Seeders

Automatically build the database tables and populate them with dummy/initial data for immediate login testing:

php artisan migrate --seed


7. Link Public Storage

To allow uploaded images (like thumbnails) to be accessed publicly via the browser, create a symbolic link:

php artisan storage:link


8. Run the Development Servers

Compile your frontend assets and spin up the Laravel local development server:

Terminal 1 (Frontend compilation):

npm run dev


Terminal 2 (Backend server):

php artisan serve


Your application should now be accessible in your browser at: http://127.0.0.1:8000

🔒 Crucial Security Warnings

IMPORTANT: The .env file contains sensitive environment-specific values (like your local database passwords) and is ignored by Git by default through the .gitignore file. Never commit or upload your actual .env file to a public GitHub repository.

If you include default administrator credentials inside your seeders, ensure they use a generic password (e.g., password123) and never your personal or production-level passwords.

📄 License

This project is open-source and released under the MIT License.
