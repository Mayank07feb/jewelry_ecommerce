@extends('components.main')

@section('content')
<div class="container mx-auto mt-8 p-6 lg:p-8 bg-white shadow-lg rounded-lg max-w-md">
    <h2 class="text-2xl lg:text-3xl font-bold text-center text-[#9d6e2a] mb-6">Forgot Password</h2>
    
    <!-- Form -->
    <form class="space-y-4">
        <div>
            <label class="block text-gray-700 text-sm lg:text-base">Email Address <span class="text-red-500">*</span></label>
            <input type="email" placeholder="Enter your email address" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
        </div>
        <button type="submit" class="w-full bg-[#9d6e2a] text-white py-2 rounded-md hover:bg-[#7b4a1b] focus:outline-none">Send Password Reset Link</button>
    </form>

    <p class="text-center text-sm mt-6">
        Remembered your password? <a href="{{ route('login') }}" class="text-[#9d6e2a] hover:underline">Login here</a>
    </p>
</div>
@endsection
