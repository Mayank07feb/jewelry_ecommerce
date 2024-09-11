@extends('components.main')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto p-4 max-w-6xl">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-[#9d6e2a]">
                <h1 class="text-2xl font-bold text-[#601042]">Order Summary</h1>
                <div class="mt-6">
                    <h2 class="text-xl font-semibold text-[#601042]">Order Details</h2>
                    <div class="mt-4 flex space-x-4">
                        <img src="https://via.placeholder.com/80" alt="Product" class="w-20 h-20 object-cover rounded-md">
                        <div>
                            <h3 class="font-semibold text-[#601042]">Gold Luminary Fancy Gold Chain</h3>
                            <p class="text-sm text-gray-600">Metal Purity: 18 KT</p>
                            <p class="text-sm text-gray-600">Weight: 6.320 g</p>
                            <p class="text-sm text-gray-600">Product Code: GN20907</p>
                            <div class="mt-2">
                                <span class="font-semibold text-gray-900">₹33,658</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Total Price:</span>
                            <span class="text-gray-900 font-semibold">₹33,658</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Delivery Charges:</span>
                            <span class="text-gray-900 font-semibold">₹70</span>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <span class="text-gray-900 font-semibold">Order Total:</span>
                            <span class="text-gray-900 font-semibold">₹33,728</span>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <h2 class="text-xl font-semibold text-[#601042]">Delivery Details</h2>
                    <p class="text-gray-600">Shipping Address: 123 Main Street, City, Country</p>
                    <p class="text-gray-600">Estimated Delivery Date: September 20, 2024</p>
                </div>

                <div class="mt-6 flex gap-4">
                    <button class="w-full bg-[#601042] text-white py-2 px-4 rounded-lg hover:opacity-90 transition duration-300">
                        Print Order Summary
                    </button>
                    <button class="w-full bg-[#9d6e2a] text-white py-2 px-4 rounded-lg hover:opacity-90 transition duration-300">
                        Share Order Summary
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
