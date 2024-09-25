@extends('components.main')

@section('content')
    <div class="bg-gradient-to-br from-purple-50 via-gray-100 to-amber-50 min-h-screen py-12">
        <div class="container mx-auto p-4 max-w-4xl">
            <div class="bg-white p-8 rounded-2xl shadow-2xl border-l-8 border-[#9d6e2a]">
                <h1 class="text-4xl font-bold text-[#601042] mb-8 text-center">Track Your Order</h1>

                <div class="mb-8">
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="text" placeholder="Enter your order number"
                            class="flex-grow px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#601042]">
                        <button type="submit"
                            class="bg-[#601042] text-white px-6 py-2 rounded-lg hover:bg-[#7a1654] transition duration-300">
                            Track Order
                        </button>
                    </form>
                </div>
                <div class="bg-gradient-to-r from-purple-100 to-amber-100 p-6 rounded-xl mb-8 shadow-inner">
                    <h2 class="text-2xl font-semibold text-[#601042] mb-4">Order #123456</h2>
                    <div class="grid grid-cols-2 gap-4 text-gray-600 mb-6">
                        <p>Order Date: <span class="font-semibold">September 15, 2024</span></p>
                        <p>Estimated Delivery: <span class="font-semibold">September 20, 2024</span></p>
                        <p>Status: <span class="font-semibold text-green-600">In Transit</span></p>
                        <p>Total Amount: <span class="font-semibold">₹23,666</span></p>
                    </div>
                </div>

                <div class="mb-8">
                    <h3 class="text-2xl font-semibold text-[#601042] mb-4">Tracking Timeline</h3>
                    <div class="relative">
                        <div class="absolute left-4 inset-y-0 w-0.5 bg-gray-200"></div>
                        <ul class="space-y-6 relative">
                            <li class="flex items-center">
                                <div
                                    class="bg-green-500 rounded-full w-8 h-8 flex items-center justify-center text-white z-10">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-[#601042]">Order Placed</h4>
                                    <p class="text-gray-600">September 15, 2024, 10:30 AM</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-green-500 rounded-full w-8 h-8 flex items-center justify-center text-white z-10">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-[#601042]">Order Processed</h4>
                                    <p class="text-gray-600">September 16, 2024, 2:45 PM</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-blue-500 rounded-full w-8 h-8 flex items-center justify-center text-white z-10">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-[#601042]">In Transit</h4>
                                    <p class="text-gray-600">September 17, 2024, 9:15 AM</p>
                                </div>
                            </li>
                            <li class="flex items-center opacity-50">
                                <div
                                    class="bg-gray-300 rounded-full w-8 h-8 flex items-center justify-center text-white z-10">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-semibold text-[#601042]">Delivered</h4>
                                    <p class="text-gray-600">Estimated: September 20, 2024</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('home') }}"
                        class="bg-[#9d6e2a] text-white py-2 px-6 rounded-full hover:bg-[#b88632] transition duration-300 inline-block">
                        Return to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    @endpush
@endsection
