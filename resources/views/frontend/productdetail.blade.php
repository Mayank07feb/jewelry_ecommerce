@extends('components.main')

@section('content')
    <style>
        .demo-trigger {
            cursor: zoom-in;
        }

        .zoomWindowContainer {
            position: absolute;
            top: 0;
            right: -350px;
            /* Adjust the right margin to position the zoom window */
            width: 300px;
            height: 400px;
        }
    </style>

    <!-- Breadcrumb Section -->
    <nav class="container mx-auto px-4 py-2 text-sm text-gray-600">
        <a href="#" class="hover:underline">Home</a> &gt;
        <a href="#" class="hover:underline">All Jewellery</a> &gt;
        <a href="#" class="hover:underline">Gold Jewellery</a> &gt;
        <a href="#" class="hover:underline">Gold Chain</a> &gt;
        <span class="text-gray-800">Gold Luminary Fancy Gold Chain</span>
    </nav>



    <!-- Main Product Section -->
    <section class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row">
            <!-- Left Image Section -->
            <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                <div class="col-span-2 relative group">
                    <img id="zoom_10" src="{{ asset('storage/'. $product->image->image) }}" alt="Main Gold Chain Image"
                        class="w-full rounded-lg shadow-md transition-transform duration-300 ease-in-out transform group-hover:scale-105 demo-trigger"
                        data-zoom="{{ asset('storage/'. $product->image->image) }}">
                </div>
                @foreach($product->images as $image)
                <div class="relative group">
                    <img src="{{ asset('storage/'. $image->image) }}" alt="Gold Chain Image"
                        class="w-full rounded-lg shadow-md transition-transform duration-300 ease-in-out transform group-hover:scale-105 demo-trigger"
                        data-zoom="{{ asset('storage/'. $image->image) }}">
                </div>
                @endforeach


            </div>

            <!-- Right Product Details Section -->
            <div class="lg:w-1/2 lg:pl-10 space-y-6">
                <h1 class="text-3xl font-semibold text-[#601042]">{{$product->title}}</h1>
                <p class="text-gray-600 mb-4">{!! $product->summary !!}</p>

                @php
                    $discountPrice = ($variation->price * $product->discount)/100;
                    $finalPrice = $variation->price - $discountPrice;
                @endphp

                <!-- Pricing and Offers -->
                <div class="flex items-center space-x-4 mb-4">
                    <div class="text-2xl text-[#601042] font-bold">₹{{$finalPrice}}</div>
                    <div class="text-gray-500 line-through">₹{{$variation->price}}</div>
                    <div class="text-[#9d6e2a] text-sm bg-[#fef5e4] rounded-full px-2 py-1">You Save ₹{{$discountPrice}}</div>
                </div>

                <!-- Sale Countdown Timer -->
{{--                <div--}}
{{--                    class="bg-[#f5e4f7] border border-[#e6d6e7] text-[#601042] p-3 rounded-md inline-block text-center mb-4">--}}
{{--                    Sales ends in <strong>49 Days : 13 Hours : 07 Minutes : 15 Seconds</strong>--}}
{{--                </div>--}}

                <!-- Dropdown Selections -->
                <div class="grid grid-cols-2 gap-6 mb-4">

                    @foreach($product->variations as $v)
                        <div class="flex gap-2">
                            <a href="{{route('productdetail', ['product' => $product->id, 'variation' => $v->id])}}" class="w-full">
                                <button class="w-24 py-3 text-black-50 rounded-md hover:bg-gray-600 hover:text-white shadow-md transition-shadow">
                                    {{$v->carat}}K
                                </button>
                            </a>
                        </div>

                    @endforeach

