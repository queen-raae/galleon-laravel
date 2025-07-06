# Galleon Laravel

This project is built using the **Laravel React Starter Kit** with **Inertia.js**, **React 19**, **TypeScript**, **Tailwind CSS 4**, and **shadcn/ui**. Authentication is powered by **WorkOS AuthKit**, providing social login, passkey, magic link, and SSO support.

## Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js (see `package.json` for recommended version)
- npm (or Yarn)
- A database (e.g., MySQL, PostgreSQL, SQLite)
- WorkOS account (for authentication)

## Stack Overview

- **Backend:** Laravel 12.x
- **Frontend:** React 19, Inertia.js, TypeScript, Tailwind CSS 4, shadcn/ui
- **Authentication:** WorkOS AuthKit (no email/password, no email verification required)
- **Bundler:** Vite
- **SSR:** Inertia SSR supported

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

7. **Configure WorkOS AuthKit**

    - Set the following variables in your `.env` file:
        ```env
        WORKOS_CLIENT_ID=your-client-id
        WORKOS_API_KEY=your-api-key
        WORKOS_REDIRECT_URL="${APP_URL}/authenticate"
        ```
    - Get these values from your WorkOS dashboard.
    - Set your application homepage URL in the WorkOS dashboard (for logout redirects).

8. **Run database migrations**

    ```bash
    php artisan migrate
    ```

9. **Start the development servers**

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

10. **(Optional) Enable SSR**
    - To build and run the SSR bundle:
        ```bash
        npm run build:ssr
        composer dev:ssr
        ```
    - This will start both the Laravel and Inertia SSR servers for local testing.

## Running Tests

```bash
php artisan test
# or
vendor/bin/phpunit
```

## Additional Notes

- Make sure your PHP and Node.js versions match the requirements in `composer.json` and `package.json`.
- For production, review Laravel's deployment documentation.
- Email verification is not required when using WorkOS AuthKit.
- For more details, see the [Laravel Starter Kits documentation](https://laravel.com/docs/12.x/starter-kits).

---

Feel free to update this README with project-specific information as needed.
