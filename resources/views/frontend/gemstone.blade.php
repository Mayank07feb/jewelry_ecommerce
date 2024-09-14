@extends('components.main')
@section('content')
{{-- banner --}}
<div class="w-full overflow-hidden rounded-lg shadow-lg">
    <img src="{{asset('asset/img/gemstone_banner.jpg')}}" alt="Gemstone Banner" class="w-full h-auto object-cover">
</div>

{{-- nav --}}
<div class="w-full lg:max-w-none mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-gray-50">
    <!-- Breadcrumb with Background and Border -->
    <nav class="flex bg-white border border-gray-200 p-4 rounded-md shadow-sm mb-6" aria-label="Breadcrumb">
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
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-gray-500 ml-1 md:ml-2 font-medium">Jewellery Careguide</span>
                </div>
            </li>
        </ol>
    </nav>
</div>

{{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto py-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

{{-- GEMSTONE --}}
<div class="flex flex-wrap md:flex-nowrap bg-[#601042] h-full">
    <!-- First Section: What are Gemstones? -->
    <div class="relative w-full md:w-1/2 overflow-hidden rounded-lg shadow-lg h-auto md:h-full">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gems.jpeg')}}" alt="Gemstone Banner" class="w-full h-full object-cover">
        
        <!-- Overlay Section -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-start lg:p-6 p-2">
            <h2 class="text-white lg:text-3xl md:text-2xl text-lg font-light lg:mb-4">What are Gemstones?</h2>
            <p class="text-gray-200 lg:text-lg md:text-md text-xs text-nowrap leading-relaxed">
                Gemstones are minerals, rocks, or organic materials that have been picked out for their appeal, toughness, and rarity before being faceted, polished, or carved into jewellery or other wearable accessories for humans. Most gemstones are hard, but some are too soft or fragile to be used in jewelry. Because of this, they are often shown in museums and sought after by people who are interested in them. The four most desired precious gemstones are diamonds, sapphires, emeralds, and rubies.
            </p>
        </div>
    </div>

    <!-- Second Section: How to Buy Gemstones? -->
    <div class="relative w-full md:w-1/2 flex items-center p-4 md:p-6">
        <!-- Text Section -->
        <div class="flex flex-col justify-center items-start text-start">
            <h2 class="text-white lg:text-3xl md:text-2xl text-lg font-light mb-4">How to Buy Gemstones?</h2>
            <p class="text-gray-200 lg:text-lg md:text-md text-xs leading-relaxed ">
                Since antiquity, gemstones have been used for both astrological and ornamental reasons. Shopping for a gemstone may be an exhilarating experience because of its mysterious origins, unparalleled beauty, and array of colors. Generally, gemstones with clear, medium-tone, intense, and saturated primary colors are most preferred. When choosing a rare and expensive gemstone from a recognized origin, one should be extremely cautious and rely solely on certificates given by prominent gem labs such as IGI, GTL, GIA, GRS, etc. All the gemstones present in the inventory of PNG Jewellers are carefully examined by our expert gemologist.
            </p>
        </div>
    </div>
</div>


{{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto py-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- PRECIOUS STONE --}}
<div class="text-center my-8">
    <h1 class="text-4xl font-light text-[#601042]">Precious Stone</h1>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:p-6 lg:mx-8">
    {{-- P-S-1 --}}
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6">
        <!-- Image Section -->
        <img src="{{asset('asset/img/ps1.webp')}}" alt="Ruby Gemstone" class="w-full h-auto object-cover rounded-lg mb-6">
        
        <!-- Text Section -->
        <div class="text-center">
            <h2 class="text-2xl font-light text-[#601042] mb-4">Ruby – The Romantic Gem</h2>
            <p class="text-gray-700 text-lg font-light leading-relaxed">
                Ruby is one of the top three gemstones, along with emeralds and sapphires. Historically, rubies have held a lofty position in the hearts of jewellery lovers for their vibrant red color and rarity. 
            </p>
        </div>
    </div>

    {{-- P-S-2 --}}
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6">
        <!-- Image Section -->
        <img src="{{asset('asset/img/ps2.webp')}}" alt="Emerald Gemstone" class="w-full h-auto object-cover rounded-lg mb-6">
        
        <!-- Text Section -->
        <div class="text-center">
            <h2 class="text-2xl font-light text-[#601042] mb-4">Emerald – The Original Royal</h2>
            <p class="text-gray-700 text-lg font-light leading-relaxed">
                Emeralds are one of the three most coveted gemstones, along with rubies and sapphires, due to their versatile green hue.
            </p>
        </div>
    </div>

    {{-- P-S-3 --}}
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6">
        <!-- Image Section -->
        <img src="{{asset('asset/img/ps3.webp')}}" alt="Diamond Gemstone" class="w-full h-auto object-cover rounded-lg mb-6">
        
        <!-- Text Section -->
        <div class="text-center">
            <h2 class="text-2xl font-light text-[#601042] mb-4">Diamond – The Forever Gem</h2>
            <p class="text-gray-700 text-lg font-light leading-relaxed">
                Possessing the highest shine of all transparent gemstones, a diamond is the hardest material on earth that can only be scratched with another diamond.
            </p>
        </div>
    </div>

    {{-- P-S-4 --}}
    <div class="bg-white rounded-lg shadow-lg overflow-hidden p-6">
        <!-- Image Section -->
        <img src="{{asset('asset/img/ps4.webp')}}" alt="Sapphire Gemstone" class="w-full h-auto object-cover rounded-lg mb-6">
        
        <!-- Text Section -->
        <div class="text-center">
            <h2 class="text-2xl font-light text-[#601042] mb-4">Sapphire – The Prosperity Gem</h2>
            <p class="text-gray-700 text-lg font-light leading-relaxed">
                Sapphire is one of the "big three" gems, along with rubies and emeralds. Sapphire comes from the Sanskrit term 'Shanipriya,' which means "beloved of Saturn."
            </p>
        </div>
    </div>
</div>


{{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto py-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- video --}}
<div class="w-full">
    <iframe width="1380" height="405" src="https://www.youtube.com/embed/iYJ4a-A7dQ8?si=GhEszxXGECeamdbX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   
</div>


{{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto py-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- Birthstones for your Birthmonths! --}}
<div class="p-6 text-center">
    <h1 class="text-3xl font-light text-gray-800 mb-4 ">Birthstones for Your Birthmonths!</h1>
    <p class="text-lg text-gray-600 leading-relaxed font-light mx-24">
        Birthstones are a fun, popular, and colorful introduction to the world of gemstones. They appeal to audiences around the world regardless of gender, age, nationality, or religion. Birthstones carry secrets, attributes, and lore that are unique to each gem.
    </p>
</div>












@endsection