@extends('components.main')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 bg-gray-50">
        <!-- Breadcrumb -->
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="text-gray-600 hover:text-blue-600 inline-flex items-center">
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

        <!-- Header -->
        <header class="mt-8 mb-12 border-b border-gray-200 pb-4">
            <h1 class="text-3xl font-bold text-gray-900">Diamond Jewellery</h1>
            <p class="mt-2 text-sm text-gray-600">Discover our exquisite collection of 2471 unique designs</p>
        </header>

        <!-- Filters and Sort -->
        <div class="shadow-md rounded-lg bg-gradient-to-r from-[#601042] via-[#8c5d5d] to-[#f5f5f5] p-4 mb-8">
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

                    <!-- Sort By Dropdown -->
                    <div class="relative w-full md:w-auto">
                        <select id="sortDropdown"
                            class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
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


        <div class="container mx-auto py-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Diamond Jewellery <span class="text-yellow-600">2471
                    Designs</span></h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 Start -->
                <div
                    class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 bg-white transform hover:-translate-y-2 transition-transform duration-300">
                    <a href="{{route('productdetail')}}">
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
                    class="relative border border-gray-200 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 bg-white transform hover:-translate-y-2 transition-transform duration-300">
                    <div class="overflow-hidden">
                        <img src="{{ asset('asset/img/new.jpg') }}" alt="Golden Radiance Necklace Set"
                            class="w-full h-64 object-cover rounded-t-lg transition-transform duration-300 transform hover:scale-110">
                    </div>
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
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out"
                            aria-current="page">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-blue-600 transition duration-150 ease-in-out">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        // Toggle filter dropdown
        const filterDropdown = document.getElementById('filterDropdown');
        const filterMenu = document.getElementById('filterMenu');
        filterDropdown.addEventListener('click', () => {
            filterMenu.classList.toggle('hidden');
        });

        // Toggle category dropdown
        const categoryDropdown = document.getElementById('categoryDropdown');
        const categoryMenu = document.getElementById('categoryMenu');
        categoryDropdown.addEventListener('click', () => {
            categoryMenu.classList.toggle('hidden');
        });

        // Close dropdowns when clicking outside
        window.addEventListener('click', (e) => {
            if (!filterDropdown.contains(e.target)) {
                filterMenu.classList.add('hidden');
            }
            if (!categoryDropdown.contains(e.target)) {
                categoryMenu.classList.add('hidden');
            }
        });
        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn').forEach(button => {
            button.addEventListener('click', function() {
                const svg = this.querySelector('svg');
                svg.classList.toggle('text-gray-400');
                svg.classList.toggle('text-red-500');
                svg.classList.toggle('fill-current');
            });
        });

        // You can add more interactivity here, such as handling filter and sort functionality
    </script>
@endsection
