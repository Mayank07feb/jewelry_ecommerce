@extends('components.main')
@section('content')
<!-- Breadcrumb -->
<ul class="hidden md:flex items-center text-xs -mx-1">
    <li class="px-1 py-2.5 text-muted last:text-black">
      <a href="/" class="py-px inline-block">Home</a>
    </li>
    <li class="px-1 py-2.5">
      <svg width="6" height="10" viewBox="0 0 6 10" fill="currentColor" class="fill-muted h-2">
        <path d="M0.954248 10L6 4.99892L0.954248 0L0 0.945273L4.0915 4.99892L0 9.05473L0.954248 10Z"></path>
      </svg>
    </li>
    <li class="px-1 py-2.5 text-muted last:text-black">
      <a href="/collection" class="py-px inline-block">Collections</a>
    </li>
</ul>
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

@endsection
