@extends('components.main')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto p-4 max-w-6xl">
            <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-[#9d6e2a]">
                <h1 class="text-2xl text-center font-bold text-[#601042]">Thank You for Your Purchase!</h1>
                <div class="mt-6 text-center">
                    <div class="text-green-500 text-4xl">
                        <span class="material-icons">thumb_up</span>
                    </div>
                    <h2 class="text-xl font-semibold text-[#601042] mt-4">Order Placed Successfully</h2>
                    <p class="text-gray-600 mt-2">Your order has been placed successfully. We are processing your order and will notify you once it is shipped.</p>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-[#601042]">Order Number: #123456</h3>
                        <p class="text-gray-600 mt-2">Estimated Delivery Date: September 20, 2024</p>
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('home') }}" class="w-full bg-[#601042] text-white py-2 px-4 rounded-lg hover:opacity-90 transition duration-300 inline-block text-center">
                            Return to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
