@extends('layouts.app')

@section('title', 'Our Menu - Bubble Bliss')

@section('content')
<!-- Menu Header -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Menu</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">Discover our handcrafted selection of premium milk teas, fruit teas, and specialty drinks.</p>
    </div>
</section>

<!-- Category Filter -->
<section class="pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('menu') }}" class="px-6 py-3 rounded-full font-semibold transition-all {{ !$activeCategory ? 'bg-primary-500 text-white shadow-lg' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200' }}">
                All
            </a>
            @foreach($categories as $category)
            <a href="{{ route('menu', ['category' => $category->slug]) }}" class="px-6 py-3 rounded-full font-semibold transition-all {{ $activeCategory && $activeCategory->id === $category->id ? 'bg-primary-500 text-white shadow-lg' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200' }}">
                {{ $category->name }}
                <span class="ml-2 text-xs opacity-75">({{ $category->active_products_count }})</span>
            </a>
            @endforeach
        </div>
</section>

<!-- Products Grid -->
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products->isEmpty())
            <div class="text-center py-16">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No products found</h3>
                <p class="text-gray-500">Try selecting a different category.</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                    <div class="aspect-[4/3] bg-gradient-to-br from-primary-100 to-milktea-100 flex items-center justify-center relative">
                        <svg class="w-24 h-24 text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        @if($product->is_featured)
                        <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 text-xs font-bold px-3 py-1 rounded-full">
                            ⭐ Featured
                        </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-semibold text-primary-600 bg-primary-50 px-3 py-1 rounded-full">{{ $product->category->name }}</span>
                            <span class="text-xl font-bold text-gray-900">{{ $product->formatted_price }}</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 text-sm mb-4">{{ $product->description }}</p>
                        <form action="{{ route('cart.add', $product) }}" method="POST" class="flex gap-2">
                            @csrf
                            <div class="flex items-center border border-gray-200 rounded-xl">
                                <button type="button" onclick="this.parentElement.querySelector('input').stepDown()" class="px-3 py-2 text-gray-500 hover:text-primary-600">-</button>
                                <input type="number" name="quantity" value="1" min="1" max="10" class="w-12 text-center border-0 focus:ring-0 text-gray-900 font-semibold">
                                <button type="button" onclick="this.parentElement.querySelector('input').stepUp()" class="px-3 py-2 text-gray-500 hover:text-primary-600">+</button>
                            </div>
                            <button type="submit" class="flex-1 bg-gray-900 text-white py-3 rounded-xl font-semibold hover:bg-primary-600 transition-colors flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>Add</span>
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
@endsection
