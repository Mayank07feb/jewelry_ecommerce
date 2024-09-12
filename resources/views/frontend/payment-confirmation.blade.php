@extends('components.main')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto p-4 max-w-6xl">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-[#9d6e2a]">
                <h1 class="text-2xl font-bold text-[#601042]">Payment Confirmation</h1>
                <div class="mt-6 text-center">
                    <div class="text-green-500 text-4xl">
                        <span class="material-icons">check_circle</span>
                    </div>
                    <h2 class="text-xl font-semibold text-[#601042] mt-4">Payment Successful</h2>
                    <p class="text-gray-600 mt-2">Thank you for your payment. Your transaction was successful.</p>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-[#601042]">Order Number: #123456789</h3>
                        <p class="text-gray-600 mt-2">Amount: ₹33,728</p>
                        <p class="text-gray-600">Payment Method: Credit Card</p>
                    </div>
                    
                    <!-- Check Order Summary Button -->
                    <div class="mt-6 text-center">
                        <a href="{{route('ordersummary')}}" class="inline-block">
                            <button class="bg-[#601042] text-white py-3 px-6 rounded-md font-semibold hover:bg-[#4b0a2c] transition duration-300">
                                Check Order Summary
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
