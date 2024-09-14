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
    <iframe width="50" height="40" class="w-full h-full" src="https://www.youtube.com/embed/iYJ4a-A7dQ8?si=GhEszxXGECeamdbX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   
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
    <!-- Title -->
    <h1 class="text-3xl font-light text-gray-800 mb-4 md:text-4xl lg:text-5xl">
        Birthstones for Your Birthmonths!
    </h1>
    <!-- Description -->
    <p class="text-lg text-gray-600 leading-relaxed font-light mx-4 md:mx-8 lg:mx-24">
        Birthstones are a fun, popular, and colorful introduction to the world of gemstones. They appeal to audiences around the world regardless of gender, age, nationality, or religion. Birthstones carry secrets, attributes, and lore that are unique to each gem.
    </p>
</div>


{{-- month-nav --}}
<nav class="bg-gray-100 p-4 border">
    <div class="overflow-x-auto">
        <ul class="flex flex-nowrap space-x-2 md:space-x-4 lg:mx-32">
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#january" class="text-black hover:text-[#601042]">January</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#february" class="text-black hover:text-[#601042]">February</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#march" class="text-black hover:text-[#601042]">March</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#april" class="text-black hover:text-[#601042]">April</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#may" class="text-black hover:text-[#601042]">May</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#june" class="text-black hover:text-[#601042]">June</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#july" class="text-black hover:text-[#601042]">July</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#august" class="text-black hover:text-[#601042]">August</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#september" class="text-black hover:text-[#601042]">September</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#october" class="text-black hover:text-[#601042]">October</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#november" class="text-black hover:text-[#601042]">November</a></li>
            <li class="flex-shrink-0 mb-2 md:mb-0"><a href="#december" class="text-black hover:text-[#601042]">December</a></li>
        </ul>
    </div>
</nav>


{{-- gems 1--}}
<div class="max-w-4xl mx-auto lg:p-6 p-2" id="january">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem1.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Garnet</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">January</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            Bold oranges, royal greens, and hues of purples and pinks - are some of the hues of a Garnet. If you’re a January baby, you’re in for a treat! There are so many varieties to pick from, so go ahead and uplift your spirit with your favorite Garnet gemstone.
        </p>
    </div>
</div>
{{-- gems2 --}}
<div class="max-w-4xl mx-auto p-6" id="feburary">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem2.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Amethyst</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">February</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            The Amethyst gemstone comes in different shades of the spectacular purple colour that ranges from a blend of a deep violet to a lighter lilac hue. This gemstone is as dreamy as the come, so be prepared to be transported to a soothing state of mind. 
    </p>
    </div>
</div>

{{-- gems 3--}}
<div class="max-w-4xl mx-auto p-6" id="march">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem3.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Aquamarine</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">March</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            Sea, salt, sun and everything fun! These aqua-blue colored babies are a perfect ode to the ocean. So if you’re a total beach baby or if you just love the mesmerising hues of blue, go ahead and pick one.
        </p>
    </div>
</div>

{{-- gems 4--}}
<div class="max-w-4xl mx-auto p-6" id="april">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem4.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Diamond</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">April</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            They say diamonds are a girl’s best friend. Well, they’re absolutely right. :) A diamond is the perfect gesture that there is, and honestly, who can say no to it? Wearing a diamond is also said to bring benefits such as balance, clarity and abundance. So go ahead, and give it a try.
        </p>
    </div>
</div>

{{-- gems 5--}}
<div class="max-w-4xl mx-auto p-6" id="may">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem5.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Emerald</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">May</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            Royal. Bold. Elegant. For all our Queens out there, there’s no other way to slay the royalty quotient than with a glorious Emerald. The deep hues of green will make you weak in the knees.
        </p>
    </div>
</div>

{{-- gems6 --}}
<div class="max-w-4xl mx-auto p-6" id="june">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem6.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Pearl</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">June</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            
            Be it a pair of ripped denim, a blazer or a formal gown: Pearl is a one stop solution to give you that charming look you’ve been wanting. They’re sophisticated, classy and will be sure to make heads turn.
        </p>
    </div>
</div>

{{-- gems 7--}}
<div class="max-w-4xl mx-auto p-6" id="july">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem7.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Ruby</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">July</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            The Ruby is said to be the reigning gemstone, and is said to bring an abundance of love. The deeper and more glorious the hue of the gemstone, the more valuable it is. Pick a gorgeous Ruby out, we promise you won’t regret it.


        </p>
    </div>
</div>

{{-- gems 8--}}
<div class="max-w-4xl mx-auto p-6" id="august">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem8.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Peridot</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">August</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            This mystical gemstone is said to have healing powers, and is known as the Gem of the Sun. After all, green does have a soothing effect on us. The refreshing hue of a Peridot is something we bet you’ll always, always love.
        </p>
    </div>
</div>


{{-- gems 9--}}
<div class="max-w-4xl mx-auto p-6" id="september">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem9.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Sapphire</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">September</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            Nothing speaks royal like a true blue sapphire. Go pick out a dark blue hued beauty, if you’re a September born, or you love accessorising like the royalty you are.


        </p>
    </div>
</div>


{{-- gems10 --}}
<div class="max-w-4xl mx-auto p-6" id="october">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem10.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Tourmaline</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">October</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            The beauty of a Tourmaline gemstone is that it comes in a variety of gorgeous colours. Tourmaline is known to ward off negative energy. So you can totally pick one out, in your favourite colour too!
        </p>
    </div>
</div>


{{-- gems 11--}}
<div class="max-w-4xl mx-auto p-6" id="november">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem11.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Citrine</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">November</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            If you’re all for ‘fun in the sun’, the Citrine gemstone is meant for you. Known to be a healing gemstone, citrine is said to be a gift from the Sun. So go and get yourself some sunshine.
        </p>
    </div>
</div>


{{-- gems 12--}}
<div class="max-w-4xl mx-auto p-6" id="december">
    <div class="flex flex-col items-center text-center">
        <!-- Image Section -->
        <img src="{{asset('asset/img/gem12.png')}}" alt="Garnet Gemstone" class="w-32 h-32 object-cover rounded-full mb-4">

        <!-- Text Section -->
        <h1 class="text-2xl light text-gray-800 mb-2">Blue Topaz</h1>
        <h3 class="text-xl font-semibold text-gray-600 mb-4">December</h3>
        <p class="text-gray-700 text-base lg:text-sm lg:mx-12 p-2 leading-relaxed">
            Blue Topaz is known for its amazing aqua blue shade. It also is the perfect gemstone for all things ‘Love’ - as it represents eternal romance. So if you’re a December baby, or you just love all things cheesy, this gemstone is the one for you.
        </p>
    </div>
</div>


















@endsection