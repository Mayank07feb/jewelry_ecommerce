<style>
    .popup-content {
        position: absolute;
        top: 40px;
        right: 0;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Corrected shadow property */
        padding: 1rem;
        border: 1px solid #e2e8f0;
        border-radius: 0.375rem;
        width: 18rem;
        z-index: 50;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .group:hover .popup-content {
        opacity: 1;
        visibility: visible;
    }

    .popup-content:hover {
        opacity: 1;
        visibility: visible;
    }

    /* Wrapper and Account Hover Effect */
    .account-wrapper:hover .account-details {
        display: block;
    }

    .account-details {
        display: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease, transform 0.3s ease;
        opacity: 0;
        transform: translateY(10px);
    }

    /* On hover, show account details with a subtle animation */
    .account-wrapper:hover .account-details {
        display: block;
        /* Ensure display is block to make it visible */
        opacity: 1;
        transform: translateY(0);
    }

    /* Button hover effects */
    button {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    button:hover {
        cursor: pointer;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(0);
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(100%);
        }
    }

    .slide-in {
        animation: slideIn 0.3s forwards;
    }

    .slide-out {
        animation: slideOut 0.3s forwards;
    }
</style>
<div class="bg-white">
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-40 hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25 transition-opacity duration-300" aria-hidden="true"></div>
        <div
            class="fixed inset-y-0 right-0 z-40 w-full max-w-xs bg-[#f5f5f5] text-black shadow-xl flex flex-col transform transition-transform duration-300 ease-in-out">
            <div class="flex flex-wrap justify-between items-center bg-[#601042] px-4 py-3 border-b border-[#d8c9d8]">
                <div class="flex items-center space-x-3">
                    <a href="/login"
                        class="tracking-normal capitalize text-base px-4 py-2 bg-[#d1b514] hover:bg-[#c3a827] text-white rounded transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-md">Log
                        in</a>
                    <a href="/signup"
                        class="tracking-normal capitalize text-base px-4 py-2 bg-[#0077b6] hover:bg-[#005f87] text-white rounded transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-md">Sign
                        Up</a>
                </div>
                <button id="close-mobile-menu" type="button"
                    class="text-white hover:text-gray-300 p-2 transition-colors duration-300">
                    <span class="sr-only">Close menu</span>
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto p-4">
                <div class="space-y-6">
                    <a href="{{ route('alljewellery') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">All
                        Jewellery</a>
                    <a href="{{ route('diamondjewellery') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">Diamond</a>
                    <a href="{{ route('gold') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">Gold</a>
                    <a href="{{ route('silver') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">Silver</a>
                    <a href="{{ route('collection') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">Collections</a>
                    <a href="{{ route('bullions') }}"
                        class="block text-lg font-medium text-[#601042] hover:bg-[#d4af37] hover:text-white rounded px-2 py-1 transition-all duration-300 ease-in-out transform hover:translate-x-2 hover:shadow-md">Bullions</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="relative bg-white shadow-sm">
        <!-- Promo Banner -->
        <div class="bg-[#601042] text-white text-sm hidden lg:flex">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="#"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span class="hidden sm:inline">WhatsApp</span>
                    </a>
                    <div class="border-l border-gray-400 h-4 mx-2"></div>
                    <a href="{{ route('storelocator') }}"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fas fa-store text-xl"></i>
                        <span class="hidden sm:inline">Store Locator</span>
                    </a>
                    <div class="border-l border-gray-400 h-4 mx-2"></div>
                    <a href="{{ route('franchise') }}"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fas fa-heart text-xl"></i>
                        <span class="hidden sm:inline">Giritra Franchise</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4 p-2">
                    <!-- Link with icon -->
                    <div class="relative group">
                        <a href="#"
                            class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                            <i class="fas fa-balance-scale text-xl text-white"></i>
                            <span class="hidden sm:inline text-white">Metal Rates</span>
                        </a>

                        <!-- Dropdown Container -->
                        <div
                            class="dropdown-content absolute right-0 w-72 mt-2 bg-white border border-gray-300 rounded-lg shadow-lg transition-all duration-300 ease-in-out z-50 hidden group-hover:block">
                            <h1 class="text-3xl font-light text-gray-900 text-center my-4">Today's Gold Rates</h1>
                            <!-- Horizontal Line with Logo -->
                            <div class="flex items-center justify-center w-full mx-auto">
                                <div class="flex-grow h-px bg-[#9d6e2a]"></div>
                                <div class="mx-4">
                                    <img src="{{ asset('asset/img/logo.png') }}" alt="Site Logo" class="h-10 w-10">
                                </div>
                                <div class="flex-grow h-px bg-[#9d6e2a]"></div>
                            </div>

                            <!-- Grid for Silver and Rates -->
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Silver side -->
                                <div class="flex flex-col space-y-2">
                                    <div class="text-center font-medium text-gray-800">Silver</div>
                                    <div class="text-center font-medium text-gray-800">14KT</div>
                                    <div class="text-center font-medium text-gray-800">24KT</div>
                                    <div class="text-center font-medium text-gray-800">22KT</div>
                                    <div class="text-center font-medium text-gray-800">18KT</div>
                                    <div class="text-center font-medium text-gray-800">22KT</div>
                                    <div class="text-center font-medium text-gray-800">18KT</div>
                                </div>
                                <!-- Rates side -->
                                <div class="flex flex-col space-y-2">
                                    <div class="text-center font-medium text-gray-800">85</div>
                                    <div class="text-center font-medium text-gray-800">4,462</div>
                                    <div class="text-center font-medium text-gray-800">17,212</div>
                                    <div class="text-center font-medium text-gray-800">76,676</div>
                                    <div class="text-center font-medium text-gray-800">15,645</div>
                                    <div class="text-center font-medium text-gray-800">16,676</div>
                                    <div class="text-center font-medium text-gray-800">15,645</div>
                                </div>
                            </div>
                            <div class="hidden lg:block ">
                                <p class="text-gray-800 pt-2 pb-1 text-center text-md font-light">Applicable for online
                                    purchase only</p>
                            </div>
                            {{--  --}}
                            <div class="bg-[#9d6e2a] my-2 w-full h-px"></div>

                            <!-- Update Information -->
                            <div class="px-4 py-2 text-start text-gray-600">
                                <label class="font-light text-md">Updated on:</label>
                                <div class="font-medium">12/09/2024 10:33 am</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Navigation -->
        <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center">
                    <!-- Mobile menu button -->
                    <button id="open-mobile-menu" type="button"
                        class="relative rounded-md p-2 text-gray-400 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="{{ route('home') }}">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto" src="{{ asset('asset/img/logo.png') }}" alt="Company Logo">
                        </a>

                    </div>

                    <!-- Desktop Navigation Menu -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <div class="relative group">
                                <a href="{{ route('alljewellery') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                    All Jewellery
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-screen max-w-screen-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                                        <!-- Categories Section -->
                                        <div class="space-y-6">
                                            <p class="font-medium text-gray-900 mb-4">Categories</p>
                                            <ul class="space-y-4">
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset/img/logo.png') }}" alt="Necklaces"
                                                            class="h-6 w-6 mr-3">
                                                        Necklaces
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Rings"
                                                            class="h-6 w-6 mr-3">
                                                        Rings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Bracelets"
                                                            class="h-6 w-6 mr-3">
                                                        Bracelets
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Earrings"
                                                            class="h-6 w-6 mr-3">
                                                        Earrings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="{{ asset('asset\img\nav-img') }}" alt="Watches"
                                                            class="h-6 w-6 mr-3">
                                                        Watches
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Featured Items Section -->
                                        <div
                                            class="col-span-2 md:col-span-1 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4 ">
                                            <!-- Featured Item 1 -->
                                            <div class="relative overflow-hidden rounded-lg bg-gray-100 group">
                                                <img src="{{ asset('asset/img/0.jpg') }}" alt="New Arrivals"
                                                    class="w-full h-full object-cover object-center group-hover:opacity-80">
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity z-10">
                                                    <div>
                                                        <p class="text-lg font-medium">New Arrivals</p>
                                                        <a href="#"
                                                            class="mt-2 inline-block bg-white text-black py-2 px-4 rounded-full text-sm">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Featured Item 2 -->
                                            <div class="relative overflow-hidden rounded-lg bg-gray-100 group">
                                                <img src="{{ asset('asset/img/latest.jpg') }}" alt="Popular Items"
                                                    class="w-full h-full object-cover object-center group-hover:opacity-80">
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity z-10">
                                                    <div>
                                                        <p class="text-lg font-medium">Popular Items</p>
                                                        <a href="#"
                                                            class="mt-2 inline-block bg-white text-black py-2 px-4 rounded-full text-sm">Shop
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add more featured items as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="relative group">
                                <a href="{{ route('diamondjewellery') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                    Diamond
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="menu-button">
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Necklaces"
                                                class="h-8 w-8 mr-2">
                                            Necklaces
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Rings"
                                                class="h-8 w-8 mr-2">
                                            Rings
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Bracelets"
                                                class="h-8 w-8 mr-2">
                                            Bracelets
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Earrings"
                                                class="h-8 w-8 mr-2">
                                            Earrings
                                        </a>
                                        <!-- Additional items -->
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Pendants"
                                                class="h-8 w-8 mr-2">
                                            Pendants
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Ear Cuffs"
                                                class="h-8 w-8 mr-2">
                                            Ear Cuffs
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Diamond Sets"
                                                class="h-8 w-8 mr-2">
                                            Diamond Sets
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="relative group">
                                <a href="{{ route('gold') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                    Gold
                                    <span
                                        class="absolute bottom-0 left-0 w-full h-0.5 bg-[#d4af37] transition-transform duration-300 transform scale-x-0 group-hover:scale-x-100"></span>
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="menu-button">
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Necklaces"
                                                class="h-8 w-8 mr-2">
                                            Gold Necklaces
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Rings"
                                                class="h-8 w-8 mr-2">
                                            Gold Rings
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Bracelets"
                                                class="h-8 w-8 mr-2">
                                            Gold Bracelets
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Earrings"
                                                class="h-8 w-8 mr-2">
                                            Gold Earrings
                                        </a>
                                        <!-- Additional items -->
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Pendants"
                                                class="h-8 w-8 mr-2">
                                            Gold Pendants
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Ear Cuffs"
                                                class="h-8 w-8 mr-2">
                                            Gold Ear Cuffs
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/logo.png') }}" alt="Gold Sets"
                                                class="h-8 w-8 mr-2">
                                            Gold Sets
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <a href="{{ route('silver') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Silver
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('collection') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Collections
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('bullions') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Bullions
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                            <a href="{{ route('contact') }}"
                                class="relative flex items-center text-sm font-medium text-gray-700 hover:text-[#d4af37] group">
                                Contact
                                <span
                                    class="absolute bottom-5 left-0 w-full h-0.5 bg-[#d4af37] transform scale-x-0 transition-transform duration-300 group-hover:scale-x-100"></span>
                            </a>

                        </div>
                    </div>
                    {{-- seachbar --}}
                    <div class="relative">
                        <!-- Search Icon for Mobile -->
                        {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-4 lg:hidden">
                            <i class="ri-search-2-line"></i>
                        </div> --}}
                        <!-- Search Input for Desktop -->
                        <form class="lg:flex lg:w-full md:w-full w-1/2 ml-4 border rounded-lg">
                            <div class="flex items-center w-full">
                                <input type="text"
                                    class="w-full px-4 py-2 border-none focus:outline-none focus:ring-2 focus:ring-[#601042]"
                                    placeholder="Search..." />
                                <button type="submit" class="px-3">
                                    <i class="ri-search-2-line text-gray-500"></i>
                                </button>
                            </div>
                        </form>


                    </div>

                    <!-- User Actions and Cart -->
                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:items-center lg:space-x-6">
                            <div class="relative inline-block group">
                                <!-- Account Link -->
                                <a href="{{ route('profile') }}"
                                    class="text-sm font-medium text-gray-700 hover:text-[#d4af37] flex items-center space-x-2">
                                    <i class="fas fa-user text-lg"></i>
                                    <span>Account</span>
                                </a>

                                <!-- Hidden content to show on hover -->
                                <div class="popup-content">
                                    <h3 class="font-semibold text-lg text-gray-800 border-b pb-2">Your Account</h3>
                                    <p class="text-gray-500 text-sm mt-2">Track your orders, manage payment, edit
                                        profile, and much more...</p>
                                    <div class="flex space-x-4 mt-4">
                                        <!-- Log In Button -->
                                        <a href="{{ route('login') }}"
                                            class="border border-[#d4af37] text-[#d4af37] font-medium px-4 py-2 rounded hover:bg-[#d4af37] hover:text-white transition duration-200 ease-in-out">
                                            Log In
                                        </a>
                                        <!-- Sign Up Button -->
                                        <a href="{{ route('signup') }}"
                                            class="bg-[#601042] text-white font-medium px-4 py-2 rounded hover:bg-[#9c0864] transition duration-200 ease-in-out">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <a href="{{ route('wishlist') }}"
                                class="text-sm font-medium text-gray-700 hover:text-[#d4af37]">
                                <i class="fas fa-heart"></i> Wishlist
                            </a>
                            <a href="{{ route('cart') }}"
                                class="text-sm font-medium text-gray-700 hover:text-[#d4af37]">
                                <i class="fas fa-shopping-cart"></i> Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>


