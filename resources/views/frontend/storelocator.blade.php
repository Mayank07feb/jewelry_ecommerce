@extends('components.main')
@section('content')
{{-- <!-- Navigation -->
<nav class="absolute top-10 left-0 w-full p-4 text-white z-20 bg-gradient-to-b from-black to-transparent">
  <div class="container mx-auto">
    <div class="flex items-center space-x-2 text-sm">
      <a href="{{ route('home') }}" class="hover:underline">Home</a>
      <span class="text-gray-400">›</span>
      <span class="font-semibold">Store Locator</span>
    </div>
  </div>
</nav> --}}

<!-- Rest of your code remains the same -->

<!-- Main Image -->
<div class="relative h-96 bg-cover bg-center" style="background-image: url('{{ asset('asset/img/store-web-banner.jpg') }}');">
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <!-- Store Locator Text -->
  <div class="absolute bottom-1/4 left-1/2 transform -translate-x-1/2 text-center text-white">
    <h1 class="text-4xl font-bold mb-2">Store Locator</h1>
    <p class="text-xl">Find Your Nearest Store.</p>
  </div>
</div>

<!-- Search Section -->
<div class="flex items-center justify-center w-screen">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>
    <!-- Add your search form or additional content here -->
  

  <h1 class="text-2xl font-bold text-center py-4 border-b">
    Find your Nearest P. N. Gadgil Jewellery
</h1>
<div class="flex-1 flex flex-col overflow-hidden">
    <div class="flex space-x-4 p-4">
        <div class="w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Stores in India</label>
            <select class="w-full border rounded-md p-2">
                <option>Select</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="w-1/2">
            <label class="block text-sm font-medium text-gray-700 mb-1">International Stores</label>
            <select class="w-full border rounded-md p-2">
                <option>Select</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>
</div>

<div class="flex-1 flex ">
    <!-- Store Entries Container with Scrollbar -->
    <div class="w-1/3 h-screen p-4 overflow-y-auto border-r">
        <div class="space-y-4">
            <!-- Store Entry -->
            <div class="bg-purple-100 p-4 rounded-lg cursor-pointer">
                <div class="flex items-center space-x-2 mb-2">
                    <div class="w-10 h-10 bg-[#9d6e2a] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-[#9d6e2a]">P N Gadgil Jewellers Limited (Laxmi Road)</h3>
                </div>
                <p class="text-sm text-gray-600">Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra</p>
            </div>
            <!-- Repeat above block for more stores -->
            <!-- Add a "Show More" button if needed -->
            <div class="text-center">
                <button class="text-blue-600 hover:underline mt-4">Show More</button>
            </div>
        </div>
    </div>
    <!-- Map Placeholder -->
    <div class="flex-1 bg-blue-100 p-4 flex items-center justify-center">
        <div class="w-full h-full bg-blue-200 rounded-lg flex items-center justify-center">
            <p class="text-xl font-semibold text-blue-800 text-center">Map Placeholder</p>
        </div>
    </div>
</div>


@endsection
