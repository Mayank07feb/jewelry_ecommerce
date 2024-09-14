@extends('components.main')

@section('content')
    <div class="text-center lg:mb-9 mb-6 mt-8">
        <h2
            class="inline-block relative before:absolute before:bottom-0 before:bg-black/[0.8] leading-none text-black lg:font-light
  lg:text-[32px] text-[22px] before:w-[34px] before:h-0.5 pb-1.5 ">
            FAQs</h2>
    </div>
    <div class="grid grid-cols-9 gap-x-6 xl:gap-x-16">
        <!-- Sidebar Navigation -->
        <div class="col-span-12 lg:col-span-2">
            <div class="sticky top-0 lg:pt-4">
                <!-- Sidebar Background with the custom color -->
                <div class="bg-[#601042] lg:pl-5 lg:py-8 pt-2 text-sm font-normal text-white">
                    <div class="space-y-4">
                        <a href="javascript:void(0)" data-target="#about-gititra-jewellers"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">About Gititra Jewellers</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#delivery"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Delivery</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#returns-and-exchanges"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Returns and Exchanges</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#jewellery"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Jewellery</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#solitaires"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Solitaires</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#making-an-online-purchase"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Making an Online Purchase</span>
                        </a>
                        <a href="javascript:void(0)" data-target="#payments"
                            class="block px-2.5 lg:px-4 lg:py-5 pt-1.5 pb-3.5 hover:bg-gray-100 hover:text-[#601042] faq-link">
                            <span class="block py-1">Payments</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-span-12 lg:col-span-7">
            <div class="px-4 lg:px-0 pt-6 lg:pt-4">
                <div class="space-y-12">
                    <!-- About Gititra Jewellers FAQ Section -->
                    <div id="about-gititra-jewellers" class="faq-section hidden">
                        <h2
                            class="inline-block relative before:absolute before:bottom-0 before:left-0 before:w-8 before:h-1 before:bg-[#601042] pb-2 mb-4 text-lg lg:text-2xl font-light">
                            About Gititra Jewellers
                        </h2>
                        <div class="text-sm leading-relaxed space-y-4">
                            <div class="border-b py-3">
                                <div class="font-medium text-[#601042] flex items-center cursor-pointer toggle-answer"
                                    data-target="#answer1">
                                    <span class="mr-3">
                                        <svg width="10" height="10" fill="currentColor" class="transform rotate-45">
                                            <rect x="4" width="2" height="10"></rect>
                                            <rect x="10" y="4" width="2" height="10" transform="rotate(90 10 4)">
                                            </rect>
                                        </svg>
                                    </span>
                                    Gititra Jewellers was established in which year?
                                </div>
                                <div id="answer1" class="pl-5 text-gray-600 hidden">
                                    <p>Gititra Jewellers has been a leader in the jewelry industry for over 100 years, known
                                        for craftsmanship and elegance.</p>
                                </div>
                            </div>
                            <div class="border-b py-3">
                                <div class="font-medium text-[#601042] flex items-center cursor-pointer toggle-answer"
                                    data-target="#answer2">
                                    <span class="mr-3">
                                        <svg width="10" height="10" fill="currentColor" class="transform rotate-45">
                                            <rect x="4" width="2" height="10"></rect>
                                            <rect x="10" y="4" width="2" height="10" transform="rotate(90 10 4)">
                                            </rect>
                                        </svg>
                                    </span>
                                    What makes Gititra Jewellers unique?
                                </div>
                                <div id="answer2" class="pl-5 text-gray-600 hidden">
                                    <p>Gititra Jewellers blends tradition and modern design, offering a wide variety of
                                        high-quality jewelry pieces.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery FAQ Section -->
                    <div id="delivery" class="faq-section hidden">
                        <h2
                            class="inline-block relative before:absolute before:bottom-0 before:left-0 before:w-8 before:h-1 before:bg-[#601042] pb-2 mb-4 text-lg lg:text-2xl font-light">
                            Delivery
                        </h2>
                        <div class="text-sm leading-relaxed space-y-4">
                            <div class="border-b py-3">
                                <div class="font-medium text-[#601042] flex items-center cursor-pointer toggle-answer"
                                    data-target="#answer3">
                                    <span class="mr-3">
                                        <svg width="10" height="10" fill="currentColor" class="transform rotate-45">
                                            <rect x="4" width="2" height="10"></rect>
                                            <rect x="10" y="4" width="2" height="10" transform="rotate(90 10 4)">
                                            </rect>
                                        </svg>
                                    </span>
                                    How much is the shipping charge?
                                </div>
                                <div id="answer3" class="pl-5 text-gray-600 hidden">
                                    <p>Shipping charges are calculated at checkout based on the destination of the order.
                                    </p>
                                </div>
                            </div>
                            <div class="border-b py-3">
                                <div class="font-medium text-[#601042] flex items-center cursor-pointer toggle-answer"
                                    data-target="#answer4">
                                    <span class="mr-3">
                                        <svg width="10" height="10" fill="currentColor" class="transform rotate-45">
                                            <rect x="4" width="2" height="10"></rect>
                                            <rect x="10" y="4" width="2" height="10" transform="rotate(90 10 4)">
                                            </rect>
                                        </svg>
                                    </span>
                                    Do you ship internationally?
                                </div>
                                <div id="answer4" class="pl-5 text-gray-600 hidden">
                                    <p>Yes, we ship to several countries worldwide. Contact us to confirm shipping
                                        availability to your location.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More FAQ Sections can be added here -->

                </div>
            </div>
        </div>
    </div>


    {{-- horizontal line --}}
    <div class="flex items-center justify-center w-screen px-10">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('.faq-link');
            const sections = document.querySelectorAll('.faq-section');
            const toggles = document.querySelectorAll('.toggle-answer');

            // Sidebar section toggle
            links.forEach(link => {
                link.addEventListener('click', function() {
                    // Hide all sections
                    sections.forEach(section => section.classList.add('hidden'));

                    // Show the clicked section
                    const target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.classList.remove('hidden');
                    }
                });
            });

            // Accordion functionality
            toggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const target = document.querySelector(this.dataset.target);
                    if (target) {
                        target.classList.toggle('hidden');
                        // Rotate the icon based on the visibility of the answer
                        this.querySelector('svg').classList.toggle('rotate-0');
                    }
                });
            });
        });
    </script>
@endsection
