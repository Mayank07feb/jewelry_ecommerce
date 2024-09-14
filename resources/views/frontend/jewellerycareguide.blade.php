@extends('components.main')
@section('content')
<div class="w-full max-w-full">
    <img src="{{asset('asset/img/jewellerycareguid BANNER.jpg')}}" alt="Jewellery Care Guide" class="w-full h-auto object-cover">
</div>
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

  {{-- Horizontal Line --}}
  <div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- img with text --}}

<div class="flex flex-col lg:flex-row gap-6 lg:p-6">
    <!-- Image Section -->
    <div class="w-full lg:w-1/2 flex items-center justify-center lg:mx-6 lg:px-4">
        <img src="{{asset('asset/img/care1.png')}}" alt="Jewellery Care" class="w-full h-auo object-cover ">
    </div>
    
    <!-- Text Section -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h1 class="text-3xl  text-black mb-4 font-light ">Diamond & Gemstone Care</h1>
        <ul class="list-disc list-inside text-gray-700 space-y-2 font-light text-lg">
            <p class="space-y-2">
                Diamond can chip, break and crack on impact</p>
            <p class="space-y-2">Wear diamond jewellery cautiously to avoid losing the diamond.</p>
            <p class="space-y-2">Gemstones are softer than diamonds, thus needs extra care while wearing as well as storing.</p>
        </ul>
    </div>
</div>


  {{-- Horizontal Line --}}
  <div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- img with text --}}

<div class="flex flex-col lg:flex-row gap-6 lg:p-6">
   
    
    <!-- Text Section -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h1 class="text-3xl  text-black mb-4 font-light ">How to Handle Your Fine Jewellery</h1>
        <ul class="list-disc list-inside text-gray-700 space-y-2 font-light text-lg">
            <p class="space-y-2">Put on your jewellery after you’ve applied your cosmetics like creams and perfumes.</p>
            <p class="space-y-2">Every piece of jewellery should be stored separately, preferably lined with cloth or velvet.</p>
            <p class="space-y-2">Get your jewellery washed to get rid of unwanted dirt from time to time.</p>
        </ul>
    </div>

     <!-- Image Section -->
     <div class="w-full lg:w-1/2 flex items-center justify-center lg:mx-6 lg:px-4">
        <img src="{{asset('asset/img/ring-daimond.png')}}" alt="Jewellery Care" class="w-full h-auo object-cover ">
    </div>
</div>


  {{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>



{{-- img with text --}}

<div class="flex flex-col lg:flex-row gap-6 lg:p-6">
    <!-- Image Section -->
    <div class="w-full lg:w-1/2 flex items-center justify-center lg:mx-6 lg:px-4">
        <img src="{{asset('asset/img/pearl.png')}}" alt="Jewellery Care" class="w-full h-auo object-cover ">
    </div>
    
    <!-- Text Section -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h1 class="text-3xl  text-black mb-4 font-light ">Pearl Jewellery Care</h1>
        <ul class="list-disc list-inside text-gray-700 space-y-2 font-light text-lg">
            <p class="space-y-2">Preserve pearls in a soft cloth or tissue.</p>
            <p class="space-y-2">Store each pearl jewellery individually because the friction between the pearls can scratch each other, thus leading to a loss in lustre.</p>
            <p class="space-y-2">Pearl necklaces need to be re-strung from time to time as the thread weakens making it susceptible to breaking.</p>
        </ul>
    </div>

    
</div>


  {{-- Horizontal Line --}}
  <div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


{{-- img with text --}}

<div class="flex flex-col lg:flex-row gap-6 lg:p-6">
   
    
    <!-- Text Section -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h1 class="text-3xl  text-black mb-4 font-light ">Gold Jewellery Care</h1>
        <ul class="list-disc list-inside text-gray-700 space-y-2 font-light text-lg">
            <p class="space-y-2">Plain gold jewellery, like all other jewellery products, needs to be stored separately, preferably lined with tissue or velvet..</p>
            <p class="space-y-2">Gold jewellery worn daily needs to be washed and cleaned regularly to maintain its shine and remove any accumulated dirt or sweat.</p>
            <p class="space-y-2">Enamels can chip off in course of time and need to be given to the concerned jeweller to fix.</p>
        </ul>
    </div>

     <!-- Image Section -->
     <div class="w-full lg:w-1/2 flex items-center justify-center lg:mx-6 lg:px-4">
        <img src="{{asset('asset/img/moti-ring.png')}}" alt="Jewellery Care" class="w-full h-auo object-cover ">
    </div>
</div>


  {{-- Horizontal Line --}}
<div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>



{{-- img with text --}}

<div class="flex flex-col lg:flex-row gap-6 lg:p-6">
    <!-- Image Section -->
    <div class="w-full lg:w-1/2 flex items-center justify-center lg:mx-6 lg:px-4">
        <img src="{{asset('asset/img/wash.png')}}" alt="Jewellery Care" class="w-full h-auo object-cover ">
    </div>
    
    <!-- Text Section -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h1 class="text-3xl  text-black mb-4 font-light ">How to Wash Jewellery at Home?</h1>
        <ul class="list-disc list-inside text-gray-700 space-y-2 font-light text-lg">
            <p class="space-y-2">Luke warm water is best for cleaning jewellery, although it is complete NO for pearls, kundan and enamel jewellery.</p>
            <p class="space-y-2">Never put any piece of diamond, gemstone, kundan, polki or enamel jewellery in hot water.</p>
            <p class="space-y-2">Store them in a cool dry place to avoid moisture or excessive heat.</p>
        </ul>
    </div>

    
</div>














</div>
@endsection