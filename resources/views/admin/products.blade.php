@extends('layouts.app')

@section('title', 'Manage Products - Bubble Bliss Admin')

@section('content')
<!-- Admin Header -->
<section class="py-8 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Manage Products</h1>
                <p class="text-gray-400 mt-1">Add, edit, or remove menu items</p>
            </div>
            <div class="flex space-x-4">
                <a href="{{ route('admin.dashboard') }}" class="text-gray-400 hover:text-white transition-colors">
                    Dashboard
                </a>
                <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">
                    Back to Site
                </a>
            </div>
    </div>
</section>

<!-- Add Product Form -->
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Add New Product</h2>
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                        <input type="text" name="name" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="e.g., Strawberry Milk Tea">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <select name="category_id" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Price ($)</label>
                        <input type="number" name="price" step="0.01" min="0" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="5.50">
                    </div>
                    <div class="md:col-span-2 lg:col-span-3">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="2" 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="Describe the product..."></textarea>
                    </div>
                    <div class="flex items-center space-x-6">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="is_featured" value="1" 
                                class="w-5 h-5 text-primary-600 rounded focus:ring-primary-500">
                            <span class="text-sm font-medium text-gray-700">Featured</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="is_available" value="1" checked 
                                class="w-5 h-5 text-primary-600 rounded focus:ring-primary-500">
                            <span class="text-sm font-medium text-gray-700">Available</span>
                        </label>
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 flex items-end">
                        <button type="submit" class="btn-primary text-white px-8 py-3 rounded-xl font-semibold">
                            Add Product
                        </button>
                    </div>
            </form>
        </div>
</section>

<!-- Products List -->
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">All Products</h2>
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Name</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Category</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Price</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($products as $product)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-primary-100 to-milktea-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $product->name }}</p>
                                        @if($product->is_featured)
                                            <span class="text-xs text-yellow-600">⭐ Featured</span>
                                        @endif
                                    </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $product->category->name }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-900">{{ $product->formatted_price }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $product->is_available ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $product->is_available ? 'Available' : 'Unavailable' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <form action="{{ route('admin.products.delete', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-400 hover:text-red-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">No products found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
</section>
@endsection
