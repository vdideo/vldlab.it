# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

VLD Lab website - a Laravel 12 bilingual (Italian/English) web application for a technology consulting company.

## Common Commands

```bash
# Development - starts server, queue, logs, and Vite concurrently
composer dev

# Run tests (clears config first)
composer test

# Run a single test file
php artisan test tests/Feature/ExampleTest.php

# Run tests with filter
php artisan test --filter=test_name

# Format code with Laravel Pint
./vendor/bin/pint

# Initial setup (install, migrate, build)
composer setup

# Build frontend assets for production
npm run build
```

## Architecture

### Localization System
- All routes are prefixed with `{locale}` (it|en) in `routes/web.php`
- `SetLocale` middleware (`app/Http/Middleware/SetLocale.php`) sets app locale from URL segment
- Translations stored in `lang/{locale}/messages.php`
- Use `__('messages.key')` helper in views
- Root `/` redirects to `/it`

### Route Structure
```
/{locale}/          → PageController@home
/{locale}/services  → PageController@services
/{locale}/contacts  → PageController@contacts
```

### Frontend
- Blade templates in `resources/views/` with `layouts/app.blade.php` as main layout
- Tailwind CSS 4.0 + Bootstrap 5 for styling
- Vite handles asset compilation (`resources/css/app.css`, `resources/js/app.js`)

### Database
- MariaDB for development, SQLite in-memory for tests
- Tests automatically use SQLite via `phpunit.xml` configuration
