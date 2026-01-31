# Idea Tracking App

A Laravel application built following the **2026 workflow** patterns demonstrated in Jeffrey Way's [Laravel From Scratch 2026](https://laracasts.com/series/laravel-from-scratch-2026) series on Laracasts.

## About This Project

This project serves as a learning implementation of modern Laravel development practices as taught in the 2026 edition of Laravel From Scratch. It demonstrates the latest conventions, tooling, and workflow patterns for building Laravel applications.

## Tech Stack

- **Laravel 12** - PHP framework
- **Inertia.js v2** - Modern monolith approach connecting Laravel to Vue
- **Vue 3** - Frontend framework
- **Tailwind CSS v4** - Utility-first CSS framework
- **Pest v4** - Testing framework
- **Laravel Herd** - Local development environment

## Getting Started

### Prerequisites

- PHP 8.3+
- Composer
- Node.js & npm
- Laravel Herd (recommended)

### Installation

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Configure database credentials in .env
# Update the following variables to match your database setup:
# - DB_CONNECTION (typically "mysql" or "sqlite")
# - DB_DATABASE (your database name)
# - DB_USERNAME (your database user)
# - DB_PASSWORD (your database password)
# This ensures php artisan migrate can connect successfully

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run build
```

### Development

```bash
# Start the development server
composer run dev
```

Or run the processes separately:

```bash
# In one terminal
php artisan serve

# In another terminal
npm run dev
```

## Testing

```bash
# Run tests
php artisan test
```

## Resources

- [Laravel From Scratch 2026](https://laracasts.com/series/laravel-from-scratch-2026) - The source series by Jeffrey Way
- [Laravel Documentation](https://laravel.com/docs)
- [Inertia.js Documentation](https://inertiajs.com)
- [Vue.js Documentation](https://vuejs.org)
- [Tailwind CSS Documentation](https://tailwindcss.com)

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
