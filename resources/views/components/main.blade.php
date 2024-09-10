<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>

    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- If using Vite, include the Vite directive -->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Include the header -->
    @include('components.header')

    <!-- Content Section -->
    @yield('content')

    <!-- Include the footer -->
    @include('components.footer')

    <!-- Include JS files -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Floating Menu Component -->
    <div class="fixed bottom-4 right-4 z-50 flex flex-col-reverse items-end">

        <!-- Social Media Icons Container -->
        <div id="social-icons"
            class="flex flex-col items-end space-y-4 mb-4 transition-all duration-300 opacity-0 scale-75 pointer-events-none">

            <!-- Chat Option -->
            <a href="#" target="_blank"
                class="bg-purple-600 hover:bg-purple-700 rounded-full p-3 shadow-lg transition-all duration-300 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                    </path>
                </svg>
            </a>

            <!-- Call Option -->
            <a href="tel:+7905111789"
                class="bg-purple-600 hover:bg-purple-700 rounded-full p-3 shadow-lg transition-all duration-300 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
            </a>

            <!-- WhatsApp Option -->
            <a href="https://wa.me/7905111789?text=YOUR_MESSAGE" target="_blank"
                class="bg-purple-600 hover:bg-purple-700 rounded-full p-3 shadow-lg transition-all duration-300 flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347">
                    </path>
                </svg>
            </a>

        </div>

        <!-- Help Button -->
        <button id="help-button"
            class="px-4 py-2 bg-purple-600 text-white rounded-full font-semibold shadow-lg transition-all duration-300 hover:bg-purple-700">
            Help ?
        </button>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden"></div>

    <!-- Floating Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const helpButton = document.getElementById('help-button');
            const socialIcons = document.getElementById('social-icons');
            const overlay = document.getElementById('overlay');

            function toggleMenu() {
                socialIcons.classList.toggle('opacity-0');
                socialIcons.classList.toggle('scale-75');
                socialIcons.classList.toggle('pointer-events-none');
                overlay.classList.toggle('hidden');
            }

            helpButton.addEventListener('click', toggleMenu);
            overlay.addEventListener('click', toggleMenu);
        });
    </script>

    <!-- Additional JS Files -->
    <script src="{{ asset('asset/js/script.js') }}"></script>

</body>

</html>
