@extends('components.main')

@section('content')
    <!-- Main Content Section -->
    <div class="flex flex-col lg:flex-row lg:gap-x-8 lg:px-8 px-4 py-5">
        <!-- Order Summary Section -->
        <div class="bg-white lg:w-full px-6 py-6 rounded-lg shadow-md">
            <h5 class="text-lg font-semibold text-gray-800 mb-4">Order Confirmation</h5>
            <div class="text-sm text-gray-600 mb-4">
                <p>Thank you for your purchase!</p>
                <p>Your order has been confirmed.</p>
            </div>

            <!-- Order Number -->
            <div class="flex justify-between text-sm mb-4">
                <span class="text-gray-600">Order Number:</span>
                <span class="text-gray-800 font-medium">#123456</span>
            </div>

            <!-- Order Summary -->
            <h6 class="text-md font-semibold text-gray-800 mb-2">Order Summary</h6>
            <div class="border-t border-gray-200 pt-4">
                <div class="flex justify-between text-sm mb-2">
                    <span>Sparkling Charm Silver Anklet (x1)</span>
                    <span class="text-gray-800 font-medium">₹23,666</span>
                </div>
                <div class="flex justify-between text-lg font-bold border-t border-gray-200 pt-4 mt-4">
                    <span>Total</span>
                    <span class="text-gray-800">₹23,666</span>
                </div>
            </div>

            <!-- Shipping Address -->
            <h6 class="text-md font-semibold text-gray-800 mt-6 mb-2">Shipping Address</h6>
            <div class="text-sm text-gray-600 mb-4">
                <p>Jane Doe</p>
                <p>1234 Elm Street</p>
                <p>Springfield, IL - 62704</p>
                <p>United States</p>
                <p>Phone: +1 555-123-4567</p>
            </div>

            <!-- Estimated Delivery Time -->
            <div class="text-sm text-gray-600">
                <p>Estimated Delivery Time: September 30, 2024</p>
            </div>

            <!-- Button to Return to Home or Shop -->
            <div class="mt-6 flex justify-center">
                <a href="/">
                    <button
                        class="bg-[#8a1960c5] text-white w-full lg:mb-8 min-h-[50px] py-2 px-4 rounded-md font-semibold hover:bg-[#7c3161fb] transition duration-300">
                        Return to Home
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="text-xs text-center px-4 py-7 bg-gray-100">
        <div>© 2024 PNG Jewellery. All rights reserved.</div>
    </div>
@endsection
