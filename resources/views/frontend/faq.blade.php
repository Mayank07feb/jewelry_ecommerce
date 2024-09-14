@extends('components.main')

@section('content')
    <div class="bg-gray-100 min-h-screen py-12">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-bold text-[#601042] mb-4">Frequently Asked Questions</h1>
                <p class="text-xl text-gray-600">Find answers to common questions about Gititra Jewellers</p>
            </div>
            
            <div class="lg:flex lg:space-x-8">
                <!-- Sidebar Navigation -->
                <div class="lg:w-1/4 mb-8 lg:mb-0">
                    <div class="lg:sticky lg:top-24">
                        <nav class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <ul class="flex flex-nowrap lg:flex-col overflow-x-auto lg:overflow-x-visible whitespace-nowrap lg:whitespace-normal">
                                <li class="faq-link-item flex-shrink-0" data-target="#about-gititra-jewellers">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        About Gititra Jewellers
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#delivery">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Delivery
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#returns-and-exchanges">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Returns and Exchanges
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#jewellery">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Jewellery
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#solitaires">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Solitaires
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#making-an-online-purchase">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Making an Online Purchase
                                    </a>
                                </li>
                                <li class="faq-link-item flex-shrink-0" data-target="#payments">
                                    <a href="javascript:void(0)" class="block px-6 py-4 text-[#601042] hover:bg-gray-100 transition-colors duration-200">
                                        Payments
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Main Content Area -->
                <div class="lg:w-3/4">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <!-- About Gititra Jewellers FAQ Section -->
                        <div id="about-gititra-jewellers" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">About Gititra Jewellers</h2>
                            <div class="space-y-6">
                                <div class="border-b border-gray-200 pb-6">
                                    <button class="w-full text-left font-medium text-lg text-[#601042] flex items-center justify-between focus:outline-none toggle-answer" data-target="#answer1">
                                        <span>Gititra Jewellers was established in which year?</span>
                                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="answer1" class="mt-4 text-gray-600 hidden">
                                        <p>Gititra Jewellers has been a leader in the jewelry industry for over 100 years, known for craftsmanship and elegance. Established in 1920, we have a rich history of providing exquisite pieces to our discerning clientele.</p>
                                    </div>
                                </div>
                                <div class="border-b border-gray-200 pb-6">
                                    <button class="w-full text-left font-medium text-lg text-[#601042] flex items-center justify-between focus:outline-none toggle-answer" data-target="#answer2">
                                        <span>What makes Gititra Jewellers unique?</span>
                                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="answer2" class="mt-4 text-gray-600 hidden">
                                        <p>Gititra Jewellers blends tradition and modern design, offering a wide variety of high-quality jewelry pieces. Our uniqueness stems from our commitment to sourcing the finest materials, employing master craftsmen, and providing personalized service to each customer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Delivery FAQ Section -->
                        <div id="delivery" class="faq-section hidden">
                            <h2 class="text-3xl font-semibold text-[#601042] mb-8">Delivery</h2>
                            <div class="space-y-6">
                                <div class="border-b border-gray-200 pb-6">
                                    <button class="w-full text-left font-medium text-lg text-[#601042] flex items-center justify-between focus:outline-none toggle-answer" data-target="#answer3">
                                        <span>How much is the shipping charge?</span>
                                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="answer3" class="mt-4 text-gray-600 hidden">
                                        <p>Shipping charges are calculated at checkout based on the destination of the order. We offer free shipping on orders over $500 within the continental United States. For international orders, please contact our customer service for a quote.</p>
                                    </div>
                                </div>
                                <div class="border-b border-gray-200 pb-6">
                                    <button class="w-full text-left font-medium text-lg text-[#601042] flex items-center justify-between focus:outline-none toggle-answer" data-target="#answer4">
                                        <span>Do you ship internationally?</span>
                                        <svg class="w-6 h-6 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="answer4" class="mt-4 text-gray-600 hidden">
                                        <p>Yes, we ship to several countries worldwide. Our international shipping process ensures your jewelry arrives safely and securely. Please note that additional customs fees may apply depending on your country's import regulations. Contact us to confirm shipping availability to your specific location.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- More FAQ Sections can be added here -->

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
            const toggles = document.querySelectorAll('.toggle-answer');

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

            // Accordion functionality
            toggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.classList.toggle('hidden');
                        // Rotate the icon based on the visibility of the answer
                        this.querySelector('svg').classList.toggle('rotate-180');
                    }
                });
            });
        });
    </script>
@endsection