@extends('components.main')
@section('content')
    <!-- Main Content Section -->
    <div class="flex flex-col lg:flex-row lg:gap-x-8 lg:px-8 px-4 py-5">
        <!-- Shopping Cart Section -->
        <div class="bg-white lg:w-2/3 border-b lg:border-0">
            <div class="hidden lg:block border-b px-4 py-5">
                <h2
                    class="text-lg font-light text-[#601042] relative before:absolute before:bottom-0 before:bg-[#601042] leading-none before:w-8 before:h-0.5 pb-1.5">
                    Shopping Cart
                </h2>
            </div>
            <div class="px-4">
                <div
                    class="border-b border-[#9d6e2a] last:border-b-0 grid gap-x-5 py-6 items-start lg:grid-cols-[125px_1fr] grid-cols-[115px_1fr]">
                    <!-- Product Image -->
                    <div class="relative bg-[#F9F7F2] w-full" style="padding-top: 125%;">
                        <img src="{{ asset('asset/img/payal.webp') }}" alt="Product image"
                            class="absolute inset-0 object-contain w-full h-full">
                    </div>
                    <!-- Product Details -->
                    <div class="grid grid-cols-2 lg:gap-y-4 gap-y-2">
                        <!-- Product Info -->
                        <div class="col-span-2 sm:col-span-1">
                            <a href="/sparkling-charm-silver-anklet-296?variantApin=BMVSDB5VSA6G"
                                class="text-black text-sm mb-2 lg:mb-3">Sparkling Charm Silver Anklet</a>
                            <div class="text-xs">
                                <span class="text-gray-500">Metal Purity:</span> Silver
                            </div>
                            <div class="text-xs">
                                <span class="text-gray-500">Metal Type:</span> Silver (White Rhodium Polish)
                            </div>
                            <div class="mt-1.5">
                                <a href="/sparkling-charm-silver-anklet-296?variantApin=BMVSDB5VSA6G"
                                    class="text-[#601042] underline text-xs">Change</a>
                                <div class="flex items-center space-x-2">
                                    <!-- Delivery Text -->
                                    <span class="text-sm text-gray-600">Delivery by - 30th Sep</span>
                                </div>
                                <div class="flex justify-between items-center lg:mt-4">
                                    <!-- Button for "Move to Wishlist" -->
                                    <button type="button"
                                        class="border bg-[#601042] text-white px-4 pt-2 lg:pt-1.5 pb-1.5 hover:bg-[#9d6e2a] hover:text-white transition">
                                        Move to Wishlist
                                    </button>

                                    <!-- Delete Button for larger screens -->
                                    <div
                                        class="hidden lg:flex items-center text-[11px] cursor-pointer uppercase tracking-[0.2em] lg:-mt-2">
                                        <!-- Delete Icon and Text -->
                                        <span class="material-icons text-[#9d6e2a] mr-2">delete</span>
                                        <span class="pt-px">Delete</span>
                                    </div>
                                </div>

                                {{-- End Wishlist Button --}}
                            </div>
                        </div>
                        <!-- Quantity & Price -->
                        <div class="col-span-2 sm:col-span-1 flex flex-col items-start sm:items-end space-y-2">
                            <div class="relative flex items-center text-xs text-black">
                                <span class="text-gray-500 mr-2">Quantity:</span>
                                <select
                                    class="w-16 text-center border border-gray-300 rounded-md bg-white outline-none focus:ring-2 focus:ring-violet-400">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary Section -->
        <div class="bg-white lg:w-1/3 px-6 py-6 rounded-lg shadow-md">
            <h5 class="text-lg font-semibold text-[#9d6e2a] mb-4">Order Summary</h5>
            <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Subtotal</span>
                <span class="text-gray-800 font-medium">₹23,666</span>
            </div>
            <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Delivery Charge</span>
                <span class="text-gray-800 font-medium">Free</span>
            </div>
            <div class="flex justify-between text-lg font-bold border-t border-[#9d6e2a] pt-4 mt-4">
                <span>Total</span>
                <span class="text-gray-800">₹23,666</span>
            </div>
            <div class="mt-6">
                <div class="lg:px-8">
                    <!-- Mobile View: Hidden on Large Screens -->
                    <div class="lg:hidden flex items-center justify-between text-xs bg-[#F9F7F2] pt-4">
                        <div class="uppercase text-[11px] text-gray-600">Total</div>
                        <div class="font-semibold">₹23,666</div>
                    </div>
                    <a href="{{ route('checkout') }}">
                        <button
                            class="bg-[#601042] text-white w-full lg:mb-8 min-h-[50px] py-2 px-4 rounded-md font-semibold hover:bg-[#9d6e2a] transition duration-300">
                            Place Order
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- horizontal line --}}
    <div class="flex items-center justify-center w-screen">
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
        <div class="mx-4">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
        </div>
        <div class="flex-grow h-px bg-[#9d6e2a]"></div>
    </div>
@endsection
