@extends('components.main')
@section('content')

<div class="p-8 text-center">
    <h1
    class="text-4xl font-light text-[#601042] relative before:absolute before:bottom-0 before:bg-[#601042] leading-none before:w-10 before:h-0.5 pb-1.5">
    Shop By Collection
</h1>
<p class="text-xl mb-6">Say hello to our sparkling new collection!</p>


    <div class="grid grid-cols-3 gap-6">
        <a href="https://example.com/link1" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 1" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <a href="#" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 2" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <a href="https://example.com/link3" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 3" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <a href="https://example.com/link4" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 4" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <a href="https://example.com/link5" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 5" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <a href="https://example.com/link6" class="block">
            <img src="{{asset('asset/img/pratha.jpg')}}" alt="Image 6" class="w-full h-70 object-cover rounded-lg shadow-lg">
        </a>
        <!-- Add more images if needed -->
    </div>
</div>


 {{-- horizontal line --}}
 <div class="flex items-center justify-center w-screen">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

@endsection
