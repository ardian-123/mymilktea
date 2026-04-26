@extends('layouts.app')

@section('title', 'Manage Orders - Bubble Bliss Admin')

@section('content')
<!-- Admin Header -->
<section class="py-8 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Manage Orders</h1>
                <p class="text-gray-400 mt-1">View and update customer orders</p>
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

<!-- Orders List -->
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Order #</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Customer</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Items</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Total</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Date</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($orders as $order)
                        <tr>
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $order->order_number }}</td>
                            <td class="px-6 py-4">
                                <div>
                                    <p class="font-medium text-gray-900">{{ $order->customer_name }}</p>
                                    <p class="text-sm text-gray-500">{{ $order->customer_email }}</p>
                                    <p class="text-sm text-gray-500">{{ $order->customer_phone }}</p>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="space-y-1">
                                    @foreach($order->items as $item)
                                        <p class="text-sm text-gray-600">{{ $item->quantity }}x {{ $item->product_name }}</p>
                                    @endforeach
                                </div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900">{{ $order->formatted_total }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-xs font-semibold 
                                    {{ $order->status === 'pending' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                    {{ $order->status === 'processing' ? 'bg-blue-100 text-blue-700' : '' }}
                                    {{ $order->status === 'completed' ? 'bg-green-100 text-green-700' : '' }}
                                    {{ $order->status === 'cancelled' ? 'bg-red-100 text-red-700' : '' }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-gray-500 text-sm">{{ $order->created_at->format('M d, Y H:i') }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="flex items-center space-x-2">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" 
                                        class="text-sm border border-gray-200 rounded-lg px-3 py-2 focus:border-primary-500 focus:ring-2 focus:ring-primary-200">
                                        <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-8 text-center text-gray-500">No orders found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
</section>
@endsection
