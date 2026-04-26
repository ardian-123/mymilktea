@extends('layouts.app')

@section('title', 'Shopping Cart - Bubble Bliss')

@section('content')
<!-- Cart Header -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Your Cart</h1>
        <p class="text-gray-600 text-lg">Review your items and proceed to checkout.</p>
    </div>
</section>

<!-- Cart Content -->
<section class="py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        @if(empty($cartItems))
            <div class="text-center py-16 bg-white rounded-2xl shadow-sm">
                <svg class="w-20 h-20 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Your cart is empty</h2>
                <p class="text-gray-500 mb-6">Looks like you haven't added any drinks yet.</p>
                <a href="{{ route('menu') }}" class="inline-block btn-primary text-white px-8 py-3 rounded-full font-semibold">
                    Browse Menu
                </a>
            </div>
        @else
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <!-- Cart Items -->
                <div class="divide-y divide-gray-100">
                    @foreach($cartItems as $item)
                    <div class="p-6 flex items-center gap-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-100 to-milktea-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-gray-900 text-lg">{{ $item['product']->name }}</h3>
                            <p class="text-sm text-gray-500">{{ $item['product']->category->name }}</p>
                            <p class="text-primary-600 font-semibold mt-1">{{ $item['product']->formatted_price }} each</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <form action="{{ route('cart.update', $item['product']) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('PATCH')
                                <div class="flex items-center border border-gray-200 rounded-lg">
                                    <button type="button" onclick="this.closest('form').querySelector('input').stepDown(); this.closest('form').submit()" class="px-3 py-2 text-gray-500 hover:text-primary-600">-</button>
                                    <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" max="10" class="w-12 text-center border-0 focus:ring-0 text-gray-900 font-semibold">
                                    <button type="button" onclick="this.closest('form').querySelector('input').stepUp(); this.closest('form').submit()" class="px-3 py-2 text-gray-500 hover:text-primary-600">+</button>
                                </div>
                            </form>
                            <div class="text-right min-w-[80px]">
                                <p class="font-bold text-gray-900">${{ number_format($item['subtotal'], 2) }}</p>
                            </div>
                            <form action="{{ route('cart.remove', $item['product']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-gray-400 hover:text-red-500 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <!-- Cart Summary -->
                <div class="bg-gray-50 p-6 border-t border-gray-100">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold text-gray-900">${{ number_format($total, 2) }}</span>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-gray-600">Tax (8%)</span>
                        <span class="font-semibold text-gray-900">${{ number_format($total * 0.08, 2) }}</span>
                    </div>
                    <div class="flex justify-between items-center mb-6 pt-4 border-t border-gray-200">
                        <span class="text-xl font-bold text-gray-900">Total</span>
                        <span class="text-xl font-bold text-primary-600">${{ number_format($total * 1.08, 2) }}</span>
                    </div>
                    <div class="flex gap-4">
                        <form action="{{ route('cart.clear') }}" method="POST" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-gray-200 text-gray-700 py-4 rounded-xl font-semibold hover:bg-gray-300 transition-colors">
                                Clear Cart
                            </button>
                        </form>
                        <a href="{{ route('checkout') }}" class="flex-1 btn-primary text-white py-4 rounded-xl font-semibold text-center">
                            Proceed to Checkout
                        </a>
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ route('menu') }}" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                            ← Continue Shopping
                        </a>
                    </div>
            </div>
        @endif
    </div>
</section>
@endsection
