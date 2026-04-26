@extends('layouts.app')

@section('title', 'Checkout - Bubble Bliss')

@section('content')
<!-- Checkout Header -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Checkout</h1>
        <p class="text-gray-600 text-lg">Complete your order by filling in your details below.</p>
    </div>
</section>

<!-- Checkout Form -->
<section class="py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Order Form -->
            <div>
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Customer Information</h2>
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="customer_name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}" required 
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                                    placeholder="John Doe">
                                @error('customer_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="customer_email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="customer_email" id="customer_email" value="{{ old('customer_email') }}" required 
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                                    placeholder="john@example.com">
                                @error('customer_email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="customer_phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" name="customer_phone" id="customer_phone" value="{{ old('customer_phone') }}" required 
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                                    placeholder="(555) 123-4567">
                                @error('customer_phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="customer_address" class="block text-sm font-medium text-gray-700 mb-2">Delivery Address</label>
                                <textarea name="customer_address" id="customer_address" rows="3" 
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors resize-none" 
                                    placeholder="123 Tea Street, Bubble City, BC 12345">{{ old('customer_address') }}</textarea>
                                @error('customer_address')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Order Notes (Optional)</label>
                                <textarea name="notes" id="notes" rows="2" 
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors resize-none" 
                                    placeholder="Any special requests or instructions...">{{ old('notes') }}</textarea>
                                @error('notes')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full btn-primary text-white py-4 rounded-xl font-semibold text-center">
                                Place Order - ${{ number_format($total * 1.08, 2) }}
                            </button>
                        </div>
                    </form>
                </div>

            <!-- Order Summary -->
            <div>
                <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Order Summary</h2>
                    <div class="space-y-4 mb-6">
                        @foreach($cartItems as $item)
                        <div class="flex items-center gap-4 pb-4 border-b border-gray-100">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-100 to-milktea-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900">{{ $item['product']->name }}</h4>
                                <p class="text-sm text-gray-500">Qty: {{ $item['quantity'] }}</p>
                            </div>
                            <span class="font-semibold text-gray-900">${{ number_format($item['subtotal'], 2) }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="space-y-3 border-t border-gray-100 pt-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-semibold text-gray-900">${{ number_format($total, 2) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tax (8%)</span>
                            <span class="font-semibold text-gray-900">${{ number_format($total * 0.08, 2) }}</span>
                        </div>
                        <div class="flex justify-between pt-3 border-t border-gray-100">
                            <span class="text-lg font-bold text-gray-900">Total</span>
                            <span class="text-lg font-bold text-primary-600">${{ number_format($total * 1.08, 2) }}</span>
                        </div>
                    <div class="mt-6 text-center">
                        <a href="{{ route('cart.index') }}" class="text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                            ← Back to Cart
                        </a>
                    </div>
            </div>
    </div>
</section>
@endsection
