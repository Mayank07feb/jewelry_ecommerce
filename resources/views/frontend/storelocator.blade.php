@extends('components.main')
@section('content')
<!-- Main Image Section -->
<div class="relative h-[400px] lg:h-[500px] bg-cover bg-center" style="background-image: url('{{ asset('asset/img/store-web-banner.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="absolute bottom-1/3 left-1/2 transform -translate-x-1/2 text-center text-white">
        <h1 class="text-4xl lg:text-5xl font-extrabold mb-2 drop-shadow-md">Store Locator</h1>
    </div>
</div>
<!-- Divider Section -->
<div class="flex items-center justify-center my-12">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-14 w-auto opacity-90 hover:opacity-100 transition-opacity duration-300">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

<!-- Map Section -->
<div class="bg-white shadow-xl rounded-lg overflow-hidden">
    <div class="flex flex-wrap justify-between p-8">
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0 pr-8">
            <h2
                class="inline-block relative before:absolute before:bottom-0 before:bg-[#D4AF37] leading-none text-gray-800 font-light text-2xl lg:text-3xl before:w-12 before:h-1 pb-3 mb-6">
                Visit Giritra Jewellers</h2>
            <div class="flex items-start mb-8">
                <div class="mr-4 text-[#D4AF37]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <h6 class="text-gray-800 font-semibold mb-2">Our Showroom</h6>
                    <p class="text-sm text-gray-600">Giritra Jewellers<br>123 Elegance Avenue, Luxury
                        Lane,<br>Mumbai 400001, Maharashtra, India</p>
                </div>
            </div>
            <div class="flex items-start mb-8">
                <div class="mr-4 text-[#D4AF37]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div>
                    <h6 class="text-gray-800 font-semibold mb-2">Contact Us</h6>
                    <p class="text-sm text-gray-600">Customer Care: +91-9876-543-210<br>Email:
                        info@giritrajewellers.com<br>Hours: Mon - Sat, 10:30 AM - 8:00 PM</p>
                </div>
            </div>
            <div class="flex items-start mb-8">
                <div class="mr-4 text-[#D4AF37]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div>
                    <h6 class="text-gray-800 font-semibold mb-2">Connect with Us</h6>
                    <div class="flex gap-4">
                        <a href="#"
                            class="text-[#D4AF37] hover:text-[#C4A028] transition-colors duration-300"><i
                                class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#"
                            class="text-[#D4AF37] hover:text-[#C4A028] transition-colors duration-300"><i
                                class="fab fa-instagram text-xl"></i></a>
                        <a href="#"
                            class="text-[#D4AF37] hover:text-[#C4A028] transition-colors duration-300"><i
                                class="fab fa-pinterest text-xl"></i></a>
                        <a href="#"
                            class="text-[#D4AF37] hover:text-[#C4A028] transition-colors duration-300"><i
                                class="fab fa-linkedin-in text-xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <h6 class="text-gray-800 font-semibold mb-4 text-xl">Find Our Showroom</h6>
            <div class="relative overflow-hidden w-full h-80 rounded-lg shadow-md">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.803960821086!2d72.82844661490721!3d19.025129287116005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6e68f0c271%3A0x4c30a90f79f0e463!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1652340212110!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Footer Divider -->
<div class="flex items-center justify-center my-12">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-14 w-auto opacity-90 hover:opacity-100 transition-opacity duration-300">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

@endsection
