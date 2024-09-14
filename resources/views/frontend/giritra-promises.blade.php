@extends('components.main')

@section('content')
    {{-- <!-- 14-Day Returns Section --> --}}
    <section class="group pt-6 lg:pt-11" id="14-day-returns">
        <div class="xl:max-w-screen-xl mx-auto relative">
            <!-- Image Section -->
            <div class="transition-transform translate-x-0 group-odd:text-right group-even:text-left">
                <img src="https://png-devs3.s3.ap-south-1.amazonaws.com/img01_79ca2c6376.png" width="920" height="680"
                    alt="14-Day Returns" class="lg:inline-block w-full h-auto lg:w-auto">
            </div>
            <!-- Text Section -->
            <div
                class="lg:absolute lg:inset-y-0 flex items-center lg:group-odd:left-0 lg:group-even:right-0 lg:max-w-[620px] w-11/12 mx-auto -mt-12 lg:mt-0">
                <div
                    class="bg-[#601042] px-4 py-8 text-center w-full lg:min-h-[437px] flex items-center justify-center transition-transform translate-x-0">
                    <div>
                        <div class="flex justify-center mb-5 lg:mb-8">
                            <svg width="75" height="62" viewBox="0 0 75 62" fill="#F0D37A"
                                class="w-auto h-[42px] lg:h-[62px]">
                                <!-- SVG paths here -->
                            </svg>
                        </div>
                        <h2 class="relative text-white text-[22px] lg:text-[32px] font-light mb-6 leading-none">
                            <span
                                class="relative before:absolute before:bottom-0 before:bg-white before:w-[34px] before:h-0.5 before:left-1/2 before:-translate-x-1/2 before:-bottom-1.5">14-Day
                                Returns</span>
                        </h2>
                        <div
                            class="text-sm lg:text-base lg:leading-relaxed text-white lg:max-w-[516px] mx-auto tracking-wide">
                            <p>We offer a 14-day Return Policy on all purchases made from PNG Jewellers within India. The
                                entire amount is refunded to the customer's account within 10 working days of receiving the
                                return.<br>To learn more about our return policy, please <a href="#"
                                    class="underline">click here</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Line with Logo -->
    <div class="container mx-auto px-4 mt-12 mb-8">
        <div class="flex items-center justify-center space-x-4">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="bg-white p-3 rounded-full shadow-lg">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-16 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>
    </div>

    {{-- <!-- Free Shipping Section --> --}}
    <section class="group pt-6 lg:pt-11" id="free-shipping">
        <div class="xl:max-w-[1380px] mx-auto relative">
            <!-- Image Section -->
            <div class="transition-opacity translate-x-0 group-odd:text-right group-even:text-left">
                <img src="https://png-devs3.s3.ap-south-1.amazonaws.com/img02_ee5cf4f7ad.png" width="920" height="680"
                    alt="Free Shipping" class="lg:inline-block w-full h-auto lg:w-auto">
            </div>
            <!-- Text Section -->
            <div
                class="lg:absolute lg:inset-y-0 flex items-center lg:group-odd:left-0 lg:group-even:right-0 lg:max-w-[620px] w-11/12 mx-auto -mt-12 lg:mt-0">
                <div
                    class="bg-[#601042] px-4 py-8 text-center w-full lg:min-h-[437px] flex items-center justify-center transition-opacity translate-x-0">
                    <div>
                        <h2
                            class="relative text-white text-[22px] lg:text-[32px] font-light mb-6 leading-none before:absolute before:bottom-0 before:bg-black/[0.8] before:w-[34px] before:h-0.5 before:left-1/2 before:-translate-x-1/2 before:-bottom-1.5">
                            Free Shipping</h2>
                        <div
                            class="text-sm lg:text-base lg:leading-relaxed text-white lg:max-w-[516px] mx-auto tracking-wide">
                            We offer complimentary shipping on all your online purchases made from PNG Jewellers within
                            India, and for any item you want to return or exchange within 30 days.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Horizontal Line with Logo -->
    <div class="container mx-auto px-4 mt-12 mb-8">
        <div class="flex items-center justify-center space-x-4">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="bg-white p-3 rounded-full shadow-lg">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-16 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>
    </div>

    {{-- certifications --}}

    <div class="group/imageCard pt-6 lg:pt-11" id="certifications">
        <div class="xl:max-w-[1380px] mx-auto">
            <div class="relative">
                <!-- Image Section -->
                <div
                    class="group-odd/imageCard:text-right group-even/imageCard:text-left transition-transform duration-300">
                    <img src="https://png-devs3.s3.ap-south-1.amazonaws.com/Certifications_032643be5a.png" width="920"
                        height="680" alt="Certifications" class="lg:inline-block w-full h-auto lg:w-auto">
                </div>
                <!-- Content Section -->
                <div
                    class="lg:absolute lg:inset-y-0 flex items-center lg:group-odd/imageCard:left-0 lg:group-even/imageCard:right-0 lg:max-w-[620px] w-11/12 mx-auto -mt-12 lg:mt-0">
                    <div
                        class="bg-[#601042] text-white px-4 py-8 text-center w-full lg:min-h-[437px] flex items-center justify-center">
                        <div>
                            <!-- Title and Text -->
                            <div class="text-center lg:text-center">
                                <h2 class="text-2xl lg:text-4xl font-bold mb-4">Certified Perfection</h2>
                                <p class="text-lg leading-relaxed">
                                    At Gititra Jewellers, we take pride in our certifications that guarantee the quality and
                                    authenticity of our exquisite jewelry. Each piece is crafted with precision and care,
                                    adhering to the highest standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Horizontal Line with Logo -->
    <div class="container mx-auto px-4 mt-12 mb-8">
        <div class="flex items-center justify-center space-x-4">
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            <div class="bg-white p-3 rounded-full shadow-lg">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-16 w-auto">
            </div>
            <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        </div>
    </div>
@endsection
