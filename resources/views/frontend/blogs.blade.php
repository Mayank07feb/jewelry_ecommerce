@extends('components.main')
@section('content')
    <!-- Banner Section with Background Image -->
    <div class="relative bg-cover bg-center h-64 mb-6" style="background-image: url('{{ asset('asset/img/banner') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-7xl mx-auto h-full flex items-center justify-center px-4">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white mb-2">Welcome to Our Blog</h1>
                <p class="text-xl text-white">Discover the latest trends in fashion and lifestyle</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-24 px-10">
        <div class="col-span-1">
            <a href="{{ route('blog.details') }}"
                class="block relative transform transition-transform duration-500 hover:scale-105 hover:shadow-2xl hover:rotate-1">
                <div class="flex">
                    <img src="https://png-devs3.s3.ap-south-1.amazonaws.com/how_to_choose_the_best_jewellery_for_your_gown_1372386072_23f363b07e.jpg"
                        width="675" height="364" alt="How to Choose the Best Jewellery for Your Gown"
                        class="min-w-full h-auto">
                </div>
                <div
                    class="p-6 bg-white rounded-lg shadow-lg transform transition-transform duration-500 hover:translate-y-3">
                    <div class="text-xs pt-4 mb-0">
                        <span class="text-dark font-medium ltr:mr-1 rtl:ml-1">Posted on</span>29th Nov 2023
                    </div>
                    <h3 class="mb-3 text-lg lg:text-2xl text-dark">How to Choose the Best Jewellery for Your Gown</h3>
                    <div class="text-sm lg:text-base">When attending a special event, you ought to look your best. A great
                        way to achieve exceptional results is by accentuating your gown with appropriate jewellery.</div>
                    <div class="uppercase flex items-center mt-6 lg:mt-8">
                        <span
                            class="bg-[#601042] text-white px-4 py-2 rounded-full inline-flex items-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <rect x="7.85156" y="15.5957" width="14.2595" height="1.29632" rx="0.648158"
                                    transform="rotate(-90 7.85156 15.5957)" fill="#ffffff"></rect>
                                <rect x="15.6309" y="9.11523" width="14.2595" height="1.29632" rx="0.648158"
                                    transform="rotate(180 15.6309 9.11523)" fill="#ffffff"></rect>
                            </svg>
                            <span class="ml-2 font-semibold">Read more</span>
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-span-1">
            <a href="{{ route('blog.details') }}"
                class="block relative transform transition-transform duration-500 hover:scale-105 hover:shadow-2xl hover:rotate-1">
                <div class="flex">
                    <img src="https://png-devs3.s3.ap-south-1.amazonaws.com/happy_new_year_gift_ideas_for_him_her_247931813_210919e7a6.jpg"
                        width="675" height="364"
                        alt="Happy New Year Gift Ideas for Him/Her: Show Your Appreciation and Love with These Thoughtful Picks"
                        class="min-w-full h-auto">
                </div>
                <div
                    class="p-6 bg-white rounded-lg shadow-lg transform transition-transform duration-500 hover:translate-y-3">
                    <div class="text-xs pt-4 mb-0">
                        <span class="text-dark font-medium ltr:mr-1 rtl:ml-1">Posted on</span>8th Aug 2023
                    </div>
                    <h3 class="mb-3 text-lg lg:text-2xl text-dark">Happy New Year Gift Ideas for Him/Her: Show Your
                        Appreciation and Love with These Thoughtful Picks</h3>
                    <div class="text-sm lg:text-base">As the clock strikes midnight, people all around the world share New
                        Year's wishes. New Year is a time to reflect on the past year and set goals for the upcoming one. It
                        is also a time to make resolutions and plan for the future.</div>
                    <div class="uppercase flex items-center mt-6 lg:mt-8">
                        <span
                            class="bg-[#601042] text-white px-4 py-2 rounded-full inline-flex items-center transition-transform duration-300 hover:scale-105 hover:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                fill="none">
                                <rect x="7.85156" y="15.5957" width="14.2595" height="1.29632" rx="0.648158"
                                    transform="rotate(-90 7.85156 15.5957)" fill="#ffffff"></rect>
                                <rect x="15.6309" y="9.11523" width="14.2595" height="1.29632" rx="0.648158"
                                    transform="rotate(180 15.6309 9.11523)" fill="#ffffff"></rect>
                            </svg>
                            <span class="ml-2 font-semibold">Read more</span>
                        </span>
                    </div>
                </div>
            </a>
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
@endsection