<div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white shadow-lg z-50">
    <div class="flex justify-between items-center p-4">
        <!-- Home Button -->
        <a href="/" class="flex flex-col items-center text-[#601042] hover:text-[#9d6e2a]">
            <span class="material-icons text-3xl">home</span>
            <span class="text-xs">Home</span>
        </a>

        <!-- Category Button -->
        <a href="/categories" class="flex flex-col items-center text-[#601042] hover:text-[#9d6e2a]">
            <span class="material-icons text-3xl">category</span>
            <span class="text-xs">Category</span>
        </a>

        <!-- Account Button -->
        <a href="/login" class="flex flex-col items-center text-[#601042] hover:text-[#9d6e2a]">
            <span class="material-icons text-3xl">account_circle</span>
            <span class="text-xs">Account</span>
        </a>

        <!-- Wishlist Button -->
        <a href="/dashboard/wishlist" class="flex flex-col items-center text-[#601042] hover:text-[#9d6e2a]">
            <span class="material-icons text-3xl">favorite_border</span>
            <span class="text-xs">Wishlist</span>
        </a>

        <!-- Cart Button -->
        <a href="/cart" class="flex flex-col items-center text-[#601042] hover:text-[#9d6e2a]">
            <span class="material-icons text-3xl">shopping_cart</span>
            <span class="text-xs">Cart</span>
        </a>
    </div>
</div>



<script>
    const mobileMenu = document.getElementById('mobile-menu');
    const openMobileMenuBtn = document.getElementById('open-mobile-menu');
    const closeMobileMenuBtn = document.getElementById('close-mobile-menu');
    const mobileMenuContent = mobileMenu.querySelector('div:nth-child(2)');

    function openMobileMenu() {
        mobileMenu.classList.remove('hidden');
        mobileMenuContent.classList.add('slide-in');
    }

    function closeMobileMenu() {
        mobileMenuContent.classList.remove('slide-in');
        mobileMenuContent.classList.add('slide-out');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
            mobileMenuContent.classList.remove('slide-out');
        }, 300);
    }

    openMobileMenuBtn.addEventListener('click', openMobileMenu);
    closeMobileMenuBtn.addEventListener('click', closeMobileMenu);
</script>
