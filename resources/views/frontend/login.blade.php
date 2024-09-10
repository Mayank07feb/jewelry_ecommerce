@extends('components.main')

@section('content')
<div class="container mx-auto mt-8 p-6 lg:p-8 bg-white shadow-lg rounded-lg max-w-md">
    <h2 class="text-2xl lg:text-3xl font-bold text-center text-[#9d6e2a] mb-6">Log in to Giritra Jewellers</h2>
    <!-- Logo and Divider -->
    <div class="flex items-center justify-center mb-6">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>

    <!-- Tab buttons -->
    <div class="flex flex-wrap justify-around mb-6">
        <button id="passwordTab" class="tab-btn text-lg font-semibold text-gray-600 border-b-4 pb-2 focus:outline-none border-[#9d6e2a]">Login with Password</button>
        <button id="otpTab" class="tab-btn text-lg font-semibold text-gray-600 border-b-4 pb-2 focus:outline-none">Login with OTP</button>
    </div>

    <!-- Login with Password Form -->
    <form id="passwordForm" class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm lg:text-base">Email Address <span class="text-red-500">*</span></label>
            <input type="email" placeholder="Enter Email Address" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
        </div>
        <div>
            <label class="block text-gray-700 text-sm lg:text-base">Password <span class="text-red-500">*</span></label>
            <input type="password" placeholder="Enter Password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
        </div>
        <div class="flex justify-between items-center">
            <a href="#" class="text-sm text-[#9d6e2a] hover:underline">Forgot Password?</a>
        </div>
        <button type="submit" class="w-full bg-[#9d6e2a] text-white py-2 rounded-md hover:bg-[#7b4a1b] focus:outline-none">Log me in</button>
    </form>

    <!-- Login with OTP Form (Initially Hidden) -->
    <form id="otpForm" class="space-y-4 hidden">
        <div>
            <label class="block text-gray-700 text-sm lg:text-base">Enter Mobile Number <span class="text-red-500">*</span></label>
            <div class="flex">
                <span class="bg-gray-200 border border-gray-300 p-2 rounded-l-md text-gray-600">+91</span>
                <input type="tel" placeholder="Enter Mobile Number" class="w-full p-3 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
            </div>
        </div>
        <button type="button" class="w-full bg-[#9d6e2a] text-white py-2 rounded-md hover:bg-[#7b4a1b] focus:outline-none">Send OTP</button>
        <div>
            <label class="block text-gray-700 text-sm lg:text-base">Enter OTP <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Enter OTP" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
        </div>
        <button type="submit" class="w-full bg-[#9d6e2a] text-white py-2 rounded-md hover:bg-[#7b4a1b] focus:outline-none">Verify & Log in</button>
    </form>

    <p class="text-center text-sm mt-6">
        New to Giritra Jewellers? <a href="{{route('signup')}}" class="text-[#9d6e2a] hover:underline">Create Account</a>
    </p>
</div>

<script>
    // Tab switching logic
    const passwordTab = document.getElementById('passwordTab');
    const otpTab = document.getElementById('otpTab');
    const passwordForm = document.getElementById('passwordForm');
    const otpForm = document.getElementById('otpForm');

    passwordTab.addEventListener('click', function() {
        passwordForm.classList.remove('hidden');
        otpForm.classList.add('hidden');
        passwordTab.classList.add('border-[#9d6e2a]');
        otpTab.classList.remove('border-[#9d6e2a]');
    });

    otpTab.addEventListener('click', function() {
        otpForm.classList.remove('hidden');
        passwordForm.classList.add('hidden');
        otpTab.classList.add('border-[#9d6e2a]');
        passwordTab.classList.remove('border-[#9d6e2a]');
    });
</script>
@endsection
