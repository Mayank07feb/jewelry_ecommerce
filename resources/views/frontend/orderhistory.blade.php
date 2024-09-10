@extends('frontend.profile.layout')

@section('profileContent')
    <!-- Main Profile Content -->
    <div class="md:col-span-2 bg-white shadow-md rounded-lg p-6">
        <!-- Order History Header -->
        <div class="mb-6 p-4 bg-gradient-to-r from-[#601042] to-gray-200 rounded-lg">
            <h2 class="text-2xl font-semibold text-white">Order History</h2>
            <p class="text-sm text-gray-300">Track your past orders here.</p>
        </div>

        <!-- Orders List Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Orders Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-[#601042] text-white">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold">Order ID</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold">Date</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold">Status</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold">Total</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Single Order Row Example -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-900">ORD123456</td>
                            <td class="px-4 py-4 text-sm text-gray-700">2024-09-10</td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 rounded-full bg-green-100 text-green-700">Delivered</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">₹2,499.00</td>
                            <td class="px-4 py-4 text-sm">
                                <a href="#" class="text-[#601042] hover:underline">View Details</a>
                            </td>
                        </tr>
                        <!-- More Orders -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-900">ORD123457</td>
                            <td class="px-4 py-4 text-sm text-gray-700">2024-08-20</td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-700">Shipped</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">₹1,899.00</td>
                            <td class="px-4 py-4 text-sm">
                                <a href="#" class="text-[#601042] hover:underline">View Details</a>
                            </td>
                        </tr>
                        <!-- Repeat for other orders -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            <nav class="flex justify-center">
                <ul class="inline-flex -space-x-px">
                    <li><a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a></li>
                    <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
