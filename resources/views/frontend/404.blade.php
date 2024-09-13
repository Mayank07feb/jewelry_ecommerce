@extends('components.main')
@section('content')
    <div class="bg-white flex items-center justify-center h-screen">
        <div class="text-center space-y-8">
            <!-- 3D Rotating 404 Error Text -->
            <div class="relative inline-block">
                <h1
                    class="text-9xl font-extrabold text-[#601042] transform transition-transform duration-700 hover:rotate-12 hover:scale-110 hover:text-[#9d6e2a] drop-shadow-lg">
                    404
                </h1>
            </div>

            <!-- Subheading and Description -->
            <h2 class="text-3xl font-semibold text-gray-700 mt-4 animate-bounce">
                Oops! Page Not Found
            </h2>
            <p class="text-gray-500 mt-2">
                The page you're looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>

            <!-- Back to Home Button -->
            <div class="mt-6">
                <a href="/" class="px-6 py-3 bg-[#601042] text-white rounded-full hover:bg-[#9d6e2a] transition duration-300 shadow-md">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
@endsection
