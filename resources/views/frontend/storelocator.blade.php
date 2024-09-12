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
  

<div class="container mx-auto p-4 h-screen flex flex-col">
    <h1 class="text-2xl font-bold mb-4 text-center">Find your Nearest Giritra Jewellery</h1>
    
    <div class="flex mb-4">
        <div class="w-1/2 pr-1">
            <label class="block text-sm font-medium text-gray-700 mb-1">Stores in India</label>
            <select class="w-full p-2 border rounded">
                <option>Select</option>
                <option>Giritra</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="w-1/2 pl-1 bg-[#9d6e2a]">
            <label class="block text-sm font-medium text-gray-700 mb-1">International Stores</label>
            <select class="w-full p-2  border rounded">
                <option>Select</option>
                <option>Giritra</option>
                <!-- Add more options as needed -->
            </select>
        </div>
    </div>
    
    <div class="flex flex-grow gap-4 overflow-hidden">
        <div class="w-1/2 overflow-y-auto pr-4">
            <!-- Store List -->
            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Laxmi Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra
                </p>
            </div>
            
            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Paud Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Commerce Avenue, shop no.5-6, Mahaganesh Colony, Opp. Punyai Sabhgruha, Paud Road, Kothrud, 411038, PUNE, Maharashtra
                </p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Laxmi Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra
                </p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Laxmi Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra
                </p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Laxmi Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra
                </p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow mb-4 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 bg-[#9d6e2a] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white text-xl font-bold">PNG</span>
                    </div>
                    <h2 class="text-lg font-semibold">P N Gadgil Jewellers Limited (Laxmi Road)</h2>
                </div>
                <p class="text-sm text-gray-600">
                    Kunte Chowk, 694, Laxmi Rd, Bhatancha Bol, Narayan Peth, 411030, PUNE, Maharashtra
                </p>
            </div>
            <!-- Add more store blocks as needed -->
        </div>
        
        <div class="w-1/2 bg-gray-200 rounded-lg">
            <!-- Placeholder for the map -->
            <div class="h-full flex items-center justify-center">
                <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 5.25-9 13-9 13S3 15.25 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span class="ml-2 text-lg">Map would be displayed here</span>
            </div>
        </div>
    </div>
</div>


<div class="flex items-center justify-center w-screen">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

@endsection
