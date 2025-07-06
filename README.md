# Galleon Laravel

This is a Laravel-based project. Follow the instructions below to set up and run the application locally.

## Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & npm (or Yarn)
- A database (e.g., MySQL, PostgreSQL, SQLite)

## Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd galleon-laravel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   # or
   yarn install
   ```

4. **Copy the environment file**
   ```bash
   cp .env.example .env
   # Or copy/rename .env.local if provided
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure your database**
   - Edit `.env` and set your database credentials.

7. **Run database migrations**
   ```bash
   php artisan migrate
   ```

8. **Start the development servers**
   - **Backend (Laravel):**
     ```bash
     php artisan serve
     ```
   - **Frontend (Vite):**
     ```bash
     npm run dev
     # or
     yarn dev
     ```

## Running Tests

```bash
php artisan test
# or
vendor/bin/phpunit
```

## Additional Notes
- Make sure your PHP and Node.js versions match the requirements in `composer.json` and `package.json`.
- For production, review Laravel's deployment documentation.

---

Feel free to update this README with project-specific information as needed.