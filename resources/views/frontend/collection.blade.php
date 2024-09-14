@extends('components.main')
@section('content')
<!-- Breadcrumb -->


<div class="w-full lg:max-w-none mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-gray-50">
    <!-- Breadcrumb with Background and Border -->
    <nav class="flex bg-white border border-gray-200 p-4 rounded-md shadow-sm mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/" class="text-gray-600 hover:text-[#601042] inline-flex items-center">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-gray-500 ml-1 md:ml-2 font-medium">Collection</span>
                </div>
            </li>
        </ol>
    </nav>
{{-- <nav class="flex bg-white border border-gray-200 p-4 rounded-md shadow-sm mb-6" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="/" class="text-gray-600 hover:text-[#601042] inline-flex items-center">
                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                    </path>
                </svg>
                Home
            </a>
        </li>
        <li aria-current="page">
            <a href="/collection" class="text-gray-600 hover:text-[#601042] inline-flex items-center">
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-500 ml-1 md:ml-2 font-medium">Collection</span>
            </div></a>
        </li>
    </ol>
</nav> --}}

{{-- Collection Start --}}
<div class="p-4 md:p-8 text-center">
    <h1 class="text-2xl md:text-4xl font-light text-[#601042] relative before:absolute before:bottom-0 before:bg-[#601042] leading-none before:w-10 before:h-0.5 pb-1.5">
        Shop By Collection
    </h1>
    <p class="text-lg md:text-xl mb-4 md:mb-6">Say hello to our sparkling new collection!</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 1" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 2" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 3" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 4" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 5" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
        <a href="{{route('collectiondetails')}}" class="block group">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 6" class="w-full h-60 md:h-70 object-cover rounded-lg shadow-lg transform transition-transform duration-300 group-hover:scale-105 group-hover:shadow-2xl">
        </a>
    </div>
</div>

<!-- Horizontal line with logo -->
<div class="flex items-center justify-center w-full my-8">
    
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>
</div>

@endsection
