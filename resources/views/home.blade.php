@extends('layouts.app')

@section('title', 'Bubble Bliss - Premium Milk Tea Shop')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="hero-pattern absolute inset-0 opacity-50"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-semibold mb-6">
                    ✨ Now Open - Come Visit Us!
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Sip Your Way to <span class="bg-gradient-to-r from-primary-500 to-primary-600 bg-clip-text text-transparent">Pure Bliss</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Handcrafted milk teas made with premium ingredients, authentic recipes, and a whole lot of love. Every cup tells a story of flavor and happiness.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('menu') }}" class="btn-primary text-white px-8 py-4 rounded-full font-semibold text-center">
                        Order Now
                    </a>
                    <a href="{{ route('about') }}" class="bg-white text-gray-700 border-2 border-gray-200 px-8 py-4 rounded-full font-semibold hover:border-primary-400 hover:text-primary-600 transition-all text-center">
                        Our Story
                    </a>
                </div>
                <div class="mt-10 flex items-center justify-center lg:justify-start space-x-8">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-900">20+</div>
                        <div class="text-sm text-gray-500">Unique Flavors</div>
                    <div class="w-px h-10 bg-gray-300"></div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-900">100%</div>
                        <div class="text-sm text-gray-500">Fresh Ingredients</div>
                    <div class="w-px h-10 bg-gray-300"></div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gray-900">5k+</div>
                        <div class="text-sm text-gray-500">Happy Customers</div>
                </div>
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-200 to-milktea-200 rounded-full blur-3xl opacity-30"></div>
                <div class="relative bg-white rounded-3xl shadow-2xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                    <div class="aspect-square bg-gradient-to-br from-primary-100 to-milktea-100 rounded-2xl flex items-center justify-center">
                        <img src="https://creations.ph/uploads/categories/67f6231c9edd5.jpg" width="1000" height="120" >
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-white rounded-2xl shadow-lg p-4">
                        <div class="flex items-center space-x-2">
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                            <span class="text-sm font-semibold text-gray-700">4.9 Rating</span>
                        </div>
                </div>
        </div>
</section>

<!-- Categories Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Explore Our Menu</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">From classic milk teas to innovative creations, we have something for every tea lover.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            @foreach($categories as $category)
            <a href="{{ route('menu', ['category' => $category->slug]) }}" class="group">
                <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 text-center card-hover border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-primary-400 to-primary-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">{{ $category->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $category->active_products_count }} items</p>
                </div>
            </a>
            @endforeach
        </div>
</section>

<!-- Featured Products -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Fan Favorites</h2>
                <p class="text-gray-600">Our most loved drinks that keep customers coming back.</p>
            </div>
            <a href="{{ route('menu') }}" class="hidden md:flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                View All Menu
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                <div class="aspect-[4/3] bg-gradient-to-br from-primary-100 to-milktea-100 flex items-center justify-center relative overflow-hidden">
                    @if($product->image)
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                    @else
                        <svg class="w-24 h-24 text-primary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-xs font-semibold text-primary-600 bg-primary-50 px-3 py-1 rounded-full">{{ $product->category->name }}</span>
                        <span class="text-lg font-bold text-gray-900">{{ $product->formatted_price }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $product->description }}</p>
                    <form action="{{ route('cart.add', $product) }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full bg-gray-900 text-white py-3 rounded-xl font-semibold hover:bg-primary-600 transition-colors flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="mt-8 text-center md:hidden">
            <a href="{{ route('menu') }}" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                View All Menu
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
</section>

<!-- Why Choose Us -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Bubble Bliss?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We're committed to delivering the best milk tea experience every single time.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-primary-400 to-primary-500 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Premium Quality</h3>
                <p class="text-gray-600">We source the finest tea leaves and freshest ingredients from trusted suppliers worldwide.</p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-milktea-400 to-milktea-500 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Made Fresh Daily</h3>
                <p class="text-gray-600">Every drink is handcrafted to order. We never compromise on freshness or quality.</p>
            </div>
            <div class="text-center p-8">
                <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Made with Love</h3>
                <p class="text-gray-600">Our baristas pour their heart into every cup. We treat every customer like family.</p>
            </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Customers Say</h2>
            <p class="text-gray-600">Don't just take our word for it - hear from our happy customers!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-600 mb-6">"The best milk tea I've ever had! The pearls are perfectly chewy and the brown sugar milk is absolutely divine. I'm a regular now!"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-400 to-primary-500 rounded-full flex items-center justify-center text-white font-bold">J</div>
                    <div class="ml-3">
                        <div class="font-semibold text-gray-900">Jessica M.</div>
                        <div class="text-sm text-gray-500">Verified Customer</div>
                </div>
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-600 mb-6">"Bubble Bliss has the most authentic Taiwanese milk tea outside of Taiwan. The cheese foam series is a game changer. Highly recommend!"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-br from-milktea-400 to-milktea-500 rounded-full flex items-center justify-center text-white font-bold">D</div>
                    <div class="ml-3">
                        <div class="font-semibold text-gray-900">David K.</div>
                        <div class="text-sm text-gray-500">Verified Customer</div>
                </div>
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex text-yellow-400 mb-4">★★★★★</div>
                <p class="text-gray-600 mb-6">"I love how customizable everything is. The staff is so friendly and always remembers my order. Best bubble tea shop in the city!"</p>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center text-white font-bold">A</div>
                    <div class="ml-3">
                        <div class="font-semibold text-gray-900">Amy L.</div>
                        <div class="text-sm text-gray-500">Verified Customer</div>
                </div>
        </div>
</section>

<!-- CTA Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-primary-500 to-primary-600 rounded-3xl p-12 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0,50 Q25,30 50,50 T100,50 L100,100 L0,100 Z" fill="white"></path>
                </svg>
            </div>
            <div class="relative">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Ready to Experience Bliss?</h2>
                <p class="text-primary-100 text-lg mb-8 max-w-2xl mx-auto">Visit us today and discover your new favorite drink. First-time customers get 10% off!</p>
                <a href="{{ route('menu') }}" class="inline-block bg-white text-primary-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                    Browse Our Menu
                </a>
            </div>
    </div>
</section>
@endsection
