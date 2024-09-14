@extends('components.main')
@section('content')
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
                    <span class="text-gray-500 ml-1 md:ml-2 font-medium">Our Story</span>
                </div>
            </li>
        </ol>
    </nav>


{{-- our story --}}
<div class="max-w-full mx-auto lg:p-6 p-2">
    <h1 class="text-3xl font-light text-center text-gray-800">Our Story</h1>
    <div class="max-w-4xl mx-auto lg:p-6">
        <img src="{{asset('asset/img/ourstory banner.jpg')}}" alt="">
    </div>
    <div class="max-w-full mx-auto lg:p-6">
        <p class="text-gray-700 mt-4">
            From a single store in a small town to a chain of stores with a global footprint, the journey of PNG Jewellers is truly fascinating. It all started way back in the 18th century; the group got its name from the late Purshottam Narayan Gadgil, a doyen of the family and the chief architect who captured the hearts and imagination of the people with his ethics and his jewellery.
        </p>
        <p class="text-gray-700 mt-4">
            The past two centuries have taught us that specific values like trust, commitment, and purity are far more precious than any jewel known to humankind. At PNG Jewellers, we constantly strive to honor these values by integrating them into our lives and creating a tradition remembered for ages to come.
        </p>
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

{{-- cards --}}
<div class="max-full mx-auto lg:p-6 p-2">
    <h1 class="text-3xl font-light text-center text-gray-800 mb-6">Our Core Values</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        {{-- card 1 --}}
        <div class="p-4 shadow-lg rounded-md">
            <img src="{{asset('asset/img/value_1.webp')}}" alt="Core Values" class="w-full">
            <div>
                <h2 class="text-xl font-semibold text-gray-700 my-4">Values</h2>
                <p id="core-values-text" class="text-gray-600 mb-6">
                    Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!
                </p>
                <div id="toggle-buttons" class="flex gap-4 shadow-inner shadow-[#6b4e6a] w-full max-w-[300px] rounded-lg p-2 justify-center">
                    <i id="show-more-icon" class="ri-add-circle-line text-xl text-[#603858] cursor-pointer"></i>
                    <a id="read-more" href="#" class="custom-button">Read More</a>
                    <i id="show-less-icon" class="ri-indeterminate-circle-line text-xl text-[#603858] cursor-pointer hidden"></i>
                    <a id="read-less" href="#" class="custom-button hidden">Read Less</a>
                </div>
            </div>
        </div>
        {{-- card 2 --}}
        <div class="p-4 shadow-lg rounded-md">
            <img src="{{asset('asset/img/Value_2.webp')}}" alt="Core Values" class="w-full">
            <div>
                <h2 class="text-xl font-semibold text-gray-700 my-4">Values</h2>
                <p id="core-values-text-vission" class="text-gray-600 mb-6">
                    Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!
                </p>
                <div id="toggle-buttons-vission" class="flex gap-4 shadow-inner shadow-[#6b4e6a] w-full max-w-[300px] rounded-lg p-2 justify-center">
                    <i id="show-more-icon-vission" class="ri-add-circle-line text-xl text-[#603858] cursor-pointer"></i>
                    <a id="read-more-vission" href="#" class="custom-button">Read More</a>
                    <i id="show-less-icon-vission" class="ri-indeterminate-circle-line text-xl text-[#603858] cursor-pointer hidden"></i>
                    <a id="read-less-vission" href="#" class="custom-button hidden">Read Less</a>
                </div>
            </div>
        </div>
        {{-- card 3 --}}
        <div class="p-4 shadow-lg rounded-md">
            <img src="{{asset('asset/img/mission.webp')}}" alt="Core Values" class="w-full">
            <div>
                <h2 class="text-xl font-semibold text-gray-700 my-4">Values</h2>
                <p id="core-values-text-Mission" class="text-gray-600 mb-6">
                    Our story unfolds over eighteen decades – inspired by the values of trust, purity, and transparency. Generations of the Gadgil family have employed their experience and expertise to abide by being a global hallmark of traditional designs while bringing a fresh twist to contemporary designs. A journey adorned with the values of goodness, creativity, and evolution!
                </p>
                <div id="toggle-buttons-Mission" class="flex gap-4 shadow-inner shadow-[#6b4e6a] w-full max-w-[300px] rounded-lg p-2 justify-center">
                    <i id="show-more-icon-Mission" class="ri-add-circle-line text-xl text-[#603858] cursor-pointer"></i>
                    <a id="read-more-Mission" href="#" class="custom-button">Read More</a>
                    <i id="show-less-icon-Mission" class="ri-indeterminate-circle-line text-xl text-[#603858] cursor-pointer hidden"></i>
                    <a id="read-less-Mission" href="#" class="custom-button hidden">Read Less</a>
                </div>
            </div>
        </div>
    </div>
    
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


</div>


    {{-- section --}}
