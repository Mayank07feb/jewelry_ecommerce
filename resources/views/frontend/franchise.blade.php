@extends('components.main')

@section('content')
{{-- banner --}}
<div class="w-full h-auto">
    <img src="{{ asset('asset/img/png_franchise_785d18df1c.png') }}" alt="Franchise Image" class="max-w-full h-auto object-cover">
</div>
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
            <a href="/franchise" class="text-gray-600 hover:text-[#601042] inline-flex items-center">
                <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-500 ml-1 md:ml-2 font-medium">CustomisizeJewellery</span>
            </div></a>
        </li>
    </ol>
</nav>

 {{-- Horizontal Line --}}
 <div class="flex items-center justify-center w-full mx-auto my-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>



    <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 p-6">
        <!-- Why Partner with PNG Section -->
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
            <h1 class="relative text-3xl lg:text-4xl font-semibold text-black mb-8 pb-3 before:absolute before:bottom-0 before:left-0 before:w-16 before:h-0.5 before:bg-[#601042] before:content-['']">
                Why Partner with PNG?
            </h1>
    
            <ul class="space-y-6 text-sm lg:text-base">
                <!-- Trust & Legacy -->
                <li class="flex items-start space-x-4">
                    <i class="ri-trophy-line text-3xl text-[#601042]"></i>
                    <div>
                        <span class="text-lg font-semibold text-black">Trust & Legacy</span>
                        <p class="text-gray-600">Benefit from PNG's long-standing reputation and trust in the industry.</p>
                    </div>
                </li>
    
                <!-- Fashion Forward -->
                <li class="flex items-start space-x-4">
                    <i class="ri-handbag-fill text-3xl text-[#601042]"></i>
                    <div>
                        <span class="text-lg font-semibold text-black">Fashion Forward</span>
                        <p class="text-gray-600">Stay ahead with our cutting-edge fashion trends and designs.</p>
                    </div>
                </li>
    
                <!-- Certified Jewellery -->
                <li class="flex items-start space-x-4">
                    <i class="ri-shield-check-line text-3xl text-[#601042]"></i>
                    <div>
                        <span class="text-lg font-semibold text-black">Certified Jewellery</span>
                        <p class="text-gray-600">Offer your customers only the highest quality, certified jewellery.</p>
                    </div>
                </li>
    
                <!-- Minimum Investment -->
                <li class="flex items-start space-x-4">
                    <i class="ri-money-dollar-circle-line text-3xl text-[#601042]"></i>
                    <div>
                        <span class="text-lg font-semibold text-black">Minimum Investment</span>
                        <p class="text-gray-600">Start with a minimal investment while maximizing your potential returns.</p>
                    </div>
                </li>
    
                <!-- Trendy Sterling Silver Jewellery -->
                <li class="flex items-start space-x-4">
                    <i class="ri-flower-fill text-3xl text-[#601042]"></i>
                    <div>
                        <span class="text-lg font-semibold text-black">Trendy Sterling Silver Jewellery</span>
                        <p class="text-gray-600">Attract customers with our stylish and trendy sterling silver jewellery.</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Franchising Section -->
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10 lg:mt-0">
            <h1 class="relative text-3xl lg:text-4xl font-semibold text-black mb-8 pb-3 before:absolute before:bottom-0 before:left-0 before:w-16 before:h-0.5 before:bg-[#601042] before:content-['']">
                Franchising
            </h1>
            <p class="text-lg text-gray-600 mb-8 text-center">
                Apply for our franchise now and set up your own PNG Jewellers' retail outlet in your area.
            </p>

            <form action="#" method="POST" class="space-y-6">
                <!-- First Name -->
                <div>
                    <label for="firstName" class="block text-sm font-medium text-black mb-1.5">First Name *</label>
                    <input type="text" id="firstName" name="firstName" required
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-black mb-1.5">Email Address *</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block text-sm font-medium text-black mb-1.5">Phone Number *</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                            +91
                        </span>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full p-3 border border-gray-300 rounded-r-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                    </div>
                </div>

                <!-- Occupation -->
                <div>
                    <label for="occupation" class="block text-sm font-medium text-black mb-1.5">Occupation</label>
                    <input type="text" id="occupation" name="occupation"
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- City -->
                <div>
                    <label for="city" class="block text-sm font-medium text-black mb-1.5">City *</label>
                    <input type="text" id="city" name="city" required
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- Pincode -->
                <div>
                    <label for="pincode" class="block text-sm font-medium text-black mb-1.5">Pincode *</label>
                    <input type="text" id="pincode" name="pincode" required
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- Investment Interest -->
                <div>
                    <label for="investmentInterest" class="block text-sm font-medium text-black mb-1.5">Investment Interest *</label>
                    <input type="text" id="investmentInterest" name="investmentInterest" required
                        class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-6 py-3 bg-[#601042] text-white font-semibold rounded-lg shadow-md hover:bg-[#501035] focus:outline-none focus:ring-2 focus:ring-[#601042] focus:ring-offset-2">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>









@endsection