{{--                    <div>--}}
{{--                        <label for="metal_type" class="block text-sm font-medium text-gray-700">Metal Type</label>--}}
{{--                        <select id="metal_type"--}}
{{--                            class="mt-1 block w-full border-[#9d6e2a] rounded-md shadow-sm focus:ring-[#601042] focus:border-[#601042]">--}}
{{--                            <option>Yellow Gold</option>--}}
{{--                            <option>White Gold</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                </div>

{{--                <!-- Pincode Input -->--}}
{{--                <div class="mt-4 mb-4">--}}
{{--                    <label for="pincode" class="block text-sm font-medium text-gray-700">Your Pincode</label>--}}
{{--                    <div class="flex space-x-2">--}}
{{--                        <input type="text" id="pincode"--}}
{{--                            class="border-[#9d6e2a] rounded-md shadow-sm focus:ring-[#601042] focus:border-[#601042] w-full"--}}
{{--                            placeholder="Enter Pincode">--}}
{{--                        <button class="bg-[#601042] text-white px-4 py-2 rounded-md hover:bg-[#4e0f2a]">Update</button>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- Accordion for Price Breakup -->
{{--                <div class="mt-4 border border-gray-200 rounded-md">--}}
{{--                    <button id="priceToggle"--}}
{{--                        class="w-full flex justify-between items-center px-4 py-3 text-[#601042] font-semibold hover:bg-gray-100 focus:outline-none"--}}
{{--                        onclick="toggleAccordion()">--}}
{{--                        <span>View Price Breakup</span>--}}
{{--                        <svg id="accordionIcon" class="w-5 h-5 transform transition-transform duration-200"--}}
{{--                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <div id="priceBreakup" class="hidden px-4 py-2 border-t border-gray-200">--}}
{{--                        <div class="space-y-2">--}}
{{--                            <div class="flex justify-between text-gray-700">--}}
{{--                                <span>Metal Price</span>--}}
{{--                                <span>₹53,074</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex justify-between text-gray-700">--}}
{{--                                <span>Diamond/Stone</span>--}}
{{--                                <span>₹0</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex justify-between text-gray-700">--}}
{{--                                <span>Making Charges</span>--}}
{{--                                <span>₹8,764</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex justify-between text-gray-700">--}}
{{--                                <span>Discount</span>--}}
{{--                                <span>-₹7,888</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex justify-between text-gray-900 font-bold border-t border-gray-300 pt-2">--}}
{{--                                <span>Net Price</span>--}}
{{--                                <span>₹62,817</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <!-- Action Buttons -->
                <div class="flex space-x-4 mt-6 mb-8">
                    <a href="{{route('addToCart', ['product' => $product->id , 'variation' => $variation->id])}}" class="w-full">
                        <button class="w-full py-3 bg-gray-800 text-white rounded-md hover:bg-gray-900 shadow-md transition-shadow">
                            <i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
                        </button>
                    </a>
                    <a href="{{route('cart')}}" class="w-full">
                        <button class="w-full py-3 bg-[#601042] text-white rounded-md hover:bg-[#4e0f2a] shadow-md transition-shadow">
                            <i class="fas fa-bolt mr-2"></i>BUY NOW
                        </button>
                    </a>
                </div>


                <!-- Product Details Section -->
                <div class="bg-[#f9f9f9] shadow-md rounded-lg p-6 border border-[#e5e5e5]">
                    <h2 class="text-xl font-semibold text-[#601042] mb-4">Product Details</h2>
                    <div class="space-y-2 text-gray-600">
                        <p><strong>COD Availability:</strong> Yes</p>
                        <p><strong>Occasion:</strong> Wedding, Anniversary</p>
                        <p><strong>Gift for:</strong> Wife, Girlfriend</p>
                        <p><strong>Shop For:</strong> Women</p>
                        <p><strong>Collections:</strong> Gold Chain</p>
                        <p><strong>Metal Weight:</strong> 10g</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- horizontal line --}}
    <div class="flex items-center justify-center w-screen">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>

    <script>
        function toggleAccordion() {
            const priceBreakup = document.getElementById('priceBreakup');
            const icon = document.getElementById('accordionIcon');
            if (priceBreakup.classList.contains('hidden')) {
                priceBreakup.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                priceBreakup.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        // Zoom Functionality using Elevate Zoom
        $(document).ready(function() {
            function initZoom() {
                // Destroy any existing zoom if reapplying
                $.removeData('#zoom_10', 'elevateZoom');
                $('.zoomContainer').remove();

                // Apply zoom on large screens
                if ($(window).width() > 1024) {
                    $('#zoom_10').elevateZoom({
                        zoomWindowPosition: 1, // Positions the zoom window to the right
                        zoomWindowWidth: 300, // Width of the zoom window
                        zoomWindowHeight: 400, // Height of the zoom window
                        borderSize: 1,
                        zoomType: "window",
                        cursor: "crosshair",
                        easing: true
                    });
                }
            }

            // Initialize zoom on page load
            initZoom();

            // Reinitialize zoom on window resize
            $(window).resize(function() {
                initZoom();
            });
        });
    </script>
@endsection
