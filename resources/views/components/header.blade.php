<style>
    /* Wrapper and Account Hover Effect */
    .account-wrapper:hover .account-details {
        display: block;
    }

    .account-details {
        display: none;
    }

    /* Styling for the account details box */
    .account-details {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease, transform 0.3s ease;
        opacity: 0;
        transform: translateY(10px);
    }

    /* On hover, show account details with a subtle animation */
    .account-wrapper:hover .account-details {
        opacity: 1;
        transform: translateY(0);
    }

    /* Button hover effects */
    button {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Custom styles for hover states */
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
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 z-40 w-full max-w-xs bg-[#f5f5f5] text-black shadow-xl flex flex-col">
            <div class="flex flex-wrap justify-between items-center bg-[#d8c9d8] px-4 py-2.5 border-b border-gray-300">
                <div class="flex items-center space-x-3">
                    <a href="/login"
                        class="tracking-normal capitalize text-base px-4 py-2 bg-[#d1b514] hover:bg-[#005f87] text-white rounded">Log
                        in</a>
                    <a href="/signup"
                        class="tracking-normal capitalize text-base px-4 py-2 bg-[#0077b6] hover:bg-[#005f87] text-white rounded">Sign
                        Up</a>
                </div>
                <button id="close-mobile-menu" type="button" class="text-black hover:text-gray-600 p-2">
                    <span class="sr-only">Close menu</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor">
                        <path
                            d="M1.38461 18L0 16.6154L7.61538 9L0 1.38461L1.38461 0L9 7.61538L16.6154 0L18 1.38461L10.3846 9L18 16.6154L16.6154 18L9 10.3846L1.38461 18Z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 overflow-y-auto p-4">
                <div class="space-y-6">
                    <a href="{{ route('alljewellery') }}" class="block text-lg font-medium hover:text-gray-600">All
                        Jewellery</a>
                    <a href="{{ route('diamondjewellery') }}"
                        class="block text-lg font-medium hover:text-gray-600">Diamond</a>
                    <a href="#" class="block text-lg font-medium hover:text-gray-600">Gold</a>
                    <a href="#" class="block text-lg font-medium hover:text-gray-600">Silver</a>
                    <a href="#" class="block text-lg font-medium hover:text-gray-600">Collections</a>
                    <a href="#" class="block text-lg font-medium hover:text-gray-600">Bullions</a>
                </div>
            </div>
            <div class="border-t border-gray-300 p-4 space-y-4">
                <a href="{{ route('profile') }}" class="flex items-center text-lg font-medium hover:text-gray-600">
                    <i class="fas fa-user mr-3"></i> Account
                </a>
                <a href="{{ route('wishlist') }}}" class="flex items-center text-lg font-medium hover:text-gray-600">
                    <i class="fas fa-heart mr-3"></i> Wishlist
                </a>
                <a href="{{ route('cart') }}" class="flex items-center text-lg font-medium hover:text-gray-600">
                    <i class="fas fa-shopping-cart mr-3"></i> Cart
                </a>
            </div>
        </div>
    </div>





    <!-- Header -->
    <header class="relative bg-white shadow-sm">
        <!-- Promo Banner -->
        <div class="bg-[#601042] text-white text-sm py-2 hidden lg:flex">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="#"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span class="hidden sm:inline">WhatsApp</span>
                    </a>
                    <div class="border-l border-gray-400 h-4 mx-2"></div>
                    <a href="#"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fas fa-store text-xl"></i>
                        <span class="hidden sm:inline">Store Locator</span>
                    </a>
                    <div class="border-l border-gray-400 h-4 mx-2"></div>
                    <a href="#"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fas fa-heart text-xl"></i>
                        <span class="hidden sm:inline">Giritra Franchise</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#"
                        class="flex items-center space-x-2 hover:opacity-80 transition-opacity duration-300">
                        <i class="fas fa-balance-scale text-xl"></i>
                        <span class="hidden sm:inline">Metal Rates</span>
                    </a>
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
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
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
                        <!-- Image Search Bar -->
                        {{-- <div class="relative ml-4 w-full max-w-lg">
                            <form class="flex items-center" action="#" method="GET">
                                <label for="search" class="sr-only">Search</label>
                                <input id="search" name="search"
                                    class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Search products" type="search">
                                <button type="submit"
                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.896 3.32l4.186 4.186a1 1 0 01-1.414 1.414l-4.186-4.186A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div> --}}
                    </div>

                    <!-- Desktop Navigation Menu -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <div class="relative group">
                                <a href="{{ route('alljewellery') }}"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800 group">
                                    All Jewellery
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-screen max-w-screen-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-20">
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
                                                        <img src="path-to-your-image/rings.jpg" alt="Rings"
                                                            class="h-6 w-6 mr-3">
                                                        Rings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="path-to-your-image/bracelets.jpg" alt="Bracelets"
                                                            class="h-6 w-6 mr-3">
                                                        Bracelets
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="path-to-your-image/earrings.jpg" alt="Earrings"
                                                            class="h-6 w-6 mr-3">
                                                        Earrings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-gray-700 hover:text-gray-900">
                                                        <img src="path-to-your-image/watches.jpg" alt="Watches"
                                                            class="h-6 w-6 mr-3">
                                                        Watches
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Featured Items Section -->
                                        <div
                                            class="col-span-2 md:col-span-1 lg:col-span-3 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <!-- Featured Item 1 -->
                                            <div class="relative overflow-hidden rounded-lg bg-gray-100 group">
                                                <img src="{{ asset('asset/img/0.jpg') }}" alt="New Arrivals"
                                                    class="w-full h-full object-cover object-center group-hover:opacity-80">
                                                <div
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity">
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
                                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-center p-4 group-hover:opacity-100 opacity-0 transition-opacity">
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
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800 group">
                                    Diamond
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-64 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-20">
                                    <div class="py-1" role="menu" aria-orientation="vertical"
                                        aria-labelledby="menu-button">
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/necklaces.jpg') }}" alt="Necklaces"
                                                class="h-8 w-8 mr-2">
                                            Necklaces
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/rings.jpg') }}" alt="Rings"
                                                class="h-8 w-8 mr-2">
                                            Rings
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/bracelets.jpg') }}" alt="Bracelets"
                                                class="h-8 w-8 mr-2">
                                            Bracelets
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/earrings.jpg') }}" alt="Earrings"
                                                class="h-8 w-8 mr-2">
                                            Earrings
                                        </a>
                                        <!-- Additional items -->
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/pendants.jpg') }}" alt="Pendants"
                                                class="h-8 w-8 mr-2">
                                            Pendants
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/ear-cuffs.jpg') }}" alt="Ear Cuffs"
                                                class="h-8 w-8 mr-2">
                                            Ear Cuffs
                                        </a>
                                        <a href="#"
                                            class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <img src="{{ asset('asset/img/diamond-sets.jpg') }}" alt="Diamond Sets"
                                                class="h-8 w-8 mr-2">
                                            Diamond Sets
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="relative group">
                                <a href="#"
                                    class="relative z-10 flex items-center border-b-2 border-transparent pt-px mt-5 text-sm font-medium text-gray-700 hover:border-gray-300 hover:text-gray-800">
                                    Gold
                                </a>
                                <!-- Dropdown Menu -->
                                <div
                                    class="absolute left-0 mt-2 w-80 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block z-20">
                                    <div class="py-2" role="menu" aria-orientation="vertical"
                                        aria-labelledby="menu-button">
                                        <!-- Category Header -->
                                        <div
                                            class="px-4 py-2 text-lg font-semibold border-b border-gray-200 bg-gray-50">
                                            Gold Jewelry
                                        </div>
                                        <!-- Category Items -->
                                        <div class="py-1">
                                            <a href="#"
                                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                <img src="{{ asset('asset/img/gold-necklaces.jpg') }}"
                                                    alt="Gold Necklaces"
                                                    class="h-12 w-12 mr-3 rounded-full border border-gray-200">
                                                <div class="flex-1">
                                                    <p class="font-medium">Gold Necklaces</p>
                                                    <p class="text-gray-500">Starting at $200</p>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                <img src="{{ asset('asset/img/gold-rings.jpg') }}" alt="Gold Rings"
                                                    class="h-12 w-12 mr-3 rounded-full border border-gray-200">
                                                <div class="flex-1">
                                                    <p class="font-medium">Gold Rings</p>
                                                    <p class="text-gray-500">Starting at $150</p>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                <img src="{{ asset('asset/img/gold-bracelets.jpg') }}"
                                                    alt="Gold Bracelets"
                                                    class="h-12 w-12 mr-3 rounded-full border border-gray-200">
                                                <div class="flex-1">
                                                    <p class="font-medium">Gold Bracelets</p>
                                                    <p class="text-gray-500">Starting at $180</p>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                <img src="{{ asset('asset/img/gold-earrings.jpg') }}"
                                                    alt="Gold Earrings"
                                                    class="h-12 w-12 mr-3 rounded-full border border-gray-200">
                                                <div class="flex-1">
                                                    <p class="font-medium">Gold Earrings</p>
                                                    <p class="text-gray-500">Starting at $120</p>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                <img src="{{ asset('asset/img/gold-watches.jpg') }}"
                                                    alt="Gold Watches"
                                                    class="h-12 w-12 mr-3 rounded-full border border-gray-200">
                                                <div class="flex-1">
                                                    <p class="font-medium">Gold Watches</p>
                                                    <p class="text-gray-500">Starting at $350</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Silver</a>
                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Collections</a>
                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Bullions</a>
                            <a href="{{ route('contact') }}"
                                class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Contact</a>
                        </div>
                    </div>

                    <!-- User Actions and Cart -->
                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:items-center lg:space-x-6">
                            <div class="account-wrapper relative inline-block">
                                <!-- Account Link -->
                                <a href="{{ route('profile') }}"
                                    class="text-sm font-medium text-gray-700 hover:text-[#d4af37] flex items-center space-x-2">
                                    <i class="fas fa-user text-lg"></i>
                                    <span>Account</span>
                                </a>

                                <!-- Hidden content to show on hover -->
                                <div
                                    class="account-details hidden absolute top-10 right-0 bg-white shadow-xl p-6 border border-gray-200 rounded-lg w-72 z-50">
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
                                            class="bg-[#0077b6] text-white font-medium px-4 py-2 rounded hover:bg-[#005f87] transition duration-200 ease-in-out">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <a href="{{ route('wishlist') }}"
                                class="text-sm font-medium text-gray-700 hover:text-gray-800">
                                <i class="fas fa-heart"></i> Wishlist
                            </a>
                            <a href="{{ route('cart') }}"
                                class="text-sm font-medium text-gray-700 hover:text-gray-800">
                                <i class="fas fa-shopping-cart"></i> Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
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
