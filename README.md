# Bubble Bliss - Milk Tea Shop

A Laravel-based web application for a milk tea shop with online menu, shopping cart, checkout system, and admin dashboard.

## Features

- **Home Page** - Featured products and categories
- **Menu Page** - Browse all products with category filtering (4-column grid layout)
- **About Page** - Company story with milk tea image
- **Contact Page** - Vertical layout contact form and information
- **Shopping Cart** - Add, update, remove items
- **Checkout** - Place orders with customer details
- **Admin Dashboard** - Manage products and view orders

## Tech Stack

- Laravel 12
- PHP 8.2
- MySQL
- Tailwind CSS

## Deployment

### ⚠️ Important: Netlify Limitation
**Netlify cannot host this Laravel application.** Netlify is designed for static sites (HTML, CSS, JavaScript only). This project requires:
- PHP 8.2 runtime
- MySQL database
- Server-side processing (Laravel framework)

### Recommended Hosting Options

#### Option 1: Render (Free Tier Available)
1. Go to [render.com](https://render.com) and sign up
2. Create a new **Web Service**
3. Connect your GitHub repository (`ardian-123/mymilktea`)
4. Configure:
   - **Runtime**: PHP
   - **Build Command**: `composer install --no-dev --optimize-autoloader`
   - **Start Command**: `php artisan serve --host 0.0.0.0 --port 10000`
   - **Publish Directory**: `public`
5. Add environment variables from your `.env` file
6. Create a **PostgreSQL** database on Render (or use MySQL from an external provider)
7. Deploy

#### Option 2: Railway (Free Tier Available)
1. Go to [railway.app](https://railway.app)
2. New Project → Deploy from GitHub repo
3. Add a **MySQL** database service
4. Set environment variables in Railway dashboard
5. Deploy

#### Option 3: Traditional Hosting (cPanel, VPS, etc.)
- Upload files to `public_html` or equivalent
- Point web root to the `public/` directory
- Configure MySQL database
- Set up `.env` with production credentials

#### Option 4: Laravel-Specific Platforms
- **Laravel Forge**: Server management and deployment
- **Laravel Vapor**: Serverless deployment on AWS

### Required Environment Variables for Production
Make sure to set these in your hosting platform:
```
APP_ENV=production
APP_KEY=your-generated-key
APP_DEBUG=false
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
```

Generate app key with: `php artisan key:generate`

## Installation

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan db:seed`
7. Run `php artisan serve`

## Admin Panel

Access the admin panel at `/admin`:
- `/admin` - Dashboard overview
- `/admin/products` - Manage products
- `/admin/orders` - View customer orders

## Database

The application uses MySQL with the following main tables:
- `categories` - Product categories
- `products` - Menu items
- `orders` - Customer orders
- `order_items` - Order line items

