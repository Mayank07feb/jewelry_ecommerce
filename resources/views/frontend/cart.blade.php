@extends('components.main')
@section('content')
    <div class="bg-gradient-to-b from-gray-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-[#601042] mb-6 sm:mb-10 relative inline-block">
                <i class="material-icons align-middle mr-2">shopping_cart</i>Shopping Cart
                <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-[#601042]"></span>
            </h1>

            <div class="flex flex-col lg:flex-row lg:gap-x-12">
                <!-- Shopping Cart Section -->
                <div class="lg:w-2/3 mb-8 lg:mb-0">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
                        <div class="p-4 sm:p-6">
                            <div
                                class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-6 pb-6 border-b border-gray-200">
                                <div
                                    class="w-full sm:w-32 h-32 bg-[#f0e7da] rounded-lg overflow-hidden flex-shrink-0 shadow-md">
                                    <img src="{{asset('asset/img/daimond.png')}}" alt="Product image"
                                        class="w-full h-full object-contain">
                                </div>
                                <div class="flex-1 space-y-2 w-full">
                                    <h3 class="text-lg sm:text-xl font-semibold text-gray-900">Elegant Gold Ring</h3>
                                    <div class="flex flex-wrap gap-2 text-xs sm:text-sm text-gray-600">
                                        <span class="bg-gray-100 px-2 py-1 rounded">Product Code: GN20907</span>
                                        <span class="bg-gray-100 px-2 py-1 rounded">18K Gold</span>
                                        <span class="bg-gray-100 px-2 py-1 rounded">Metal Type: Gold</span>
                                        <span class="bg-gray-100 px-2 py-1 rounded">Weight: 10g</span>
                                    </div>
                                    <div
                                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between mt-4 space-y-4 sm:space-y-0">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <button
                                                    class="px-2 py-1 text-gray-600 hover:text-[#601042] focus:outline-none"
                                                    onclick="updateQuantity(-1)">
                                                    <i class="material-icons">remove</i>
                                                </button>
                                                <span id="quantity"
                                                    class="px-2 py-1 border-x border-gray-300 min-w-[30px] text-center">1</span>
                                                <button
                                                    class="px-2 py-1 text-gray-600 hover:text-[#601042] focus:outline-none"
                                                    onclick="updateQuantity(1)">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            </div>
                                            <button type="button"
                                                class="text-sm bg-[#601042] hover:bg-[#740e4d] font-medium text-white transition duration-150 ease-in-out flex items-center px-2 py-1 rounded">
                                                <i class="material-icons mr-1">delete</i>
                                                Delete
                                            </button>
                                        </div>
                                        <p class="text-xl font-medium text-[#601042]">₹23,666</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Order Summary Section -->
                <div class="lg:w-1/3">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 sticky top-4">
                        <div class="p-6">
                            <h2 class="text-xl sm:text-2xl font-semibold text-[#601042] mb-6 flex items-center">
                                <i class="material-icons mr-2">receipt</i>Order Summary
                            </h2>
                            <div class="flow-root">
                                <dl class="-my-4 text-sm divide-y divide-gray-200">
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Subtotal</dt>
                                        <dd id="subtotal" class="font-medium text-gray-900">₹23,666</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Delivery Charge</dt>
                                        <dd class="font-medium text-green-600">Free</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600">Discount</dt>
                                        <dd id="discount" class="font-medium text-gray-900">- ₹0</dd>
                                    </div>
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-lg font-medium text-gray-900">Total</dt>
                                        <dd id="total" class="text-lg font-medium text-[#601042]">₹23,666</dd>
                                    </div>
                                </dl>
                            </div>

                            <!-- Coupon Section -->
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Available Coupons</h3>
                                <div id="couponList" class="space-y-2"></div>
                                <div class="mt-4">
                                    <div class="flex items-center border border-gray-300 rounded-md">
                                        <input type="text" id="coupon"
                                            class="flex-grow border-none rounded-l-md p-2 focus:ring-2 focus:ring-[#601042]"
                                            placeholder="Enter coupon code">
                                        <button onclick="applyCoupon()"
                                            class="bg-[#601042] text-white px-4 py-2 rounded-r-md hover:bg-[#740e4d] transition">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-50">
                            <a href="{{route('checkout')}}">
                                <button type="submit"
                                    class="w-full bg-[#601042] border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-[#740e4d] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#601042] transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                                    Check Out
                                    <i class="fa fa-arrow-right ml-2"></i>
                                </button>
                            </a>
                            
                            <p class="mt-4 text-center text-xs sm:text-sm text-gray-500">By placing your order, you agree to
                                our <a href="#" class="font-medium text-[#9d6e2a] hover:text-[#601042]">Terms and
                                    Conditions</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Horizontal line with logo -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            <div class="flex items-center">
                <div class="flex-grow h-px bg-[#9d6e2a]"></div>
                <div class="mx-4">
                    <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-12 sm:h-16 w-auto drop-shadow-md">
                </div>
                <div class="flex-grow h-px bg-[#9d6e2a]"></div>
            </div>
        </div>
    </div>

    <script>
        const subtotalAmount = 23666;
        const maxDiscount = 5000;
        const availableCoupons = [{
                code: 'SAVE500',
                discount: 500,
                description: 'Save ₹500 on your order'
            },
            {
                code: 'SAVE1000',
                discount: 1000,
                description: 'Save ₹1000 on your order'
            },
            {
                code: 'SAVE20PERCENT',
                discount: Math.round(subtotalAmount * 0.2),
                description: 'Save 20% on your order'
            }
        ];
        let appliedCoupon = null; // To track the applied coupon

        function updateQuantity(change) {
            const quantityElement = document.getElementById('quantity');
            let quantity = parseInt(quantityElement.textContent) + change;
            if (quantity >= 1 && quantity <= 5) {
                quantityElement.textContent = quantity;
                updateTotal();
            }
        }

        function applyCoupon(code = null) {
            const couponCode = code || document.getElementById('coupon').value.trim().toUpperCase();
            const coupon = availableCoupons.find(c => c.code === couponCode);
            if (coupon) {
                appliedCoupon = coupon; // Save the applied coupon
                const discountAmount = Math.min(coupon.discount, maxDiscount);
                document.getElementById('discount').textContent = `- ₹${discountAmount}`;
                updateTotal(discountAmount);
                showMessage('Coupon applied successfully!');
                renderCoupons(); // Re-render the coupon list with "Remove" button
            } else {
                showMessage('Invalid coupon code.');
            }
        }

        function removeCoupon() {
            if (appliedCoupon) {
                appliedCoupon = null; // Clear the applied coupon
                document.getElementById('discount').textContent = `- ₹0`;
                updateTotal(0);
                showMessage('Coupon removed.');
                renderCoupons(); // Re-render the coupon list to show "Apply" buttons
            }
        }

        function updateTotal(discount = 0) {
            const quantity = parseInt(document.getElementById('quantity').textContent);
            const subtotal = subtotalAmount * quantity;
            const total = subtotal - discount;
            document.getElementById('subtotal').textContent = `₹${subtotal}`;
            document.getElementById('total').textContent = `₹${total}`;
        }

        function showMessage(message) {
            const messageElement = document.createElement('div');
            messageElement.textContent = message;
            messageElement.className = 'fixed top-4 right-4 bg-[#601042] text-white px-4 py-2 rounded shadow-lg';
            document.body.appendChild(messageElement);
            setTimeout(() => messageElement.remove(), 3000);
        }

        function renderCoupons() {
            const couponList = document.getElementById('couponList');
            couponList.innerHTML = ''; // Clear the coupon list
            availableCoupons.forEach(coupon => {
                const couponElement = document.createElement('div');
                couponElement.className = 'flex items-center justify-between bg-gray-100 p-2 rounded';

                if (appliedCoupon && appliedCoupon.code === coupon.code) {
                    couponElement.innerHTML = `
                    <div>
                        <span class="font-semibold">${coupon.code}</span>
                        <p class="text-sm text-gray-600">${coupon.description}</p>
                    </div>
                    <button onclick="removeCoupon()" class="text-red-600 hover:text-red-800 font-medium">
                        Remove
                    </button>
                `;
                } else {
                    couponElement.innerHTML = `
                    <div>
                        <span class="font-semibold">${coupon.code}</span>
                        <p class="text-sm text-gray-600">${coupon.description}</p>
                    </div>
                    <button onclick="applyCoupon('${coupon.code}')" class="text-[#601042] hover:text-[#740e4d] font-medium">
                        Apply
                    </button>
                `;
                }
                couponList.appendChild(couponElement);
            });
        }

        window.onload = renderCoupons;
    </script>
@endsection
