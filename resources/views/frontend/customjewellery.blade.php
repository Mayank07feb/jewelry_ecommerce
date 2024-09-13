@extends('components.main')
@section('content')
    {{-- BANNER --}}
    <div class="relative w-full overflow-hidden">
        <img src="{{ asset('asset/img/customize_banner.jpg') }}" alt="Customize Banner" class="w-full h-auto object-cover">
    </div>
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
                        <span class="text-gray-500 ml-1 md:ml-2 font-medium">Customize Jewellery</span>
                    </div>
                </li>
            </ol>
        </nav>

        {{-- work --}}
        <div class="flex flex-col md:flex-row">
            <div class="container mx-auto p-8 flex-1 bg-[#601042]">
                <h2 class="text-3xl font-light text-center mb-12 text-white">How It Works</h2>

                <!-- Steps -->
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex flex-row gap-4 lg:gap-1 md:flex-row items-start md:items-center">
                        <img src="{{ asset('asset/img/custom1.png') }}" alt="Step 1 Image"
                            class="lg:w-20 lg:h-20 object-contain mb-4 md:mb-0">
                        <div class="md:pl-8">
                            <h3 class="lg:text-2xl text-sm font-bold lg:font-light mb-2 text-white">Step 1: Share Your
                                Design</h3>
                            <p class="text-white lg:text-xs">
                                Share your jewellery design and idea for customizing it. Our team will carefully review your
                                vision and guide you through the next steps.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-row gap-4 lg:gap-1 md:flex-row items-start md:items-center">
                        <img src="{{ asset('asset/img/custom2.png') }}" alt="Step 2 Image"
                            class="lg:w-20 lg:h-20 object-contain mb-4 md:mb-0">
                        <div class="md:pl-8">
                            <h3 class="lg:text-2xl text-sm font-bold lg:font-light mb-2 text-white">Step 2: Analysis & Cost
                                Estimation</h3>
                            <p class="text-white lg:text-xs">
                                We analyze your specifics, estimate the cost, and provide a detailed timeline for your
                                customized jewellery project.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-row gap-4 lg:gap-1 md:flex-row items-start md:items-center">
                        <img src="{{ asset('asset/img/custom3.png') }}" alt="Step 3 Image"
                            class="lg:w-20 lg:h-20 object-contain mb-4 md:mb-0">
                        <div class="md:pl-8">
                            <h3 class="lg:text-2xl text-sm font-bold lg:font-light mb-2 text-white">Step 3: Mould Casting &
                                Order Confirmation</h3>
                            <p class="text-white lg:text-xs">
                                We cast the perfect mould for your jewellery, and once you're satisfied, we confirm your
                                order with an invoice payment.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex flex-row gap-4 lg:gap-1 md:flex-row items-start md:items-center">
                        <img src="{{ asset('asset/img/custom4.png') }}" alt="Step 4 Image"
                            class="lg:w-20 lg:h-20 object-contain mb-4 md:mb-0">
                        <div class="md:pl-8">
                            <h3 class="lg:text-2xl text-sm font-bold lg:font-light mb-2 text-white">Step 4: Final Payment &
                                Delivery</h3>
                            <p class="text-white lg:text-xs">
                                Your jewellery is crafted to perfection, and a final payment adjustment is made. Your
                                customized jewellery is now ready for delivery!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-1 w-full mx-auto p-auto bg-white rounded-lg shadow-md">
                <h1 class="lg:text-3xl text-xl text-center font-light my-6">Please provide all your details</h1>
                <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 ">

                    <!-- Form 1 -->
                    <div class="p-6">
                        <form action="/submit-customization" method="POST" enctype="multipart/form-data">
                            <!-- Gold Color -->
                            <div class="mb-4 relative">
                                <label for="goldColor" class="block text-sm font-light text-gray-700">Gold Color *</label>
                                <div class="flex items-center mt-1">

                                    <select id="goldColor" name="goldColor"
                                        class="pl-12 pr-3 py-2 font-light border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042] w-full">
                                        <option value="" disabled selected>Select Gold Color</option>
                                        <option value="yellow">Yellow Gold</option>
                                        <option value="white">White Gold</option>
                                        <option value="rose">Rose Gold</option>
                                        <option value="green">Green Gold</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Gold Purity -->
                            <div class="mb-4 relative">
                                <label for="goldPurity" class="block text-sm font-light text-gray-700">Gold Purity *</label>
                                <div class="flex items-center mt-1">

                                    <select id="goldPurity" name="goldPurity"
                                        class="pl-12 pr-3 py-2 font-light border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042] w-full">
                                        <option value="" disabled selected>Select Purity</option>
                                        <option value="14kt">14KT</option>
                                        <option value="18kt">18KT</option>
                                        <option value="22kt">22KT</option>
                                        <option value="24kt">24KT</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Upload Image -->
                            <div class="mb-6 ">
                                <label for="imageUpload1"
                                    class="block text-sm font-light text-gray-700 mb-2 w-full"></label>
                                <div class="relative">
                                    <input type="file" id="imageUpload1" name="imageUpload1"
                                        class="block w-full text-sm text-gray-500 file:border file:border-gray-300 file:py-2 file:px-4 file:rounded-md file:text-sm file:font-light file:bg-gray-50 hover:file:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">

                                    </div>
                                </div>
                            </div>


                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-light text-gray-700">Name *</label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                    required>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-light text-gray-700">Phone Number
                                    *</label>
                                <div class="flex items-center">
                                    <span class="mr-2 text-gray-500">+91</span>
                                    <input type="tel" id="phone" name="phone"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                        required>
                                </div>
                            </div>


                        </form>
                    </div>

                    <!-- Form 2 -->
                    <div class="p-6">
                        <form action="/submit-customization" method="POST" enctype="multipart/form-data">
                            <!-- Diamond Clarity -->
                            <div class="mb-4 relative">
                                <label for="diamondClarity" class="block text-sm font-light text-gray-700">Diamond Clarity
                                    *</label>
                                <div class="flex items-center mt-1">

                                    <select id="diamondClarity" name="diamondClarity"
                                        class="pl-12 pr-3 py-2 font-light border border-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042] w-full">
                                        <option value="" disabled selected>Select Clarity</option>
                                        <option value="VS1">VS1</option>
                                        <option value="VS2">VS2</option>
                                        <option value="SI1">SI1</option>
                                        <option value="SI2">SI2</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Your budget -->
                            <div class="mb-4">
                                <label for="text" class="block text-sm font-light text-gray-700">Your Budget *</label>
                                <input type="text" id="text" name="text"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                    required>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label for="Description"
                                    class="block text-sm font-light text-gray-700">Description</label>
                                <input type="text" name="Description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"></input>
                            </div>

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-light text-gray-700">Email Address
                                    *</label>
                                <input type="email" id="email" name="email"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                    required>
                            </div>

                            <!-- Address -->
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-light text-gray-700">Address *</label>
                                <textarea id="address" name="address" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                    required></textarea>
                            </div>


                        </form>
                    </div>
                    <!-- Submit Button -->
                    <div class="lg:-mt-24 m-8 pl-16 lg:pl-0 lg:m-0">
                        <div class="flex justify-start lg:pl-4">
                            <button type="submit"
                                class="px-6 py-2 bg-[#601042] text-white font-light rounded-md shadow-md hover:bg-[#4b002a] focus:outline-none focus:ring-2 focus:ring-[#601042] transition-colors duration-300">
                                Submit
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- Horizontal line with logo --}}
        <div class="flex items-center justify-center w-full mt-8">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="mx-4">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>
    </div>
@endsection
