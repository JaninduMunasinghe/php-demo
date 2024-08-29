<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-800">Total Products</h3>
                    <p class="text-3xl font-bold text-gray-900">120</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-800">Orders Today</h3>
                    <p class="text-3xl font-bold text-gray-900">35</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-800">Revenue</h3>
                    <p class="text-3xl font-bold text-gray-900">$12,300</p>
                </div>
            </div>

            <!-- Recent Activities and Links -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Recent Activities</h3>
                    <ul class="mt-4 space-y-2">
                        <li class="text-gray-700">- Product "XYZ" was updated.</li>
                        <li class="text-gray-700">- New order #12345 was placed.</li>
                        <li class="text-gray-700">- User "John Doe" registered.</li>
                    </ul>

                    <div class="mt-6">
                        <a href="{{ route('product.index') }}" class="text-blue-500 hover:text-blue-700">
                            Manage Products
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800">Quick Actions</h3>
                <div class="mt-4 space-y-4">
                    <a href="{{ route('product.create') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Add New Product</a>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
