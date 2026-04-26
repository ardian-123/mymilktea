<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/{product}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');

// Checkout & Order Routes
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

// Admin Routes
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/products', [AdminController::class, 'products'])->name('admin.products');
Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
Route::delete('/admin/products/{product}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
Route::patch('/admin/orders/{order}', [AdminController::class, 'updateOrderStatus'])->name('admin.orders.update');
