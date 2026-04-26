<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $totalProducts = Product::count();
        $totalRevenue = Order::where('status', 'completed')->sum('total_amount');
        $recentOrders = Order::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalOrders', 
            'pendingOrders', 
            'totalProducts', 
            'totalRevenue',
            'recentOrders'
        ));
    }

    public function products()
    {
        $products = Product::with('category')->latest()->get();
        $categories = Category::all();
        return view('admin.products', compact('products', 'categories'));
    }

    public function storeProduct(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_available'] = $request->boolean('is_available', true);

        Product::create($validated);

        return redirect()->route('admin.products')->with('success', 'Product created successfully!');
    }

    public function updateProduct(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_featured' => 'boolean',
            'is_available' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['is_available'] = $request->boolean('is_available', true);

        $product->update($validated);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }

    public function orders()
    {
        $orders = Order::with('items')->latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $order->update($validated);

        return redirect()->route('admin.orders')->with('success', 'Order status updated!');
    }
}

