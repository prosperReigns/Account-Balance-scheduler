# Account Balance Increment Scheduler

## Overview
A Laravel + Vue 3 application that:
- Allows a user to set an initial account balance.
- Increments the balance by 1,000 units every 5 minutes automatically.
- Logs each increment event.
- Displays the history of all increments.

---

## Tech Stack
- Backend: Laravel 10 (PHP)
- Frontend: Vue 3 (Vite) + TailwindCSS
- Database: MySQL (can be changed to SQLite or PostgreSQL)

---

## Setup Instructions

### 1. Clone the Repositorycd laravel-backend
composer install
cp .env.example .env
php artisan key:generate

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository

## Laravel backend setup
cd laravel-backend
composer install
cp .env.example .env
php artisan key:generate

## database settings
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

## run migration
php artisan migratecd ../vue-frontend
npm install
npm run dev

## run server9
php artisan serve

## start sxhudule
php artisan schedule:work

## vuefrontend setup
cd ../vue-frontend
npm install
npm run dev


