@extends('components.main')
@section('content')
<div class="container mx-auto mt-12 p-6 lg:p-10 bg-white shadow-xl rounded-2xl">
    <h2 class="text-3xl lg:text-4xl font-bold text-center text-[#601042] mb-8">Your Wish List</h2>
    
    {{-- Decorative line with logo --}}
    <div class="flex items-center justify-center w-full mb-10">
        <div class="flex-grow h-px bg-gradient-to-r from-transparent via-[#9d6e2a] to-transparent"></div>
        <div class="mx-4 transform hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-16 w-auto">
        </div>
        <div class="flex-grow h-px bg-gradient-to-r from-transparent via-[#9d6e2a] to-transparent"></div>
    </div>

    <!-- Wishlist Items Container -->
    <div class="space-y-8 wishlist-items">
        <!-- Single Wish List Item -->
        <div class="relative overflow-hidden">
            <div class="flex flex-col lg:flex-row items-center justify-between bg-gradient-to-r from-gray-50 to-white p-6 rounded-xl shadow-md transition duration-300 ease-in-out hover:shadow-lg hover:scale-[1.02]">
                <div class="flex items-center w-full lg:w-auto">
                    <img src="{{asset('asset/img/latest.jpg')}}" alt="Product Image" class="h-32 w-32 rounded-lg object-cover shadow-md">
                    <div class="ml-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Gold Necklace</h3>
                        <p class="text-sm text-gray-600 mb-3">18k Gold, 22 inches</p>
                        <p class="text-2xl font-bold text-[#601042]">$1,200.00</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center mt-6 lg:mt-0 w-full lg:w-auto justify-center lg:justify-end space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="w-full sm:w-auto bg-[#601042] text-white py-3 px-8 rounded-full hover:bg-[#4a0c31] focus:outline-none focus:ring-2 focus:ring-[#601042] focus:ring-opacity-50 transition duration-300 ease-in-out transform hover:scale-105">
                        Add to Cart
                    </button>
                    <button onclick="toggleRemoveConfirmation(this.parentElement.parentElement.parentElement)" class="w-full sm:w-auto text-red-500 hover:text-red-700 focus:outline-none transition duration-300 ease-in-out underline-offset-2 hover:underline">
                        Remove
                    </button>
                </div>
            </div>
            <!-- Remove Confirmation Overlay -->
            <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="text-center">
                    <p class="text-lg font-semibold text-gray-800 mb-4">Are you sure you want to remove this item?</p>
                    <div class="flex justify-center space-x-4">
                        <button onclick="removeItem(this.closest('.relative'))" class="bg-red-500 text-white py-2 px-6 rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300 ease-in-out">
                            Yes, Remove
                        </button>
                        <button onclick="toggleRemoveConfirmation(this.closest('.relative'))" class="bg-gray-300 text-gray-800 py-2 px-6 rounded-full hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50 transition duration-300 ease-in-out">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another Wish List Item -->
        <div class="relative overflow-hidden">
            <div class="flex flex-col lg:flex-row items-center justify-between bg-gradient-to-r from-gray-50 to-white p-6 rounded-xl shadow-md transition duration-300 ease-in-out hover:shadow-lg hover:scale-[1.02]">
                <div class="flex items-center w-full lg:w-auto">
                    <img src="{{asset('asset/img/new.jpg')}}" alt="Product Image" class="h-32 w-32 rounded-lg object-cover shadow-md">
                    <div class="ml-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Diamond Earrings</h3>
                        <p class="text-sm text-gray-600 mb-3">24k Gold, 1 carat</p>
                        <p class="text-2xl font-bold text-[#601042]">$2,500.00</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center mt-6 lg:mt-0 w-full lg:w-auto justify-center lg:justify-end space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="w-full sm:w-auto bg-[#601042] text-white py-3 px-8 rounded-full hover:bg-[#4a0c31] focus:outline-none focus:ring-2 focus:ring-[#601042] focus:ring-opacity-50 transition duration-300 ease-in-out transform hover:scale-105">
                        Add to Cart
                    </button>
                    <button onclick="toggleRemoveConfirmation(this.parentElement.parentElement.parentElement)" class="w-full sm:w-auto text-red-500 hover:text-red-700 focus:outline-none transition duration-300 ease-in-out underline-offset-2 hover:underline">
                        Remove
                    </button>
                </div>
            </div>
            <!-- Remove Confirmation Overlay -->
            <div class="absolute inset-0 bg-white bg-opacity-90 flex items-center justify-center transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="text-center">
                    <p class="text-lg font-semibold text-gray-800 mb-4">Are you sure you want to remove this item?</p>
                    <div class="flex justify-center space-x-4">
                        <button onclick="removeItem(this.closest('.relative'))" class="bg-red-500 text-white py-2 px-6 rounded-full hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition duration-300 ease-in-out">
                            Yes, Remove
                        </button>
                        <button onclick="toggleRemoveConfirmation(this.closest('.relative'))" class="bg-gray-300 text-gray-800 py-2 px-6 rounded-full hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-opacity-50 transition duration-300 ease-in-out">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Empty Wishlist Message -->
    <div class="mt-16 text-center bg-gradient-to-b from-gray-50 to-white p-12 rounded-2xl shadow-md border border-gray-100 empty-message" style="display: none;">
        <svg class="w-24 h-24 mx-auto mb-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
        </svg>
        <h3 class="text-2xl font-semibold text-gray-700 mb-3">Your Wishlist is Empty</h3>
        <p class="text-gray-500 mb-8 max-w-md mx-auto">Explore our exquisite collection and add the jewelry pieces you love to your wishlist.</p>
        <a href="{{route('collection')}}" class="inline-flex items-center px-8 py-3 bg-[#601042] text-white font-medium rounded-full hover:bg-[#4a0c31] focus:outline-none focus:ring-2 focus:ring-[#601042] focus:ring-opacity-50 transition duration-300 ease-in-out transform hover:scale-105">
            Discover Our Collection
            
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
        </a>
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

<script>
function toggleRemoveConfirmation(item) {
    const overlay = item.querySelector('.absolute');
    overlay.classList.toggle('translate-x-full');
}

function removeItem(item) {
    item.classList.add('transform', 'transition-all', 'duration-300', 'ease-in-out', 'opacity-0', 'scale-95');
    setTimeout(() => {
        item.remove();
        // Check if the wishlist is empty and show the empty message if needed
        if (document.querySelectorAll('.wishlist-items .relative').length === 0) {
            document.querySelector('.wishlist-items').style.display = 'none';
            document.querySelector('.empty-message').style.display = 'block';
        }
    }, 300);
}
</script>
@endsection
