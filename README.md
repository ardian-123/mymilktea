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

