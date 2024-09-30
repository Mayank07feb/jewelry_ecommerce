@extends('components.main')

@section('content')
    <div class="py-12 lg:py-20 bg-gradient-to-b from-gray-100 to-gray-200">
        <div class="max-w-screen-xl mx-auto text-center px-4">
            <h2
                class="inline-block relative before:absolute before:bg-[#D4AF37] leading-none text-gray-800 lg:font-light lg:text-4xl text-3xl before:w-20 before:h-1 pb-3 uppercase  before:top-16 before:bottom-auto mb-8">
                Connect with Giritra Jewellers</h2>
            <p class="text-lg text-gray-700 tracking-wide py-5 lg:mb-10 max-w-2xl mx-auto">From selecting the perfect piece
                to custom designs and expert advice, our team at Giritra Jewellers is here to make your jewelry dreams come
                true.</p>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="max-w-4xl mx-auto px-4 lg:pb-20 pb-12">
            <form action="{{route('contact.store')}}" method="post" class="grid grid-cols-12 lg:gap-8 gap-6 text-sm bg-white p-8 rounded-lg shadow-xl">
               @csrf
                <div class="col-span-12 sm:col-span-6 pb-2.5">
                    <label class="block text-sm font-semibold text-gray-800 tracking-wide mb-2">Full Name <span
                            class="text-[#D4AF37]">*</span></label>
                    <input name="name" id="fullName" type="text"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]"
                        placeholder="Enter Full Name">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-12 sm:col-span-6 pb-2.5">
                    <label class="block text-sm font-semibold text-gray-800 tracking-wide mb-2">Email Address <span
                            class="text-[#D4AF37]">*</span></label>
                    <input name="email" id="email" type="email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]"
                        placeholder="Enter Email Address">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-12 sm:col-span-6 pb-2.5">
                    <label class="block text-sm font-semibold text-gray-800 tracking-wide mb-2">Phone Number <span
                            class="text-[#D4AF37]">*</span></label>
                    <input name="phone" id="phone" type="tel"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]"
                        placeholder="Enter Phone Number">
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-12 sm:col-span-6 pb-2.5">
                    <label class="block text-sm font-semibold text-gray-800 tracking-wide mb-2">Enquiry Type <span
                            class="text-[#D4AF37]">*</span></label>
                    <select name="type" id="enquiryType"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]">
                        <option value="" disabled selected>Select Enquiry Type</option>
                        <option value="general">General Inquiry</option>
                        <option value="product">Product Information</option>
                        <option value="custom">Custom Design</option>
                        <option value="appointment">Book Appointment</option>
                    </select>
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-12 pb-2.5">
                    <label class="block text-sm font-semibold text-gray-800 tracking-wide mb-2">Message <span
                            class="text-[#D4AF37]">*</span></label>
                    <textarea name="msg" id="message" rows="4"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:border-[#D4AF37]"
                        placeholder="Enter your message here..."></textarea>
                    @error('msg')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-12 pb-2.5">
                    <div class="flex items-center">
                        <input name="updates" id="updates" type="checkbox"
                            class="mr-2 focus:ring-[#D4AF37] text-[#D4AF37]">
                        <label for="updates" class="text-sm text-gray-700">I would like to receive updates and exclusive
                            offers from Giritra Jewellers.</label>
                    </div>
                    <div class="flex items-center mt-2">
                        <input name="privacy" id="privacy" type="checkbox"
                            class="mr-2 focus:ring-[#D4AF37] text-[#D4AF37]">
                        <label for="privacy" class="text-sm text-gray-700">I have read and accept the Privacy Policy and
                            Terms of Service.</label>
                    </div>
                </div>
                <div class="col-span-12 pb-2.5 text-center">
                    <button type="submit"
                        class="bg-[#D4AF37] text-white px-8 py-3 rounded-md shadow-md hover:bg-[#C4A028] transition duration-300 ease-in-out transform hover:scale-105">Send
                        Message</button>
                </div>
            </form>
        </div>

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
    </div>

 {{-- Horizontal Line --}}
 <div class="flex items-center justify-center w-full mx-auto p-4">
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    <div class="mx-4">
        <img src="{{ asset('asset\img\logo.png') }}" alt="Site Logo" class="h-12 w-auto">
    </div>
    <div class="flex-grow h-px bg-[#9d6e2a]"></div>
</div>

@endsection
