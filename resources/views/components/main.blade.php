<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giritra Jewellers</title>

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Drift CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/drift-zoom@1.0.0/dist/drift-basic.min.css">

    <!-- If using Vite, include the Vite directive -->
    @vite('resources/css/app.css')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Glide.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

    <!-- Glide.js CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css" rel="stylesheet">
    {{-- icon  --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery (Owl Carousel requires jQuery) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" text-gray-900">

    <!-- Include the header -->
    @include('components.header')

    <!-- Content Section -->
    @yield('content')

    <!-- Include the footer -->
    @include('components.footer')

    <!-- Include JS files -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden"></div>

    <!-- Hamburger Menu Button -->
    <button id="hamburger-button" aria-label="Open menu" aria-expanded="false"
        class="fixed bottom-24 right-6 z-50 p-3 rounded-full bg-gradient-to-r from-amber-400 to-amber-600 text-white hover:from-amber-500 hover:to-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-opacity-50 shadow-lg transition-all duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <!-- Hamburger Menu -->
    <div id="hamburger-menu"
        class="fixed bottom-0 right-0 w-full sm:w-80 bg-gradient-to-b from-gray-50 to-gray-100 shadow-xl rounded-t-2xl transform translate-y-full transition-transform duration-300 ease-in-out z-50 overflow-hidden">
        <div class="flex flex-col h-auto max-h-[80vh]">
            <div class="p-6 relative">
                <div
                    class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-1 bg-amber-400 rounded-full">
                </div>
                <button id="close-menu" aria-label="Close menu"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
                <nav class="mt-4">
                    <ul class="space-y-6">
                        <li>
                            <a href="tel:+"
                                class="flex items-center text-gray-700 hover:text-amber-600 transition-colors duration-300 group">
                                <div
                                    class="w-12 h-12 mr-4 rounded-full bg-amber-100 flex items-center justify-center group-hover:bg-amber-200 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Call Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer"
                                class="flex items-center text-gray-700 hover:text-amber-600 transition-colors duration-300 group">
                                <div
                                    class="w-12 h-12 mr-4 rounded-full bg-amber-100 flex items-center justify-center group-hover:bg-amber-200 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-amber-600" fill="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">WhatsApp</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="flex items-center text-gray-700 hover:text-amber-600 transition-colors duration-300 group">
                                <div
                                    class="w-12 h-12 mr-4 rounded-full bg-amber-100 flex items-center justify-center group-hover:bg-amber-200 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h10M7 12h10m-7 5h7">
                                        </path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium">Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Hamburger Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerButton = document.getElementById('hamburger-button');
            const hamburgerMenu = document.getElementById('hamburger-menu');
            const overlay = document.getElementById('overlay');
            const closeButton = document.getElementById('close-menu');
            const chatButton = document.getElementById('chat-button');

            hamburgerButton.addEventListener('click', function() {
                hamburgerMenu.classList.remove('translate-y-full');
                hamburgerMenu.classList.add('translate-y-0');
                overlay.classList.remove('hidden');
            });

            closeButton.addEventListener('click', function() {
                hamburgerMenu.classList.remove('translate-y-0');
                hamburgerMenu.classList.add('translate-y-full');
                overlay.classList.add('hidden');
            });

            overlay.addEventListener('click', function() {
                hamburgerMenu.classList.remove('translate-y-0');
                hamburgerMenu.classList.add('translate-y-full');
                overlay.classList.add('hidden');
            });

            chatButton.addEventListener('click', function() {
                window.open('https://wa.me/7905111789', '_blank');
            });
        });
    </script>
    <!-- Drift JS -->
    <script src="https://cdn.jsdelivr.net/npm/drift-zoom@1.0.0/dist/drift.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Additional JS Files -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
    {{-- apine js --}}


</body>

</html>