<section class="py-10 bg-[#601042] w-full">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 md:pr-8">
                <h1 class="text-3xl font-light mb-2 text-white">Beginnings - Cornerstone of Each Story!</h1>
                <p class="text-start text-white mb-8">
                    The story of Gititra is indeed an epic scripted by six generations at the forefront of exceptional
                    traditional designs and unparalleled craftsmanship. Discover how Gititra Jewellers Pvt. Ltd, founded in
                    1832, went from a little jewellery shop in Sangli to a renowned design brand in the jewellery industry.
                </p>
                <a href="#"
                    class="inline-block bg-white text-black font-semibold py-3 px-6  hover:bg-[#f6d7ac] transition duration-300 border-2 border-black">READ
                    MORE</a>
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
            <img src="{{asset('asset/img/founder.png')}}" alt="">
            </div>
        </div>
</section>


  {{-- Horizontal Line --}}
  <div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


    {{-- section 2222--}}
    <section class="py-10 bg-[#f8edde] w-full">
        
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="{{asset('asset/img/Saurabh.jpg')}}" alt="">
                </div>
              <!-- Content Section -->
              <div class="lg:w-1/2">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Saurabh Gadgil</h1>
                <h2 class="text-xl font-medium text-gray-600 mb-4">Chairman and Managing Director</h2>
                <p class="text-gray-700 mb-4">
                    Creatively blending the age-old tradition with technology in a surging and booming Indian economy, the dynamic scion of the powerful, established business house, Saurabh Vidyadhar Gadgil, holds the spirit and modern vision for PNG Jewellers.
                </p>
                <p class="text-gray-700 mb-4">
                    A sixth-generation successor of the distinguished Gadgil family – pioneers in Maharashtra's gold and jewellery industry, Saurabh has been instrumental in transforming the image of PNG Jewellers into a professionally run corporate entity with global ambitions. An ardent sports enthusiast, he has been a champion in many chess competitions and is good enough to finish second in the national championship. Besides being a movie and travel buff, Saurabh is a passionate, voracious reader with eclectic tastes.
                </p>
                <p class="text-gray-700 mb-4">
                    From a single traditional store to a rapidly growing chain of outlets today, PNG Jewellers boasts of 35 swanky classy stores across India, U.S.A & Dubai. Remarkably, over 1000 employees and 500 craftsmen are under its umbrella. Over the years, the business diversified under his ever-advancing intellect and flourished through Gadgil Holdings Pvt Ltd, established in 2008.
                </p>
            </div>
        </div>
</section>

 {{-- Horizontal Line --}}
 <div class="flex items-center justify-center w-full mx-auto p-4 bg-[#f8edde]">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


    {{-- section 333--}}
    <section class="py-10 bg-[#f8edde] w-full">
        
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="{{asset('asset/img/Parag.jpg')}}" alt="">
                </div>
              <!-- Content Section -->
              <div class="lg:w-1/2">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Parag Yashwant Gadgil</h1>
                <h2 class="text-xl font-medium text-gray-600 mb-4">Executive Director</h2>
                <p class="text-gray-700 mb-4">Parag Yashwant Gadgil is the Executive Director of PN Gadgil Jewellers Ltd. He has been active in the family business since 1981. Born on 27th July 1959 & brought up and educated in the city of Sangli. He has acquired a diploma in Mechanical Engineering. 
                </p>
                <p class="text-gray-700 mb-4">
                    He is competent in every facet of the business. He has extensive expertise working with clients and solid grasp of psyche of those he serves. As executive director, he overseas all the customer relationships, Corporate engagements and CSR activity of the company. He is also responsible for ensuring that all the management policies and best practices at branch level operations are met for a company with over thousand employees.
                </p>
                <p class="text-gray-700 mb-4">He strongly believes in a collective effort in business expansion. He is a hard worker and readily receptive to any change. He prefers working with a low profile.
                </p>
            </div>
        </div>
</section>


 {{-- Horizontal Line --}}
 <div class="flex items-center justify-center w-full mx-auto p-4 bg-[#f8edde]">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>


    {{-- section 333--}}
    <section class="py-10 bg-[#f8edde] w-full">
        
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2 mt-6 md:mt-0">
                <img src="{{asset('asset/img/Kiran.jpg')}}" alt="">
                </div>
              <!-- Content Section -->
              <div class="lg:w-1/2">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">
                    Kiran Prakash Firodiya</h1>
                <h2 class="text-xl font-medium text-gray-600 mb-4">Group CFO & Executive Director</h2>
                <p class="text-gray-700 mb-4">Kiran Prakash Firodiya is the Group CFO & Executive Director of P N Gadgil Jewellers Ltd. Born on 24th Nov 1980 & brought up and educated in the city of Pune. He is Chartered Accountant by profession. He has also completed Masters in Commerce, MBA Finance & MBA International Business Management from IIBM. He is certified Forensic Auditor from ICAI and GDCA from Pune University.   
                </p>
                <p class="text-gray-700 mb-4">
                    He is competent in every facet of the business. He has extensive expertise working in the areas of Finance, Budgets & Accounts, Domestic & International Expansion, Treasury Management, Taxation & Compliances and Legal & Commercials. As a KMP, he oversees all the branches technical and operational aspects.  He is also responsible for ensuring that all legal requirements are met regarding inventory, sales logistics, accounting, and human resources for a company. 
                </p>
                <p class="text-gray-700 mb-4">He strongly believes in system building and implementing good practices & policies.


                </p>
            </div>
        </div>
</section>


 {{-- Horizontal Line --}}
 <div class="flex items-center justify-center w-full mx-auto p-4 ">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

@endsection