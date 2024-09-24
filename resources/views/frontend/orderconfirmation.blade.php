@extends('components.main')

@section('content')
<div class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6 max-w-4xl">
        <div class="bg-white p-6 rounded-lg shadow-md space-y-6">

            <!-- Order Summary Section -->
            <h2 class="text-2xl font-bold text-[#601042] mb-6">Order Summary</h2>

            <!-- Order Number -->
            <div class="flex justify-between text-sm text-gray-600 mb-4">
                <span>Order Number:</span>
                <span class="font-semibold text-gray-800">#123456</span>
            </div>

            <!-- Order Details -->
            <div class="border-t border-gray-200 pt-4 mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Order Details</h3>
                <div class="flex mb-4">
                    <img src="{{ asset('asset/img/daimond.png') }}" alt="Product Image" class="w-20 h-20 object-cover rounded-md mr-4">
                    <div class="flex-1">
                        <span class="block text-sm text-gray-600">Elegant Gold Ring (x1)</span>
                        <span class="block text-sm font-semibold text-gray-800">₹23,666</span>
                        <div class="flex flex-wrap gap-2 text-xs sm:text-sm text-gray-600 mt-2">
                            <span class="bg-gray-100 px-2 py-1 rounded">Product Code: GN20907</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">18K Gold</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">Metal Type: Gold</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">Weight: 10g</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between text-lg font-bold text-gray-800 border-t border-gray-200 pt-4 mt-4">
                    <span>Grand Total</span>
                    <span>₹23,666</span>
                </div>
            </div>

            <!-- Shipping Address -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Shipping Address</h3>
                <p class="text-sm text-gray-600">
                    Jane Doe<br>
                    1234 Elm Street<br>
                    Springfield, IL - 62704<br>
                    United States<br>
                    Phone: +1 555-123-4567
                </p>
            </div>

            <!-- Payment Method -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Payment Method</h3>
                <div class="space-y-4">
                    <!-- Payment Options -->
                    @foreach (['credit-card' => 'Credit Card', 'debit-card' => 'Debit Card', 'upi' => 'UPI (Google Pay, PhonePe)', 'net-banking' => 'Net Banking', 'cod' => 'Cash on Delivery (COD)'] as $id => $label)
                    <div class="flex items-center">
                        <input type="radio" id="payment-{{ $id }}" name="payment-method" value="{{ $id }}" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-{{ $id }}" class="ml-2 text-sm text-gray-600">{{ $label }}</label>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Additional Details -->
            <div class="border-t border-gray-200 pt-4 mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Additional Details</h3>
                <p class="text-sm text-gray-600">
                    Delivery Time: 3-5 business days<br>
                    Tracking Number: TRK123456789
                </p>
            </div>

            <!-- Customer Support -->
            <div class="border-t border-gray-200 pt-4 mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Customer Support</h3>
                <p class="text-sm text-gray-600">
                    For any issues or queries, contact our customer support:<br>
                    Email: support@pngjewellery.com<br>
                    Phone: +1 555-987-6543
                </p>
            </div>

            <!-- Place Order Button -->
            <div class="mt-6 flex justify-center">
                <a href="{{ route('paymentconfirmation') }}" class="w-full">
                    <button class="bg-[#601042] text-white w-full py-3 px-4 rounded-md font-semibold hover:bg-[#4b0a2c] transition duration-300">
                        Place Order
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
