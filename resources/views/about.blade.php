@extends('layouts.app')

@section('title', 'About Us - Bubble Bliss')

@section('content')
<!-- About Header -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Our Story</h1>
        <p class="text-gray-600 text-lg max-w-3xl mx-auto">From a small tea stand to a beloved local favorite, discover how Bubble Bliss came to be.</p>
    </div>
</section>

<!-- Story Section - Story LEFT, Picture RIGHT -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Story Text - LEFT -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">A Passion for Perfect Tea</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Bubble Bliss was founded in 2019 by Sarah Chen, a tea enthusiast who grew up in Taiwan - the birthplace of bubble tea. After moving abroad, she couldn't find milk tea that matched the authentic taste she remembered from home.</p>
                    <p>Determined to share the true essence of Taiwanese milk tea, Sarah spent years perfecting her recipes, sourcing the finest tea leaves from Taiwan, and developing unique flavor combinations that honor tradition while embracing innovation.</p>
                    <p>What started as a small tea stand has grown into a beloved community gathering place. Today, Bubble Bliss serves thousands of happy customers who come for the tea and stay for the warm, welcoming atmosphere.</p>
                </div>
                <div class="mt-8 grid grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600">2019</div>
                        <div class="text-sm text-gray-500">Founded</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600">5</div>
                        <div class="text-sm text-gray-500">Locations</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600">50k+</div>
                        <div class="text-sm text-gray-500">Cups Served</div>
                    </div>
                </div>
            </div>
            <!-- Picture - RIGHT -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-200 to-milktea-200 rounded-3xl blur-2xl opacity-30"></div>
                <div class="relative bg-white rounded-3xl shadow-xl p-8">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558855410-3112e253d704?w=800&auto=format&fit=crop&q=80" 
                             alt="Delicious Milk Tea" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">The principles that guide everything we do.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center p-6">
                <div class="w-14 h-14 mx-auto mb-4 bg-gradient-to-br from-primary-400 to-primary-500 rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Quality First</h3>
                <p class="text-gray-600 text-sm">We never compromise on ingredients. Only the best tea leaves and freshest milk make it into our drinks.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 mx-auto mb-4 bg-gradient-to-br from-milktea-400 to-milktea-500 rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Made with Love</h3>
                <p class="text-gray-600 text-sm">Every drink is handcrafted with care and attention to detail. We treat every cup like it's for a dear friend.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 mx-auto mb-4 bg-gradient-to-br from-green-400 to-green-500 rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Community Focused</h3>
                <p class="text-gray-600 text-sm">We're more than a tea shop - we're a gathering place for friends, families, and communities.</p>
            </div>
            <div class="text-center p-6">
                <div class="w-14 h-14 mx-auto mb-4 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Always Innovating</h3>
                <p class="text-gray-600 text-sm">We constantly experiment with new flavors and techniques to bring you exciting new experiences.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">The passionate people behind every perfect cup.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($team as $member)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover text-center p-8">
                <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-primary-400 to-primary-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                    {{ substr($member['name'], 0, 1) }}
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $member['name'] }}</h3>
                <p class="text-primary-600 font-semibold text-sm mb-4">{{ $member['role'] }}</p>
                <p class="text-gray-600 text-sm">{{ $member['bio'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Visit Us</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Address</h3>
                            <p class="text-gray-600">123 Tea Street, Bubble City, BC 12345</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Hours</h3>
                            <p class="text-gray-600">Monday - Sunday: 10:00 AM - 10:00 PM</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">Phone</h3>
                            <p class="text-gray-600">(555) 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-primary-100 to-milktea-100 rounded-3xl p-8 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-32 h-32 text-primary-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <p class="text-gray-600 font-medium">Map placeholder - integrate Google Maps here</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

