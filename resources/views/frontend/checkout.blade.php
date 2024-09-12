@extends('components.main')

@section('content')
<div class="bg-gray-100">
    <div class="container mx-auto p-4 max-w-6xl">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Column -->
            <div class="w-full md:w-2/3 space-y-6">
                
                <!-- Delivery Information Section -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold text-[#601042] mb-6 flex items-center space-x-2">
                        <span class="material-icons text-lg">local_shipping</span>
                        <span>Delivery Information</span>
                    </h2>
                    
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-gray-700">First Name *</label>
                                <input type="text" id="firstName" name="firstName"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name *</label>
                                <input type="text" id="lastName" name="lastName"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Street and House Number *</label>
                            <input type="text" id="address" name="address" placeholder="Enter Address"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="pincode" class="block text-sm font-medium text-gray-700">Pincode/Zip Code *</label>
                                <input type="text" id="pincode" name="pincode"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700">Country *</label>
                                <select id="country" name="country"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                    <option value="">Select Country</option>
                                    <option value="us">United States</option>
                                    <option value="in">India</option>
                                    <!-- Add more countries as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="state" class="block text-sm font-medium text-gray-700">State / Province *</label>
                                <select id="state" name="state"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                    <option value="">Select State</option>
                                    <option value="">Uttar Pradesh</option>
                                </select>
                            </div>
                            <div>
                                <label for="city" class="block text-sm font-medium text-gray-700">City *</label>
                                <select id="city" name="city"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                                    <option value="">Select City</option>
                                    <option value="">Kanpur</option>
                                    <!-- Add cities based on selected state -->
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number *</label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                    🇮🇳 +91
                                </span>
                                <input type="tel" id="mobile" name="mobile"
                                    class="flex-1 block w-full rounded-none rounded-r-md border-gray-300 focus:border-[#601042] focus:ring focus:ring-[#601042] focus:ring-opacity-50">
                            </div>
                        </div>
                        <div class="space-y-2 mb-4">
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-[#9d6e2a]">
                                <span class="ml-2 text-sm text-gray-700">Save in address book</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="form-checkbox text-[#9d6e2a]">
                                <span class="ml-2 text-sm text-gray-700">Bill to different address</span>
                            </label>
                        </div>
                        <a href="{{ route('ordersummary') }}">
                            <button
                                class="w-full bg-gradient-to-r from-[#9d6e2a] to-[#601042] text-white py-3 px-4 rounded-lg hover:opacity-90 transition duration-300 font-semibold">
                                SAVE AND CONTINUE
                            </button>
                        </a>
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
                    <div class="flex space-x-4 mb-4">
                        <img src="https://via.placeholder.com/80" alt="Product" class="w-20 h-20 object-cover rounded-md">
                        <div>
                            <h3 class="font-semibold text-[#601042]">Gold Luminary Fancy Gold Chain</h3>
                            <p class="text-sm text-gray-600">Metal Purity: 18 KT</p>
                            <p class="text-sm text-gray-600">Weight: 6.320 g</p>
                            <p class="text-sm text-gray-600">Product Code: GN20907</p>
                            <div class="mt-2">
                                <span class="font-semibold text-gray-900">₹33,658</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Total Price:</span>
                            <span class="text-gray-900 font-semibold">₹33,658</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Delivery Charges:</span>
                            <span class="text-gray-900 font-semibold">₹70</span>
                        </div>
                        <hr class="my-2">
                        <div class="flex justify-between">
                            <span class="text-gray-900 font-semibold">Order Total:</span>
                            <span class="text-gray-900 font-semibold">₹33,728</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
