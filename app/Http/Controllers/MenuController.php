<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $categorySlug = $request->get('category');
        
        $categories = Category::where('is_active', true)
            ->withCount('activeProducts')
            ->get();

        $products = Product::where('is_available', true)
            ->with('category')
            ->when($categorySlug, function ($query) use ($categorySlug) {
                $query->whereHas('category', function ($q) use ($categorySlug) {
                    $q->where('slug', $categorySlug);
                });
            })
            ->orderBy('sort_order')
            ->get();

        $activeCategory = $categorySlug 
            ? $categories->firstWhere('slug', $categorySlug) 
            : null;

        return view('menu', compact('categories', 'products', 'activeCategory'));
    }
}

