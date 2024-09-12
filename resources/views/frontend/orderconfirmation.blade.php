@extends('components.main')

@section('content')
<div class="bg-gray-100">
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
                    <img src="https://via.placeholder.com/80" alt="Product Image" class="w-20 h-20 object-cover rounded-md mr-4">
                    <div class="flex-1">
                        <span class="block text-sm text-gray-600">Sparkling Charm Silver Anklet (x1)</span>
                        <span class="block text-sm font-semibold text-gray-800">₹23,666</span>
                    </div>
                </div>
                <div class="flex justify-between text-lg font-bold text-gray-800 border-t border-gray-200 pt-4 mt-4">
                    <span>Total</span>
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
                    <!-- Credit Card -->
                    <div class="flex items-center">
                        <input type="radio" id="payment-credit-card" name="payment-method" value="credit-card" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-credit-card" class="ml-2 text-sm text-gray-600">Credit Card</label>
                    </div>
                    <!-- Debit Card -->
                    <div class="flex items-center">
                        <input type="radio" id="payment-debit-card" name="payment-method" value="debit-card" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-debit-card" class="ml-2 text-sm text-gray-600">Debit Card</label>
                    </div>
                    <!-- UPI -->
                    <div class="flex items-center">
                        <input type="radio" id="payment-upi" name="payment-method" value="upi" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-upi" class="ml-2 text-sm text-gray-600">UPI (e.g., Google Pay, PhonePe)</label>
                    </div>
                    <!-- Net Banking -->
                    <div class="flex items-center">
                        <input type="radio" id="payment-net-banking" name="payment-method" value="net-banking" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-net-banking" class="ml-2 text-sm text-gray-600">Net Banking</label>
                    </div>
                    <!-- Cash on Delivery -->
                    <div class="flex items-center">
                        <input type="radio" id="payment-cod" name="payment-method" value="cod" class="h-5 w-5 text-[#601042] border-gray-300 focus:ring-[#601042]">
                        <label for="payment-cod" class="ml-2 text-sm text-gray-600">Cash on Delivery (COD)</label>
                    </div>
                </div>
            </div>

            <!-- Additional Details -->
            <div class="border-t border-gray-200 pt-4 mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Additional Details</h3>
                <p class="text-sm text-gray-600 mb-2">
                    Delivery Time: 3-5 business days<br>
                    Tracking Number: TRK123456789
                </p>
            </div>

            <!-- Customer Support -->
            <div class="border-t border-gray-200 pt-4 mb-4">
                <h3 class="text-lg font-semibold text-[#601042] mb-2">Customer Support</h3>
                <p class="text-sm text-gray-600 mb-2">
                    For any issues or queries, please contact our customer support:<br>
                    Email: support@pngjewellery.com<br>
                    Phone: +1 555-987-6543
                </p>
            </div>

            <!-- Place Order Button -->
            <div class="mt-6 flex justify-center">
                <a href="{{route('paymentconfirmation')}}" class="w-full">
                    <button
                        class="bg-[#601042] text-white w-full py-3 px-4 rounded-md font-semibold hover:bg-[#4b0a2c] transition duration-300">
                        Place Order
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
