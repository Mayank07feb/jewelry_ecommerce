@extends('components.main')
@section('content')
    <!-- Header Section -->
    <!-- Header Section -->
    {{-- <div class="grid grid-cols-[auto_1fr] items-center bg-white pb-0 px-4 py-2 shadow-md">
  <!-- Logo Section -->
  <div class="relative flex items-center xl:max-w-xs lg:max-w-[200px] max-w-[65px] py-1.5">
    <a href="/" class="inline-flex">
      <img src="https://d1put4x3vjlh9s.cloudfront.net/public/uploads/website/png_logo_1675677572.svg" 
           width="55" 
           height="83" 
           alt="Logo" 
           class="h-14 lg:h-auto">
    </a>
  </div>
  <!-- Contact Section -->
  <div class="flex justify-end items-center">
    <a href="tel:+918806907567" class="hidden lg:inline-flex items-center text-gray-900 font-light text-[15px]">
      <svg width="24" height="24" viewBox="0 0 15 15" fill="currentColor" class="mr-3.5">
        <path d="M7.52459 0C3.40454 0 0.0515467 3.34579 0.0503194 7.45822C0.0503194 8.76862 0.395191 10.057 1.04812 11.1873L1.05425 11.1984L1.05057 11.2106L0 15.0401L3.93964 14.009L3.95068 14.0151C5.04176 14.6091 6.27642 14.9226 7.52336 14.9226C11.6459 14.9226 15.0001 11.5768 15.0013 7.46312C15.0025 5.47059 14.2257 3.59562 12.8143 2.18603C11.4016 0.777664 9.52386 0.00122467 7.52459 0ZM7.52459 13.7199H7.52213C6.3967 13.7199 5.29335 13.4175 4.33115 12.848L4.11392 12.7194L1.71331 13.3476L2.35396 11.0122L2.21283 10.7881C1.58567 9.79244 1.2543 8.64125 1.2543 7.45945C1.25553 4.01078 4.06851 1.20385 7.52581 1.20385C9.19985 1.20385 10.7745 1.85537 11.9576 3.0384C13.1407 4.2202 13.7924 5.79268 13.7924 7.46435C13.7924 10.913 10.9807 13.7199 7.52459 13.7199Z"></path>
        <path d="M4.86762 4.03027C4.78539 4.03027 4.57552 4.05232 4.3902 4.2544L4.35338 4.29359C4.15456 4.50548 3.74219 4.94516 3.74219 5.79391C3.74219 6.61204 4.27238 7.40568 4.50066 7.70942C4.50802 7.71922 4.5203 7.73514 4.53625 7.75841C5.06154 8.5104 6.17101 9.8711 7.69409 10.5276C8.11997 10.7113 8.4587 10.8252 8.76062 10.9207C9.23558 11.0714 9.65409 11.0346 9.92778 10.9942C10.2727 10.9428 11.0176 10.5496 11.1698 10.1246C11.322 9.69841 11.3232 9.33099 11.2815 9.26118C11.2484 9.20606 11.1649 9.16564 11.0373 9.10441C11.0054 9.08849 10.971 9.07256 10.9342 9.05419C10.7488 8.96111 9.82469 8.50796 9.65532 8.44672C9.49086 8.3867 9.38286 8.35854 9.26995 8.52878C9.13863 8.72596 8.76676 9.16075 8.67348 9.26607C8.55198 9.40447 8.42802 9.41917 8.23042 9.31996C8.19974 9.30527 8.15924 9.2869 8.10769 9.26485C7.85119 9.1534 7.31854 8.92314 6.71594 8.3867C6.1747 7.90415 5.8016 7.31382 5.66659 7.08235C5.54386 6.87169 5.66537 6.75167 5.75373 6.66348C5.80896 6.60837 5.87401 6.52999 5.9366 6.45283C5.96851 6.41363 6.00165 6.37444 6.03356 6.3377C6.11088 6.24829 6.14401 6.17971 6.19065 6.0854L6.21765 6.03151C6.27779 5.91149 6.24097 5.80861 6.2017 5.73145C6.16979 5.66776 5.99674 5.24645 5.8286 4.83983C5.74882 4.64632 5.67396 4.46261 5.62241 4.33891C5.50091 4.04864 5.38677 4.03762 5.2849 4.03762C5.27509 4.03762 5.26649 4.03762 5.2579 4.03762C5.24809 4.03762 5.23704 4.03762 5.22722 4.03762C5.10817 4.0315 4.97317 4.03027 4.86762 4.03027Z"></path>
      </svg>
      +91 8806907567
    </a>
  </div>
</div> --}}

    <!-- Main Content Section -->
    <div class="flex flex-col lg:flex-row lg:gap-x-8 lg:px-8 px-4 py-5">
        <!-- Shopping Cart Section -->
        <div class="bg-white lg:w-2/3 border-b lg:border-0">
            <div class="hidden lg:block border-b px-4 py-5">
                <h2
                    class="text-lg font-light text-black relative before:absolute before:bottom-0 before:bg-black/80 leading-none before:w-8 before:h-0.5 pb-1.5">
                    Shopping Cart
                </h2>
            </div>
            <div class="px-4">
                <div
                    class="border-b border-gray-200 last:border-b-0 grid gap-x-5 py-6 items-start lg:grid-cols-[125px_1fr] grid-cols-[115px_1fr]">
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
                                    class="text-primary underline text-xs">Change</a>


                                <div class="flex items-center space-x-2">
                                    <!-- Mini Bus SVG -->
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="text-primary">
                                        <path
                                            d="M4 16V11C4 9.34315 5.34315 8 7 8H17C18.6569 8 20 9.34315 20 11V16M4 16H20M4 16L2 20H5M20 16L22 20H19M7 20H9M15 20H17"
                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="7.5" cy="16.5" r="1.5" fill="black" />
                                        <circle cx="16.5" cy="16.5" r="1.5" fill="black" />
                                    </svg>

                                    <!-- Text or Action -->
                                    <span class="text-sm text-gray-600">Delivery by - 30th Sep</span>
                                </div>




                                <div class="flex justify-between items-center lg:mt-4">
                                    <!-- Button for "Move to Wishlist" -->
                                    <button type="button"
                                        class="border bg-[#8a1960c5] text-white px-4 pt-2 lg:pt-1.5 pb-1.5 hover:bg-[#7c3161fb] hover:text-white transition">
                                        Move to Wishlist
                                    </button>

                                    <!-- Delete Section for larger screens -->
                                    <div
                                        class="hidden lg:flex items-center text-[11px] cursor-pointer uppercase tracking-[0.2em] lg:-mt-2">
                                        <!-- SVG Icon -->
                                        <svg width="13" height="17" viewBox="0 0 13 17" fill="currentColor"
                                            class="mr-2 rtl:ml-2">
                                            <path d="M1.49981 16C1.09981 8.8 7.33314 6 10.4998 5.5L11 16H1.49981Z"
                                                fill="#EED2E8"></path>
                                            <path
                                                d="M11.4586 16.6663H1.04285V4.68626H2.08251V15.6266H10.4189V4.68626H11.4586V16.6663ZM0 2.61011H12.5014V3.64977H0V2.61011Z"
                                                fill="black"></path>
                                            <path
                                                d="M8.85436 3.6436H3.64648V0H8.85436V3.6436ZM4.68615 2.61029H7.81469V1.03967H4.68615V2.61029ZM4.16791 6.25072H5.20757V13.5411H4.16791V6.25072ZM7.29327 6.25072H8.33293V13.5411H7.29327V6.25072Z"
                                                fill="black"></path>
                                        </svg>

                                        <!-- Delete Text -->
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
                                    class="w-16 text-center border border-gray-300 rounded-md bg-white outline-none focus:ring-2 focus:ring-purple-300">
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
            <h5 class="text-lg font-semibold text-gray-800 mb-4">Order Summary</h5>
            <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Subtotal</span>
                <span class="text-gray-800 font-medium">₹23,666</span>
            </div>
            <div class="flex justify-between text-sm mb-2">
                <span class="text-gray-600">Delivery Charge</span>
                <span class="text-gray-800 font-medium">Free</span>
            </div>
            <div class="flex justify-between text-lg font-bold border-t border-gray-200 pt-4 mt-4">
                <span>Total</span>
                <span class="text-gray-800">₹23,666</span>
            </div>
            <div class="mt-6">


                <div class="lg:px-8">
                    <!-- Mobile View: Hidden on Large Screens -->
                    <div class="lg:hidden flex items-center justify-between text-xs bg-[#F9F7F2] pt-4 pb-2.5 px-4">
                        <div class="text-gray-900 text-base">
                            Total: <span class="font-bold">₹1,06,496</span>
                        </div>
                        <div class="text-primary uppercase font-bold">
                            View summary
                        </div>
                    </div>

                    <!-- Button -->
                    <button
                        class="bg-[#8a1960c5] text-white w-full lg:mb-8 min-h-[50px] py-2 px-4 rounded-md font-semibold  hover:bg-[#7c3161fb] transition duration-300">
                        Place Order
                    </button>
                </div>
            </div>










            <div class="flex items-center justify-center text-xs font-light mt-6 mb-4 lg:hidden">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="currentColor" class="mr-2">
                    <path
                        d="M10.5 15H1.5C1.10218 15 0.720644 14.842 0.43934 14.5607C0.158035 14.2794 0 13.8978 0 13.5V8C0 7.60218 0.158035 7.22064 0.43934 6.93934C0.720644 6.65804 1.10218 6.5 1.5 6.5H10.5C10.8978 6.5 11.2794 6.65804 11.5607 6.93934C11.842 7.22064 12 7.60218 12 8V13.5C12 13.8978 11.842 14.2794 11.5607 14.5607C11.2794 14.842 10.8978 15 10.5 15ZM1.5 7.5C1.36739 7.5 1.24021 7.55268 1.14645 7.64645C1.05268 7.74021 1 7.86739 1 8V13.5C1 13.6326 1.05268 13.7598 1.14645 13.8536C1.24021 13.9473 1.36739 14 1.5 14H10.5C10.6326 14 10.7598 13.9473 10.8536 13.8536C10.9473 13.7598 11 13.6326 11 13.5V8C11 7.86739 10.9473 7.74021 10.8536 7.64645C10.7598 7.55268 10.6326 7.5 10.5 7.5H1.5Z"
                        fill="#424242"></path>
                    <path
                        d="M10 7.5H2C1.86739 7.5 1.74021 7.44732 1.64645 7.35355C1.55268 7.25979 1.5 7.13261 1.5 7V4C1.5 2.93913 1.92143 1.92172 2.67157 1.17157C3.42172 0.421427 4.43913 0 5.5 0H6.5C7.56087 0 8.57828 0.421427 9.32843 1.17157C10.0786 1.92172 10.5 2.93913 10.5 4V7C10.5 7.13261 10.4473 7.25979 10.3536 7.35355C10.2598 7.44732 10.1326 7.5 10 7.5ZM2.5 6.5H9.5V4C9.5 3.20435 9.18393 2.44129 8.62132 1.87868C8.05871 1.31607 7.29565 1 6.5 1H5.5C4.70435 1 3.94129 1.31607 3.37868 1.87868C2.81607 2.44129 2.5 3.20435 2.5 4V6.5Z"
                        fill="#424242"></path>
                    <path
                        d="M6 11C5.80222 11 5.60888 10.9414 5.44443 10.8315C5.27998 10.7216 5.15181 10.5654 5.07612 10.3827C5.00043 10.2 4.98063 9.99889 5.01922 9.80491C5.0578 9.61093 5.15304 9.43275 5.29289 9.29289C5.43275 9.15304 5.61093 9.0578 5.80491 9.01922C5.99889 8.98063 6.19996 9.00043 6.38268 9.07612C6.56541 9.15181 6.72159 9.27998 6.83147 9.44443C6.94135 9.60888 7 9.80222 7 10C7 10.2652 6.89464 10.5196 6.70711 10.7071C6.51957 10.8946 6.26522 11 6 11Z"
                        fill="#424242"></path>
                    <path d="M6.5 10.5H5.5V12.5H6.5V10.5Z" fill="#424242"></path>
                </svg>
                Secure Payment
            </div>

            <img src="/images/payment-gateways.webp" alt="Payment gateways"
                class="mx-auto mb-8 w-[265px] h-[39px] object-contain">
        </div>
    </div>


    <!-- Separator Section -->
    <div class="relative flex justify-center my-6">
        <div class="bg-gray-50 inline-flex relative z-10 px-4 py-2 rounded-lg shadow-sm">
            <svg fill="none" height="27" viewBox="0 0 40 27" width="40" xmlns="http://www.w3.org/2000/svg"
                class="w-[30px] h-5 md:w-10 md:h-[27px]">
                <path
                    d="M26.8148 0C24.3176 0 21.9913 0.722302 19.9998 1.95816C18.0106 0.722302 15.6833 0 13.1862 0C5.90396 0 0 6.04334 0 13.4994C0 20.9547 5.90396 27 13.1862 27C15.6833 27 18.0106 26.2745 19.9998 25.0399C21.9916 26.2745 24.3176 27 26.8148 27C34.0967 27 40 20.9547 40 13.4994C40 6.04366 34.0967 0 26.8148 0ZM13.1862 25.4596C6.73416 25.4596 1.50296 20.1045 1.50296 13.4997C1.50296 6.89363 6.73416 1.53749 13.1862 1.53749C15.1552 1.53749 17.007 2.04275 18.635 2.9224C15.5895 5.3954 13.6289 9.21055 13.6289 13.4997C13.6289 17.7885 15.5879 21.6027 18.635 24.076C17.0067 24.9566 15.1552 25.4596 13.1862 25.4596ZM19.9998 3.79664C22.9447 5.97025 24.8682 9.50069 24.8682 13.4994C24.8682 17.498 22.9443 21.0291 19.9998 23.2005C17.056 21.0291 15.1328 17.4977 15.1328 13.4994C15.1325 9.50069 17.056 5.96993 19.9998 3.79664ZM26.8148 25.4596C24.846 25.4596 22.9936 24.9566 21.3656 24.0757C24.4121 21.6027 26.3718 17.7882 26.3718 13.4994C26.3718 9.21023 24.4121 5.39508 21.3656 2.92208C22.9936 2.04243 24.8454 1.53717 26.8148 1.53717C33.2671 1.53717 38.4964 6.89331 38.4964 13.4994C38.4964 20.1041 33.2671 25.4596 26.8148 25.4596Z"
                    fill="url(#paint0_linear_2869_1410.0663797938166)"></path>
                <defs>
                    <linearGradient gradientUnits="userSpaceOnUse" id="paint0_linear_2869_1410.0663797938166" x1="19.9998"
                        x2="19.9998" y1="27.0001" y2="5.79359e-05">
                        <stop stop-color="#DFAE26"></stop>
                        <stop offset="0.2251" stop-color="#925924"></stop>
                        <stop offset="0.8159" stop-color="#FBE284"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="absolute top-1/2 left-0 w-full h-px bg-gray-300"></div>
    </div>

    <!-- Footer Section -->
    <div class="text-xs text-center px-4 py-7 bg-gray-100">
        <div>© 2024 PNG Jewellery. All rights reserved.</div>
    </div>
@endsection
