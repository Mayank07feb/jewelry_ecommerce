@extends('components.main')

@section('content')
    <div class="bg-gray-100 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-bold text-[#601042] mb-4">Our Policies</h1>
                <p class="text-xl text-gray-600">Read the important policies of Gititra Jewellers</p>
            </div>
            
            <div class="lg:flex lg:space-x-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-1/4 mb-8 lg:mb-0">
                    <div class="lg:sticky lg:top-24">
                        <nav class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <ul class="flex flex-nowrap lg:flex-col overflow-x-auto lg:overflow-x-visible whitespace-nowrap lg:whitespace-normal">
                                <li class="faq-link-item flex-shrink-0" data-target="#privacy-policy">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#terms-of-service">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Terms of Service
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#return-policy">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Return Policy
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#shipping-policy">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Shipping Policy
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#payment-policy">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Payment Policy
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="lg:w-3/4">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <!-- Privacy Policy Section -->
                        <div id="privacy-policy" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Privacy Policy</h2>
                            <p class="text-gray-600">At Gititra Jewellers, we prioritize your privacy...</p>
                        </div>

                        <!-- Terms of Service Section -->
                        <div id="terms-of-service" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Terms of Service</h2>
                            <p class="text-gray-600">By accessing and using our services...</p>
                        </div>

                        <!-- Return Policy Section -->
                        <div id="return-policy" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Return Policy</h2>
                            <p class="text-gray-600">Our return policy lasts 30 days...</p>
                        </div>

                        <!-- Shipping Policy Section -->
                        <div id="shipping-policy" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Shipping Policy</h2>
                            <p class="text-gray-600">We offer various shipping methods to ensure your purchase reaches you...</p>
                        </div>

                        <!-- Payment Policy Section -->
                        <div id="payment-policy" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Payment Policy</h2>
                            <p class="text-gray-600">We accept various methods of payment...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- horizontal line with logo --}}
    <div class="container mx-auto px-4 mt-12 mb-8">
        <div class="flex items-center justify-center">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="mx-4 bg-white p-3 rounded-full shadow-lg">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-16 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const linkItems = document.querySelectorAll('.faq-link-item');
            const sections = document.querySelectorAll('.faq-section');

            // Show the first section by default
            if (sections.length > 0) {
                sections[0].classList.remove('hidden');
                linkItems[0].querySelector('a').classList.add('bg-[#601042]', 'text-white');
            }

            // Sidebar section toggle
            linkItems.forEach(item => {
                item.addEventListener('click', function() {
                    const target = this.dataset.target;
                    
                    // Hide all sections
                    sections.forEach(section => section.classList.add('hidden'));

                    // Show the clicked section
                    const targetSection = document.querySelector(target);
                    if (targetSection) {
                        targetSection.classList.remove('hidden');
                    }

                    // Update active state of links
                    linkItems.forEach(li => {
                        const link = li.querySelector('a');
                        link.classList.remove('bg-[#601042]', 'text-white');
                        link.classList.add('text-[#601042]');
                    });
                    const clickedLink = this.querySelector('a');
                    clickedLink.classList.remove('text-[#601042]');
                    clickedLink.classList.add('bg-[#601042]', 'text-white');
                });
            });
        });
    </script>
@endsection
