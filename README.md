# The Locads Laravel Project

This repository contains the public website, product catalogue, dashboard, enquiries module, and rental product manager for The Locads.

The project is built with:

- Laravel 12
- Blade templates
- SQLite by default for local setup
- Vite for frontend asset bundling

## What This Project Includes

- Public marketing pages: Home, About, Services, Industries, FAQ, Contact
- Product catalogue pages: hardware, software, category pages, detail pages
- Dynamic product creation and management
- Rental product manager
- Dashboard with quick navigation and internal tools
- Enquiry management

## Quick Start

1. Install PHP and Composer dependencies:

```bash
composer install
```

2. Install frontend dependencies:

```bash
npm install
```

3. Create the environment file:

```bash
cp .env.example .env
```

4. Generate the app key:

```bash
php artisan key:generate
```

5. Run migrations and seeders:

```bash
php artisan migrate --seed
```

6. Start the app:

```bash
php artisan serve
npm run dev
```

## Useful Commands

```bash
php artisan route:list
php artisan view:cache
php artisan config:clear
php artisan test
```

## Project Structure

### App layer

- `app/Http/Controllers`
  - Request handling and view/data coordination
- `app/Http/Requests`
  - Validation rules for forms like product creation and enquiries
- `app/Models`
  - Eloquent models such as `Product`, `Enquiry`, and `User`
- `app/Support`
  - Reusable business logic such as `ProductCatalog`

### Views

- `resources/views/pages`
  - Main application pages grouped by domain
- `resources/views/partials`
  - Shared UI pieces such as headers, filters, SEO tags, and reusable product grids

### Routes

- `routes/web.php`
  - Main web routes for public pages, dashboard, products, blog, and enquiries

### Database

- `database/migrations`
  - Schema definitions
- `database/seeders`
  - Initial data such as seeded products
- `database/database.sqlite`
  - Default local database

### Public assets

- `public/icons`
  - Static UI images and icon assets
- `public/uploads/products`
  - Uploaded product images

## Important Developer Notes

### Runtime views

Only edit files inside:

- `resources/views/pages`
- `resources/views/partials`

### Backup views

There is a backup folder under:

- `resources/view-backups`

This is reference-only material and is not part of the active runtime view layer.

### Product data flow

The dynamic product flow works like this:

1. Form submits to `ProductController`
2. Validation happens through `StoreProductRequest` or `UpdateProductRequest`
3. Product logic is handled in `ProductCatalog`
4. Data is stored in the `products` table
5. Public and dashboard pages read from the same source

### Rental product flow

- Rental-only admin page: `products.rentals`
- View file: `resources/views/pages/products/rentals.blade.php`
- Controller method: `ProductController::rentals()`

## Testing

Run:

```bash
php artisan test
```

Included tests cover:

- Public page smoke checks
- Protected route redirect checks

## Recommended Next Improvements

- Move static image assets into more domain-specific folders
- Add dedicated feature tests for create/edit/delete product flows
- Add CI for linting, tests, and build verification
- Add production environment-specific deployment script
