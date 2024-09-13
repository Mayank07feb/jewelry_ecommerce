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
                        <span class="text-gray-500 ml-1 md:ml-2 font-medium">Diamond Jewellery</span>
                    </div>
                </li>
            </ol>
        </nav>
        {{-- Web View Filter --}}
        <div class="hidden lg:block bg-[#601042] w-full h-auto z-10">
            <div class="container px-4 lg:overflow-visible">
                <div class="lg:bg-primary lg:flex">
                    <!-- Filter Categories for Desktop -->
                    <div class="flex w-full flex-wrap">
                        <!-- Price Filter -->
                        <div class="lg:max-w-[270px] flex-auto">
                            <div class="relative z-40">
                                <div id="price-filter-button"
                                    class="flex items-center cursor-pointer px-4 py-3 w-full text-sm bg-primary-light text-white font-light uppercase tracking-wider">
                                    <span class="material-icons text-white mr-2">tune</span>
                                    <span class="inline-block capitalize">Price</span>
                                    <span class="ml-auto">
                                        <span
                                            class="material-icons transform transition-transform duration-500">expand_more</span>
                                    </span>
                                </div>
                                <!-- Dropdown -->
                                <div id="price-dropdown" class="hidden absolute bg-white text-black w-full shadow-lg mt-2">
                                    <ul class="text-sm">
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="radio" id="under500" name="price" value="under500"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="under500" class="ml-2">Under $500</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="radio" id="500-1000" name="price" value="500-1000"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="500-1000" class="ml-2">$500 - $1000</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="radio" id="1000-5000" name="price" value="1000-5000"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="1000-5000" class="ml-2">$1000 - $5000</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="radio" id="above5000" name="price" value="above5000"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="above5000" class="ml-2">Above $5000</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Metal Type Filter -->
                        <div class="lg:max-w-[270px] flex-auto">
                            <div class="relative z-40">
                                <div id="metal-filter-button"
                                    class="flex items-center cursor-pointer px-4 py-3 w-full text-sm bg-primary-light text-white font-light uppercase tracking-wider">
                                    <span class="inline-block capitalize">Metal Type</span>
                                    <span class="ml-auto">
                                        <span
                                            class="material-icons transform transition-transform duration-500">expand_more</span>
                                    </span>
                                </div>
                                <!-- Dropdown -->
                                <div id="metal-dropdown" class="hidden absolute bg-white text-black w-full shadow-lg mt-2">
                                    <ul class="text-sm">
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="gold" name="metal" value="gold"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="gold" class="ml-2">Gold</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="silver" name="metal" value="silver"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="silver" class="ml-2">Silver</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="platinum" name="metal" value="platinum"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="platinum" class="ml-2">Platinum</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="mixed" name="metal" value="mixed"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="mixed" class="ml-2">Mixed Metals</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Shop For Filter -->
                        <div class="lg:max-w-[270px] flex-auto">
                            <div class="relative z-40">
                                <div id="shopfor-filter-button"
                                    class="flex items-center cursor-pointer px-4 py-3 w-full text-sm bg-primary-light text-white font-light uppercase tracking-wider">
                                    <span class="inline-block capitalize">Shop For</span>
                                    <span class="ml-auto">
                                        <span
                                            class="material-icons transform transition-transform duration-500">expand_more</span>
                                    </span>
                                </div>
                                <!-- Dropdown -->
                                <div id="shopfor-dropdown"
                                    class="hidden absolute bg-white text-black w-full shadow-lg mt-2">
                                    <ul class="text-sm">
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="men" name="shopfor" value="men"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="men" class="ml-2">Men</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="women" name="shopfor" value="women"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="women" class="ml-2">Women</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="children" name="shopfor" value="children"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="children" class="ml-2">Children</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="unisex" name="shopfor" value="unisex"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="unisex" class="ml-2">Unisex</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Gifts Filter -->
                        <div class="lg:max-w-[270px] flex-auto">
                            <div class="relative z-40">
                                <div id="gifts-filter-button"
                                    class="flex items-center cursor-pointer px-4 py-3 w-full text-sm bg-primary-light text-white font-light uppercase tracking-wider">
                                    <span class="inline-block capitalize">Gifts</span>
                                    <span class="ml-auto">
                                        <span
                                            class="material-icons transform transition-transform duration-500">expand_more</span>
                                    </span>
                                </div>
                                <!-- Dropdown -->
                                <div id="gifts-dropdown"
                                    class="hidden absolute bg-white text-black w-full shadow-lg mt-2">
                                    <ul class="text-sm">
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="forhim" name="gifts" value="forhim"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="forhim" class="ml-2">For Him</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="forher" name="gifts" value="forher"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="forher" class="ml-2">For Her</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="forkids" name="gifts" value="forkids"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="forkids" class="ml-2">For Kids</label>
                                        </li>
                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                            <input type="checkbox" id="specialoccasions" name="gifts"
                                                value="specialoccasions"
                                                class="form-checkbox text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <label for="specialoccasions" class="ml-2">Special Occasions</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Web View Sort --}}
        <div class="bg-gradient-to-r from-[#F5F5DC] to-[#601042] lg:py-2 relative z-10 sm:hidden lg:block">
            <div class="container lg:pb-3">
                <div class="flex lg:flex-wrap -mx-2 lg:mb-1 overflow-auto">
                    <!-- Content can go here if needed -->
                </div>
                <div class="flex justify-end">
                    <div
                        class="sort-outer lg:col-span-2 col-span-3 lg:text-right lg:relative fixed w-full left-0 bottom-0 lg:transform-none duration-700 ease-in-out lg:z-30">
                        <div class="relative lg:inline-block text-black lg:text-left">
                            <!-- Desktop Sort Button -->
                            <div id="desktop-sort-button"
                                class="lg:flex items-center px-3.5 py-2 leading-[17px] cursor-pointer bg-white border text-[13px] max-w-full w-[320px] lg:w-[267px] border-b-0 border-white mr-4">
                                Sort by
                                <span class="ml-auto">
                                    <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor"
                                        class="duration-500">
                                        <path
                                            d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>

                            <!-- Desktop Dropdown Menu -->
                            <div id="desktop-dropdown-menu"
                                class="hidden absolute z-30 w-full bg-white border border-black">
                                <ul class="text-[13px] px-4 py-3.5">
                                    <li class="py-1.5">
                                        <label class="inline-flex items-center cursor-pointer relative pl-6">
                                            <input type="radio" name="sort" value="popularity"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <span class="ml-2">Popularity</span>
                                        </label>
                                    </li>
                                    <li class="py-1.5">
                                        <label class="inline-flex items-center cursor-pointer relative pl-6">
                                            <input type="radio" name="sort" value="newly-listed"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <span class="ml-2">Newly Listed</span>
                                        </label>
                                    </li>
                                    <li class="py-1.5">
                                        <label class="inline-flex items-center cursor-pointer relative pl-6">
                                            <input type="radio" name="sort" value="price-high-to-low"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <span class="ml-2">Price - High to Low</span>
                                        </label>
                                    </li>
                                    <li class="py-1.5">
                                        <label class="inline-flex items-center cursor-pointer relative pl-6">
                                            <input type="radio" name="sort" value="price-low-to-high"
                                                class="form-radio text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                            <span class="ml-2">Price - Low to High</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main --}}
        <div class="container mx-auto py-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Diamond Jewellery <span class="text-yellow-600">2471
                    Designs</span></h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 Start -->
                <div
                    class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-xl  bg-white transform hover:-translate-y-2 transition-transform duration-300">
                    <a href="{{ route('productdetail') }}">
                        <div class="overflow-hidden">
                            <img src="{{ asset('asset/img/new.jpg') }}" alt="Rainbow Radiance Diamond Ladies Ring"
                                class="w-full h-64 object-cover rounded-t-lg transition-transform duration-300 transform hover:scale-110">
                        </div>
                    </a>
                    <div class="p-4 bg-gradient-to-b from-gray-50 to-white">
                        <p class="text-lg font-semibold text-gray-800">₹21,481 <span
                                class="text-red-600 line-through">₹22,589</span></p>
                        <p class="text-sm text-gray-600">Rainbow Radiance Diamond Ladies Ring</p>
                    </div>
                    <button
                        class="wishlist-btn absolute top-2 right-2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-all duration-300 ease-in-out transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-red-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <!-- Card 1 End -->

                <!-- Card 2 Start -->
                <div
                    class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-xl bg-white transform hover:-translate-y-2 transition-transform duration-300">
                    <a href="{{ route('productdetail') }}">
                        <div class="overflow-hidden">
                            <img src="{{ asset('asset/img/new.jpg') }}" alt="Golden Radiance Necklace Set"
                                class="w-full h-64 object-cover rounded-t-lg transition-transform duration-300 transform hover:scale-110">
                        </div>
                    </a>
                    <div class="p-4 bg-gradient-to-b from-gray-50 to-white">
                        <p class="text-lg font-semibold text-gray-800">₹15,999 <span
                                class="text-red-600 line-through">₹18,499</span></p>
                        <p class="text-sm text-gray-600">Golden Radiance Necklace Set</p>
                    </div>
                    <button
                        class="wishlist-btn absolute top-2 right-2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition-all duration-300 ease-in-out transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-red-500"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>
                <!-- Card 2 End -->

                <!-- Add more cards here as needed -->
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            <nav class="flex justify-center">
                <ul class="flex items-center">
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-[#601042] transition duration-150 ease-in-out">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-[#601042] hover:bg-[#601042] transition duration-150 ease-in-out"
                            aria-current="page">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-[#601042] transition duration-150 ease-in-out">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-[#601042] transition duration-150 ease-in-out">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-[#601042] transition duration-150 ease-in-out">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- Bottom Navigation Bar with Sort and Filter Buttons -->
    <div class="lg:hidden fixed bottom-0 left-0 w-full z-50 bg-[#601042]">
        <div class="grid grid-flow-col auto-cols-fr text-white">
            <button id="open-sort"
                class="flex flex-col items-center justify-center py-2 hover:bg-[#4b002f] transition duration-200 cursor-pointer border-r border-white">
                <span class="material-icons text-3xl">sort</span>
                <span class="text-sm uppercase mt-1">Sort</span>
            </button>
            <button id="open-filter"
                class="flex flex-col items-center justify-center py-2 hover:bg-[#4b002f] transition duration-200 cursor-pointer">
                <span class="material-icons text-3xl">filter_list</span>
                <span class="text-sm uppercase mt-1">Filter</span>
            </button>
        </div>
    </div>

    <!--Mobile View Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden"></div>


     {{-- horizontal line --}}
     <div class="flex items-center justify-center w-screen">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>




    <!--Mobile View Sidebar (Left) -->
    <div id="sort-sidebar"
        class="fixed inset-y-0 left-0 w-full max-w-xs z-40 bg-white text-black shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
        <div class="bg-[#601042] text-white">
            <div class="flex justify-between items-center p-4">
                <h3 class="text-lg font-bold">Sort Options</h3>
                <button class="close-sidebar text-white hover:text-gray-300">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="p-4 border-t border-[#4b002f]">
                <button id="apply-sort"
                    class="w-full bg-white text-[#601042] py-2 rounded font-bold hover:bg-gray-100 transition duration-200">
                    Apply Sort
                </button>
            </div>
        </div>
        <div class="p-4 flex-grow overflow-y-auto">
            <ul class="space-y-4">
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="price_low_high"
                            class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                        Price: Low to High
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="price_high_low"
                            class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                        Price: High to Low
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="new_arrivals"
                            class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                        New Arrivals
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="best_sellers"
                            class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                        Best Sellers
                    </label>
                </li>
            </ul>
        </div>
    </div>


    <!-- Filter Sidebar (Right) -->
    <div id="filter-sidebar"
        class="fixed inset-y-0 right-0 w-full max-w-xs z-40 bg-white text-black shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
        <div class="bg-[#601042] text-white">
            <div class="flex justify-between items-center p-4">
                <h3 class="text-lg font-bold">Filter Options</h3>
                <button class="close-sidebar text-white hover:text-gray-300">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="p-4 border-t border-[#4b002f]">
                <button id="apply-filter"
                    class="w-full bg-white text-[#601042] py-2 rounded font-bold hover:bg-gray-100 transition duration-200">
                    Apply Filters
                </button>
            </div>
        </div>
        <div class="p-4 flex-grow overflow-y-auto mb-16">
            <ul class="space-y-4">
                <li>
                    <h4 class="font-bold">Category</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="rings"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Rings
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="necklaces"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Necklaces
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="bracelets"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Bracelets
                            </label>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4 class="font-bold">Metal Type</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="gold"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Gold
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="silver"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Silver
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="platinum"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Platinum
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="mixed"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Mixed Metals
                            </label>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4 class="font-bold">Price Range</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="radio" name="price" value="under_500"
                                    class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Under $500
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="radio" name="price" value="500_1000"
                                    class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                $500 - $1000
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="radio" name="price" value="1000_5000"
                                    class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                $1000 - $5000
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="radio" name="price" value="above5000"
                                    class="form-radio mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Above $5000
                            </label>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4 class="font-bold">Shop For</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="shopfor" value="men"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Men
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="shopfor" value="women"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Women
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="shopfor" value="children"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Children
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="shopfor" value="unisex"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Unisex
                            </label>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4 class="font-bold">Gifts</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="gifts" value="forhim"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                For Him
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="gifts" value="forher"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                For Her
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="gifts" value="forkids"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                For Kids
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="gifts" value="specialoccasions"
                                    class="form-checkbox mr-2 text-[#601042] focus:outline-none focus:ring-2 focus:ring-[#601042]">
                                Special Occasions
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script>
        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn').forEach(button => {
            button.addEventListener('click', function() {
                const svg = this.querySelector('svg');
                svg.classList.toggle('text-gray-400');
                svg.classList.toggle('text-red-500');
                svg.classList.toggle('fill-current');
            });
        });

        //Mobile
        document.addEventListener('DOMContentLoaded', () => {
            // Toggle Price Filter Dropdown
            const priceButton = document.getElementById('price-filter-button');
            const priceDropdown = document.getElementById('price-dropdown');

            priceButton.addEventListener('click', () => {
                priceDropdown.classList.toggle('hidden');
            });

            // Toggle Metal Type Filter Dropdown
            const metalButton = document.getElementById('metal-filter-button');
            const metalDropdown = document.getElementById('metal-dropdown');

            metalButton.addEventListener('click', () => {
                metalDropdown.classList.toggle('hidden');
            });

            // Toggle Shop For Filter Dropdown
            const shopForButton = document.getElementById('shopfor-filter-button');
            const shopForDropdown = document.getElementById('shopfor-dropdown');

            shopForButton.addEventListener('click', () => {
                shopForDropdown.classList.toggle('hidden');
            });

            // Toggle Gifts Filter Dropdown
            const giftsButton = document.getElementById('gifts-filter-button');
            const giftsDropdown = document.getElementById('gifts-dropdown');

            giftsButton.addEventListener('click', () => {
                giftsDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!priceButton.contains(e.target) && !priceDropdown.contains(e.target)) {
                    priceDropdown.classList.add('hidden');
                }
                if (!metalButton.contains(e.target) && !metalDropdown.contains(e.target)) {
                    metalDropdown.classList.add('hidden');
                }
                if (!shopForButton.contains(e.target) && !shopForDropdown.contains(e.target)) {
                    shopForDropdown.classList.add('hidden');
                }
                if (!giftsButton.contains(e.target) && !giftsDropdown.contains(e.target)) {
                    giftsDropdown.classList.add('hidden');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const sortButton = document.getElementById('desktop-sort-button');
            const dropdownMenu = document.getElementById('desktop-dropdown-menu');

            sortButton.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            // Optional: Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!sortButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const sortSidebar = document.getElementById('sort-sidebar');
            const filterSidebar = document.getElementById('filter-sidebar');
            const overlay = document.getElementById('overlay');

            function openSidebar(sidebar) {
                sidebar.classList.remove(sidebar === sortSidebar ? '-translate-x-full' : 'translate-x-full');
                overlay.classList.remove('hidden');
            }

            function closeSidebars() {
                sortSidebar.classList.add('-translate-x-full');
                filterSidebar.classList.add('translate-x-full');
                overlay.classList.add('hidden');
            }

            document.getElementById('open-sort').addEventListener('click', () => openSidebar(sortSidebar));
            document.getElementById('open-filter').addEventListener('click', () => openSidebar(filterSidebar));

            document.querySelectorAll('.close-sidebar').forEach(button => {
                button.addEventListener('click', closeSidebars);
            });

            overlay.addEventListener('click', closeSidebars);

            // Apply Sort
            document.getElementById('apply-sort').addEventListener('click', function() {
                const selectedSort = document.querySelector('input[name="sort"]:checked');
                if (selectedSort) {
                    console.log('Applying sort:', selectedSort.value);
                    // Here you would typically update your product listing based on the selected sort
                    closeSidebars();
                } else {
                    console.log('No sort option selected');
                }
            });

            // Apply Filters
            document.getElementById('apply-filter').addEventListener('click', function() {
                const selectedCategories = Array.from(document.querySelectorAll(
                    'input[name="category"]:checked')).map(input => input.value);
                const selectedMetals = Array.from(document.querySelectorAll('input[name="metal"]:checked'))
                    .map(input => input.value);
                const selectedPrices = Array.from(document.querySelectorAll('input[name="price"]:checked'))
                    .map(input => input.value);

                console.log('Applying filters:', {
                    categories: selectedCategories,
                    metals: selectedMetals,
                    prices: selectedPrices
                });
                // Here you would typically update your product listing based on the selected filters
                closeSidebars();
            });
        });
    </script>
@endsection
