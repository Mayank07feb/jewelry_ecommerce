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

        {{-- <!-- Filters and Sort -->
        <div class="shadow-md bg-gradient-to-r bg-[#601042] p-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Filter Dropdowns -->
                <div class="flex flex-wrap gap-4 mb-4 md:mb-0">
                    <!-- Filter Button -->
                    <div class="relative">
                        <button id="filterDropdown"
                            class="px-4 py-2 bg-white rounded-md text-sm font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-150 ease-in-out flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="filterMenu"
                            class="hidden absolute z-10 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="filterDropdown">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Price Range</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Material</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Style</a>
                            </div>
                        </div>
                    </div>

                    <!-- Category Button -->
                    <div class="relative">
                        <button id="categoryDropdown"
                            class="px-4 py-2 bg-white rounded-md text-sm font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-150 ease-in-out flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>
                            Category
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="categoryMenu"
                            class="hidden absolute z-10 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1" role="menu" aria-orientation="vertical"
                                aria-labelledby="categoryDropdown">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Rings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Necklaces</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Earrings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Bracelets</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sorting Options -->
                <div class="flex flex-col gap-4 md:flex-row md:gap-6">
                    <!-- Metal Type Dropdown -->
                    <div class="relative w-full md:w-auto">
                        <select id="metalTypeDropdown"
                            class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <option>Metal Type</option>
                            <option>Yellow Gold</option>
                            <option>Rose Gold</option>
                            <option>White Gold</option>
                            <option>Silver (White Rhodium Polish)</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Shop For Dropdown -->
                    <div class="relative w-full md:w-auto">
                        <select id="shopForDropdown"
                            class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <option>Shop For</option>
                            <option>Women</option>
                            <option>Men</option>
                            <option>Kids</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sort By Dropdown -->
        <div class="bg-[#601042] p-4 mx-auto">
            <div class="relative w-56 ml-auto">
                <select id="sortDropdown"
                    class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                    <option>Sort by</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Popularity</option>
                    <option>New Arrivals</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div> --}}

        {{-- Filter --}}
        <div class="bg-[#601042] w-full h-auto z-50">
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

        {{-- Sort --}}
        <div class="bg-gradient-to-r from-[#F5F5DC] to-[#601042] lg:py-2 relative z-10">
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






    <script>
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
        // document.getElementById('filterDropdown').addEventListener('click', function() {
        //     document.getElementById('filterMenu').classList.toggle('hidden');
        // });

        // document.getElementById('categoryDropdown').addEventListener('click', function() {
        //     document.getElementById('categoryMenu').classList.toggle('hidden');
        // });
    </script>
@endsection
