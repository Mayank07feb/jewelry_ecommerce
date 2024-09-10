@extends('components.main')

@section('content')
{{-- <div>
    <div class="desktop-filter lg:bg-gradient-to-r from-[#4C217D] to-primary bg-white fixed lg:static top-0 left-0 w-full lg:h-auto h-full duration-700 z-[51]">
        <div class="container px-0 lg:px-4 overflow-auto fixed top-[49px] bottom-[52px] lg:static lg:top-auto lg:bottom-auto lg:overflow-visible">
            <div class="lg:bg-primary lg:flex">
                <!-- Desktop header for filters -->
                <div class="hidden lg:flex items-center bg-[#4C217D] text-white ltr:border-r border-white/[0.1]">
                    <svg width="15" height="11" viewBox="0 0 15 11" fill="currentColor">
                        <rect y="1.5" width="8" height="1.5" rx="0.75"></rect>
                        <rect width="8" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 15 7.5)"></rect>
                        <rect x="12" y="1.5" width="3" height="1.5" rx="0.75"></rect>
                        <rect width="3" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 3 7.5)"></rect>
                        <rect x="9" y="4.5" width="4.5" height="1.5" rx="0.75" transform="rotate(-90 9 4.5)"></rect>
                        <rect width="4.5" height="1.5" rx="0.75" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 6 10.5)"></rect>
                    </svg>
                </div>

                <!-- Mobile header for filters -->
                <div class="lg:hidden flex items-center justify-between fixed w-full top-0 bg-white px-4 py-2 border-b">
                    <h2 class="text-base text-gray-900">Filter</h2>
                    <span class="cursor-pointer text-black text-xs border-b border-black">Clear all</span>
                </div>

                <div class="flex w-full">
                    <!-- Filter section for Price -->
                    <div class="lg:max-w-[270px] hidden lg:block flex-auto">
                        <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 text-sm bg-primary-light lg:bg-transparent lg:text-white">
                            <span class="capitalize">Price</span>
                            <span class="ml-auto hidden lg:inline-flex">
                                <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor">
                                    <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- Filter section for Occasion -->
                    <div class="lg:max-w-[270px] hidden lg:block flex-auto">
                        <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 text-sm bg-primary-light lg:bg-transparent lg:text-white">
                            <span class="capitalize">Occasion</span>
                            <span class="ml-auto hidden lg:inline-flex">
                                <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor">
                                    <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- Filter section for Collections -->
                    <div class="lg:max-w-[270px] hidden lg:block flex-auto">
                        <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 text-sm bg-primary-light lg:bg-transparent lg:text-white">
                            <span class="capitalize">Collections</span>
                            <span class="ml-auto hidden lg:inline-flex">
                                <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor">
                                    <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- Add more filter sections here -->
                </div>

                <!-- Filter applied and clear all section -->
                <div class="lg:fixed top-0 right-0 z-[99999] w-full lg:h-full lg:max-w-[560px] lg:bg-white lg:overflow-auto lg:translate-x-full">
                    <div class="border-b bg-white sticky top-0 px-6 py-3.5 hidden lg:flex items-center justify-between">
                        <h2 class="text-[28px] font-light text-gray-900">Filter</h2>
                        <div class="flex items-center">
                            <span class="cursor-pointer text-black text-[11px] font-medium uppercase tracking-widest border-b border-black">Clear All</span>
                            <span class="cursor-pointer">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor">
                                    <path d="M1.38461 18L0 16.6154L7.61538 9L0 1.38461L1.38461 0L9 7.61538L16.6154 0L18 1.38461L10.3846 9L18 16.6154L16.6154 18L9 10.3846L1.38461 18Z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-r from-[#9f6fd6]/60 to-[#9f6fd6] lg:py-2 relative z-10">
        <div class="container lg:pb-3">
            <div class="flex lg:flex-wrap -mx-1 lg:mb-1 overflow-auto">
                <!-- Add content here -->
            </div>
            <div class="flex justify-end">
                <div class="sort-outer lg:col-span-2 col-span-3 lg:text-right lg:relative fixed w-full left-0 bottom-0 lg:transform-none duration-700 ease-in-out lg:z-30">
                    <div class="relative lg:inline-block text-black lg:text-left rtl:text-right">
                        <div class="lg:flex hidden items-center px-3.5 py-2 leading-[17px] cursor-pointer bg-white border text-xs max-w-full w-[267px] border-b-0 border-white">
                            Sort by
                            <span class="ml-auto">
                                <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                                    <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="lg:absolute z-30 w-full bg-white lg:border border-black lg:hidden">
                            <div class="flex items-center justify-between lg:hidden px-4 pt-3 pb-2 border-b">
                                <h6>Sort By</h6>
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor" class="w-3 h-3">
                                    <path d="M1.38461 18L0 16.6154L7.61538 9L0 1.38461L1.38461 0L9 7.61538L16.6154 0L18 1.38461L10.3846 9L18 16.6154L16.6154 18L9 10.3846L1.38461 18Z"></path>
                                </svg>
                            </div>
                            <ul class="text-xs lg:px-3.5 px-4 py-3.5">
                                <li class="py-1.5">
                                    <span class="inline-flex cursor-pointer relative pl-6 lg:pl-0 before:hidden lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:absolute before:top-0 before:bg-white before:p-0.5 before:border-[#DCDCDC] before:content-[''] after:hidden lg:after:hidden">
                                        <input type="radio" name="filter" id="price" class="absolute opacity-0 cursor-pointer" checked>
                                        <label for="price" class="cursor-pointer text-[#6A2D6F] font-normal hover:text-primary">Price</label>
                                    </span>
                                </li>
                                <li class="py-1.5">
                                    <span class="inline-flex cursor-pointer relative pl-6 lg:pl-0 before:hidden lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:absolute before:top-0 before:bg-white before:p-0.5 before:border-[#DCDCDC] before:content-[''] after:hidden lg:after:hidden">
                                        <input type="radio" name="filter" id="occasion" class="absolute opacity-0 cursor-pointer">
                                        <label for="occasion" class="cursor-pointer text-[#6A2D6F] font-normal hover:text-primary">Occasion</label>
                                    </span>
                                </li>
                                <li class="py-1.5">
                                    <span class="inline-flex cursor-pointer relative pl-6 lg:pl-0 before:hidden lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:absolute before:top-0 before:bg-white before:p-0.5 before:border-[#DCDCDC] before:content-[''] after:hidden lg:after:hidden">
                                        <input type="radio" name="filter" id="collections" class="absolute opacity-0 cursor-pointer">
                                        <label for="collections" class="cursor-pointer text-[#6A2D6F] font-normal hover:text-primary">Collections</label>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



   
@endsection
