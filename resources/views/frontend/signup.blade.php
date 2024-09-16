@extends('components.main')

@section('content')
    <div class="max-w-lg mx-auto mt-8 p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-xl lg:text-2xl font-bold mb-4 text-center text-gray-800">Sign Up with Giritra Jewellers</h2>

        <!-- Logo and Divider -->
        <div class="flex items-center justify-center mb-6">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="mx-4">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>

        @if($errors->any())
            @foreach($errors->all()  as $error)
                {{$error}}
            @endforeach
        @endif

        <form class="space-y-4" action="{{route('register')}}" method="post">
            @csrf
            <!-- Flex container for First Name and Last Name -->
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label class="block text-gray-700 text-sm">First Name <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Enter First Name" name="first_name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
                </div>
                <div class="flex-1">
                    <label class="block text-gray-700 text-sm">Last Name</label>
                    <input type="text" placeholder="Enter Last Name" name="last_name" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 text-sm">Email Address <span class="text-red-500">*</span></label>
                <input type="email" placeholder="Enter Email Address" name="email" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
            </div>

            <div>
                <label class="block text-gray-700 text-sm">Password <span class="text-red-500">*</span></label>
                <input type="password" placeholder="Enter Password" name="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
            </div>

            <div>
                <label class="block text-gray-700 text-sm">Confirm Password <span class="text-red-500">*</span></label>
                <input type="password" placeholder="Confirm Password" name="confirm_password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a]">
            </div>

            <div>
                <label class="block text-gray-700 text-sm">Enter Mobile Number <span class="text-red-500">*</span></label>
                <div class="flex">
                    <span class="bg-gray-200 border border-gray-300 p-2 rounded-l-md text-sm">+91</span>
                    <input type="tel" placeholder="Mobile Number" name="mobile" class="w-full p-2 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-[#9d6e2a] text-sm">
                </div>
            </div>

            <div class="flex items-center space-x-2 text-sm">
                <input type="checkbox" id="terms" class="form-checkbox text-[#9d6e2a]">
                <label for="terms" class="text-gray-700">I Agree to the <a href="#" class="text-[#9d6e2a] hover:underline">Terms and Conditions</a> and <a href="#" class="text-[#9d6e2a] hover:underline">Privacy Policy</a></label>
            </div>

            <button type="submit" class="w-full bg-[#9d6e2a] text-white py-2 rounded-md hover:bg-[#7b4a1b] transition duration-300 text-sm">Sign up now</button>
        </form>

        <p class="text-center text-xs mt-4">
            Already have an account? <a href="{{route('login')}}" class="text-[#9d6e2a] hover:underline">Login now</a>
        </p>
    </div>
@endsection
