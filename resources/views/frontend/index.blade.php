@extends('components.main')

@section('content')
{{-- HOME BANNER SLIDER --}}
<div class="relative w-full h-screen md:h-[40rem] overflow-hidden swiper-container">
    <!-- Slider container -->
    <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('assets/images/banner1.png') }}" alt="Diamond Collection" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                <div class="text-center text-white p-4 md:p-10">
                    <h1 class="text-2xl md:text-5xl font-bold drop-shadow-lg">Exclusive Diamond Collection</h1>
                    <p class="mt-4 text-sm md:text-lg">Elegant and Timeless Pieces</p>
                    <button class="mt-6 px-8 py-3 bg-[#601042] hover:bg-[#501032] text-white text-sm md:text-lg rounded-full transition duration-300">Shop Now</button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('assets/images/banner2.png') }}" alt="Bridal Jewellery Collection" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                <div class="text-center text-white p-4 md:p-10">
                    <h1 class="text-2xl md:text-5xl font-bold drop-shadow-lg">Bridal Jewellery Collection</h1>
                    <p class="mt-4 text-sm md:text-lg">Perfect for Your Special Day</p>
                    <button class="mt-6 px-8 py-3 bg-[#601042] hover:bg-[#501032] text-white text-sm md:text-lg rounded-full transition duration-300">Discover More</button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide w-full h-full flex-shrink-0 relative">
            <img src="{{ asset('assets/images/banner3.jpg') }}" alt="Luxury Gold Jewellery" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent flex items-center justify-center">
                <div class="text-center text-white p-4 md:p-10">
                    <h1 class="text-2xl md:text-5xl font-bold drop-shadow-lg">Luxury Gold Jewellery</h1>
                    <p class="mt-4 text-sm md:text-lg">Handcrafted with Perfection</p>
                    <button class="mt-6 px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-white text-sm md:text-lg rounded-full transition duration-300">Browse Now</button>
                </div>
            </div>
        </div>
    </div>

  
</div>






   
@endsection
