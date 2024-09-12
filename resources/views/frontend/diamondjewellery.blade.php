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

    {{-- <!-- Bottom Navigation Bar with Sort and Filter Buttons -->
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

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden"></div>

    <!-- Sort Sidebar (Left) -->
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
                        <input type="radio" name="sort" value="price_low_high" class="mr-2">
                        Price: Low to High
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="price_high_low" class="mr-2">
                        Price: High to Low
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="new_arrivals" class="mr-2">
                        New Arrivals
                    </label>
                </li>
                <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                    <label class="flex items-center">
                        <input type="radio" name="sort" value="best_sellers" class="mr-2">
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
        <div class="p-4 flex-grow overflow-y-auto">
            <ul class="space-y-4">
                <li>
                    <h4 class="font-bold">Category</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="rings" class="mr-2">
                                Rings
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="necklaces" class="mr-2">
                                Necklaces
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="category" value="bracelets" class="mr-2">
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
                                <input type="checkbox" name="metal" value="gold" class="mr-2">
                                Gold
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="silver" class="mr-2">
                                Silver
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="metal" value="platinum" class="mr-2">
                                Platinum
                            </label>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4 class="font-bold">Price Range</h4>
                    <ul class="space-y-2">
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="price" value="under_500" class="mr-2">
                                Under $500
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="price" value="500_1000" class="mr-2">
                                $500 - $1000
                            </label>
                        </li>
                        <li class="cursor-pointer hover:bg-gray-200 p-2 rounded">
                            <label class="flex items-center">
                                <input type="checkbox" name="price" value="above_1000" class="mr-2">
                                Above $1000
                            </label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <script>
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
    </script> --}}




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
