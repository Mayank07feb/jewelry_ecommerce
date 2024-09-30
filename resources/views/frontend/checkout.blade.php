@extends('components.main')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto p-4 max-w-6xl">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Left Column -->
                <div class="w-full md:w-2/3 space-y-6">

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>

                        @endforeach
                    @endif

                    <!-- Delivery Information Section -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-[#601042] mb-6 flex items-center space-x-2">
                            <span class="material-icons text-lg">local_shipping</span>
                            <span>Delivery Information</span>
                        </h2>
                        <form action="{{route('order.place')}}" method="post">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700">First Name
                                        *</label>
                                    <input type="text" id="firstName" name="first_name" value="{{old('first_name')}}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name
                                        *</label>
                                    <input type="text" id="lastName" name="last_name" value="{{old('last_name')}}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="Enter Email Address"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label for="pincode" class="block text-sm font-medium text-gray-700">Pincode/Zip Code
                                        *</label>
                                    <input type="text" id="pincode" name="pincode" value="{{old('pincode')}}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                </div>
                                <div>
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country *</label>
                                    <select id="country" name="country"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                        <option value="">Select Country</option>
                                        <option value="united states">United States</option>
                                        <option value="india">India</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address 1 *</label>
                                <input type="text" id="address" name="address1" placeholder="Street and House Number" value="{{old('address1')}}"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                            <div class="mb-4">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address 2 *</label>
                                <input type="text" id="address" name="address2" placeholder="Street and House Number" value="{{old('address2')}}"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                            <div class="mb-4">
                                <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number
                                    *</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        🇮🇳 +91
                                    </span>
                                    <input type="tel" id="mobile" name="mobile" dirname="phone" value="{{old('phone')}}"
                                           class="flex-1 block w-full rounded-none rounded-r-md border-gray-300 focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                </div>
                            </div>
{{--                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">--}}
{{--                                <div>--}}
{{--                                    <label for="state" class="block text-sm font-medium text-gray-700">State / Province--}}
{{--                                        *</label>--}}
{{--                                    <select id="state" name="state"--}}
{{--                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">--}}
{{--                                        <option value="">Select State</option>--}}
{{--                                        <option value="">Uttar Pradesh</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <label for="city" class="block text-sm font-medium text-gray-700">City *</label>--}}
{{--                                    <select id="city" name="city"--}}
{{--                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">--}}
{{--                                        <option value="">Select City</option>--}}
{{--                                        <option value="">Kanpur</option>--}}
{{--                                        <!-- Add cities based on selected state -->--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="space-y-2 mb-4">
{{--                                <label class="flex items-center">--}}
{{--                                    <input type="checkbox" class="form-checkbox text-[#9d6e2a]">--}}
{{--                                    <span class="ml-2 text-sm text-gray-700">Save in address book</span>--}}
{{--                                </label>--}}
{{--                                <label class="flex items-center">--}}
{{--                                    <input type="checkbox" class="form-checkbox text-[#9d6e2a]">--}}
{{--                                    <span class="ml-2 text-sm text-gray-700">Bill to different address</span>--}}
{{--                                </label>--}}
                            </div>
                            <button
                                class="w-full bg-[#601042] text-white py-3 px-4 rounded-lg hover:opacity-90 transition duration-300 font-semibold">
                                SAVE AND CONTINUE
                            </button>
                        </form>
                    </div>

                    <!-- Payments Section -->
                    <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-gray-300">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center space-x-2">
                            <span class="material-icons text-lg">payment</span>
                            <span>Payments</span>
                        </h2>
                        <p class="text-gray-600">Select your payment method and enter details.</p>
                        <!-- Payment options can be added here -->
                    </div>
                </div>

                <!-- Right Column -->
                <div class="w-full md:w-1/3">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-[#601042] mb-6">Order Summary</h2>
                        @php
                            $price = 0;
                        @endphp
                        @foreach($items as $item)
                            <div class="flex space-x-4 mb-4">
                                <img src="{{ asset('storage/'. $item->product->image->image) }}" alt="Product"
                                     class="w-20 h-20 object-cover rounded-md">
                                <div class="flex flex-col justify-center">
                                    <h3 class="font-semibold text-[#601042]">{{$item->product->name}}</h3>
                                    <p class="text-sm text-gray-600">Metal Purity: {{$item->variation->carat}} KT</p>
                                    <p class="text-sm text-gray-600">Metal Type: {{ucfirst($item->product->material)}}</p>
                                    <p class="text-sm text-gray-600">Weight: {{$item->product->weight}} g</p>
{{--                                    <p class="text-sm text-gray-600">Product Code: GN20907</p>--}}
                                    @php
                                        $price += $item->price * $item->quantity;
                                    @endphp
                                    <div class="mt-2">
                                        <span class="font-semibold text-gray-900">₹{{$price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="space-y-2">
                            <div class="flex justify-between py-2">
                                <span class="text-gray-600">Total Price:</span>
                                <span class="text-gray-900 font-semibold">₹{{$price}}</span>
                            </div>
                            <div class="flex justify-between py-2">
                                <dt class="text-gray-600">Delivery Charge:</dt>
                                <dd class="font-medium text-green-600">Free</dd>
                            </div>
                            <div class="flex justify-between py-2">
                                <dt class="text-gray-600">Discount:</dt>
                                <dd id="discount" class="font-medium text-gray-900">- ₹0</dd>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between font-semibold text-gray-900">
                                <span>Order Total:</span>
                                <span>₹{{$price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
