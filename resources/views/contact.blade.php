@extends('layouts.app')

@section('title', 'Contact Us - Bubble Bliss')

@section('content')
<!-- Contact Header -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Get in Touch</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">We'd love to hear from you! Whether you have feedback, questions, or just want to say hello.</p>
    </div>
</section>

<!-- Contact Section (Vertical Layout) -->
<section class="py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Contact Info - Stacked Vertically -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Contact Information</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Visit Us</h3>
                        <p class="text-gray-600">123 Tea Street, Bubble City, BC 12345</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Email Us</h3>
                        <p class="text-gray-600">hello@bubblebliss.com</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Call Us</h3>
                        <p class="text-gray-600">(555) 123-4567</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-6 bg-white rounded-2xl shadow-sm">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                        <p class="text-gray-600">Monday - Sunday: 10:00 AM - 10:00 PM</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form - Full Width -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Send us a Message</h2>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="John Doe">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="john@example.com">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors" 
                            placeholder="How can we help?">
                        @error('subject')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                        <textarea name="message" id="message" rows="5" required 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-colors resize-none" 
                            placeholder="Tell us more about your inquiry...">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full btn-primary text-white py-4 rounded-xl font-semibold text-center">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

