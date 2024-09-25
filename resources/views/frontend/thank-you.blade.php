@extends('components.main')

@section('content')
<div class="bg-gradient-to-br from-purple-50 via-gray-100 to-amber-50 min-h-screen py-12">
    <div class="container mx-auto p-4 max-w-4xl">
        <div class="bg-white p-8 rounded-2xl shadow-2xl border-l-8 border-[#9d6e2a] transform hover:scale-[1.02] transition-all duration-300">
            <div class="text-center">
                <div class="text-green-500 text-7xl mb-6">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="text-4xl font-bold text-[#601042] mb-4">Thank You for Your Purchase!</h1>
                <h2 class="text-2xl font-semibold text-[#601042] mb-4">Order Placed Successfully</h2>
                <p class="text-gray-600 mb-8 max-w-2xl mx-auto">Your order has been placed successfully. We're excited to prepare your items and get them on their way to you. We'll keep you updated every step of the way!</p>
            </div>

            <div class="bg-gradient-to-r from-purple-100 to-amber-100 p-6 rounded-xl mb-8 shadow-inner">
                <h3 class="text-2xl font-semibold text-[#601042] mb-4">Order Details</h3>
                <div class="grid grid-cols-2 gap-4 text-left">
                    <p class="text-gray-600">Order Number: <span class="font-semibold text-[#601042]">#123456</span></p>
                    <p class="text-gray-600">Date: <span class="font-semibold text-[#601042]">{{ date('F j, Y') }}</span></p>
                    <p class="text-gray-600">Estimated Delivery: <span class="font-semibold text-[#601042]">September 30, 2024</span></p>
                    <p class="text-gray-600">Total Amount: <span class="font-semibold text-[#601042]">₹23,666</span></p>
                </div>
            </div>

            <div class="mb-8">
                <h3 class="text-2xl font-semibold text-[#601042] mb-4">What's Next?</h3>
                <ul class="text-left space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-[#9d6e2a] mt-1 mr-3"></i>
                        <span>You will receive an order confirmation email shortly.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-truck text-[#9d6e2a] mt-1 mr-3"></i>
                        <span>We'll send you shipping updates via email and SMS.</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-user-circle text-[#9d6e2a] mt-1 mr-3"></i>
                        <span>You can track your order status in your account dashboard.</span>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                <a href="{{ route('home') }}" class="bg-[#601042] text-white py-3 px-8 rounded-full hover:bg-[#7a1654] transition duration-300 inline-block text-center transform hover:scale-105">
                    <i class="fas fa-home mr-2"></i> Return to Home
                </a>
                <a href="{{route('track')}}" class="bg-[#9d6e2a] text-white py-3 px-8 rounded-full hover:bg-[#b88632] transition duration-300 inline-block text-center transform hover:scale-105">
                    <i class="fas fa-truck mr-2"></i> Track Your Order
                </a>
            </div>

            <div class="border-t border-gray-200 pt-8">
                <h3 class="text-2xl font-semibold text-[#601042] mb-4">Need Help?</h3>
                <p class="text-gray-600 mb-4">If you have any questions or concerns, our customer support team is here to help.</p>
                <a href="{{ route('contact') }}" class="text-[#601042] hover:text-[#7a1654] font-semibold flex items-center justify-center">
                    <i class="fas fa-headset mr-2"></i> Contact Support
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
@endpush
@endsection