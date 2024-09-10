@extends('components.main')
@section('content')

          <div class="z-50 lg:hidden flex items-center justify-between fixed w-full top-0 bg-white px-4 py-2 border-b">
              <h2 class="text-base text-gray-900 pt-2 lg:pt-0">Filter</h2>
              <span class="cursor-pointer text-black text-xs lg:text-[11px] lg:font-medium lg:uppercase lg:tracking-widest border-b border-black leading-3">Clear all</span>
          </div>
<div class="desktop-filter lg:bg-gradient-to-r rtl:lg:bg-gradient-to-l from-[#4C217D] to-primary bg-white lg:static fixed top-0 left-0 w-full lg:h-auto h-full lg:transform-none duration-700 z-[51] lg:before:hidden before:bg-primary-light before:w-36 before:h-full before:absolute before:top-0 before:left-0 rtl:before:right-0 translate-x-full rtl:-translate-x-full">
  <div class="container px-0 lg:px-4 overflow-auto fixed top-[49px] bottom-[52px] lg:static lg:overflow-visible">
    <div class="lg:bg-purple-500 lg:flex">


      <div class="h-11 hidden lg:flex items-center pr-[18px] bg-[#4C217D] text-white border-r border-white/10">
        <svg width="15" height="11" viewBox="0 0 15 11" fill="currentColor">
            <rect y="1.5" width="8" height="1.5" rx="0.75"></rect>
            <rect width="8" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 15 7.5)"></rect>
            <rect x="12" y="1.5" width="3" height="1.5" rx="0.75"></rect>
            <rect width="3" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 3 7.5)"></rect>
            <rect x="9" y="4.5" width="4.5" height="1.5" rx="0.75" transform="rotate(-90 9 4.5)"></rect>
            <rect width="4.5" height="1.5" rx="0.75" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 6 10.5)"></rect>
        </svg>
    </div>
      <!-- Filter Items -->
      <div class="hidden lg:block flex-auto max-w-[270px] border-r border-white/10">
        <div class="relative z-40 filterWrapper">
          <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 w-36 lg:w-full text-sm lg:border-b-0 border-b bg-primary-light lg:bg-transparent lg:text-white lg:text-xs lg:font-light lg:uppercase lg:tracking-wider" data-dropdown-target="price-dropdown">
            <span class="inline-block pt-1.5 lg:pt-0 mt-px lg:mt-0 capitalize">Price</span>
            <span class="ml-auto hidden lg:inline-flex">
              <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
              </svg>
            </span>
          </div>
          <!-- Price Dropdown -->
          <div id="price-dropdown" class="absolute hidden bg-white border border-gray-300 w-full z-40">
            <ul class="text-sm px-3.5 py-2">
              <li class="py-1.5 cursor-pointer">Option 1</li>
              <li class="py-1.5 cursor-pointer">Option 2</li>
              <li class="py-1.5 cursor-pointer">Option 3</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Repeat for other filters -->
      <!-- Metal Type -->
      <div class="hidden lg:block flex-auto max-w-[270px] border-r border-white/10">
        <div class="relative z-40 filterWrapper">
          <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 w-36 lg:w-full text-sm lg:border-b-0 border-b bg-primary-light lg:bg-transparent lg:text-white lg:text-xs lg:font-light lg:uppercase lg:tracking-wider" data-dropdown-target="metal-type-dropdown">
            <span class="inline-block pt-1.5 lg:pt-0 mt-px lg:mt-0 capitalize">Metal Type</span>
            <span class="ml-auto hidden lg:inline-flex">
              <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
              </svg>
            </span>
          </div>
          <!-- Metal Type Dropdown -->
          <div id="metal-type-dropdown" class="absolute hidden bg-white border border-gray-300 w-full z-40">
            <ul class="text-sm px-3.5 py-2">
              <li class="py-1.5 cursor-pointer">Option 1</li>
              <li class="py-1.5 cursor-pointer">Option 2</li>
              <li class="py-1.5 cursor-pointer">Option 3</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Shop For -->
      <div class="hidden lg:block flex-auto max-w-[270px] border-r border-white/10">
        <div class="relative z-40 filterWrapper">
          <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 w-36 lg:w-full text-sm lg:border-b-0 border-b bg-primary-light lg:bg-transparent lg:text-white lg:text-xs lg:font-light lg:uppercase lg:tracking-wider" data-dropdown-target="shop-for-dropdown">
            <span class="inline-block pt-1.5 lg:pt-0 mt-px lg:mt-0 capitalize">Shop For</span>
            <span class="ml-auto hidden lg:inline-flex">
              <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
              </svg>
            </span>
          </div>
          <!-- Shop For Dropdown -->
          <div id="shop-for-dropdown" class="absolute hidden bg-white border border-gray-300 w-full z-40">
            <ul class="text-sm px-3.5 py-2">
              <li class="py-1.5 cursor-pointer">Option 1</li>
              <li class="py-1.5 cursor-pointer">Option 2</li>
              <li class="py-1.5 cursor-pointer">Option 3</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Gifts -->
      <div class="hidden lg:block flex-auto max-w-[270px] border-r border-white/10">
        <div class="relative z-40 filterWrapper">
          <div class="filter-dropdown flex items-center cursor-pointer px-4 py-3 lg:py-3.5 w-36 lg:w-full text-sm lg:border-b-0 border-b bg-primary-light lg:bg-transparent lg:text-white lg:text-xs lg:font-light lg:uppercase lg:tracking-wider" data-dropdown-target="gifts-dropdown">
            <span class="inline-block pt-1.5 lg:pt-0 mt-px lg:mt-0 capitalize">Gifts</span>
            <span class="ml-auto hidden lg:inline-flex">
              <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
              </svg>
            </span>
          </div>
          <!-- Gifts Dropdown -->
          <div id="gifts-dropdown" class="absolute hidden bg-white border border-gray-300 w-full z-40">
            <ul class="text-sm px-3.5 py-2">
              <li class="py-1.5 cursor-pointer">Option 1</li>
              <li class="py-1.5 cursor-pointer">Option 2</li>
              <li class="py-1.5 cursor-pointer">Option 3</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', () => {
  let activeDropdown = null;

  document.querySelectorAll('.filter-dropdown').forEach(dropdown => {
    dropdown.addEventListener('click', (event) => {
      // Get the target dropdown menu
      const targetId = dropdown.getAttribute('data-dropdown-target');
      const targetDropdown = document.getElementById(targetId);

      // Check if this dropdown is already active
      if (activeDropdown === targetDropdown) {
        // Close the active dropdown if it was already open
        targetDropdown.classList.add('hidden');
        activeDropdown = null;
      } else {
        // Close the previously active dropdown if any
        if (activeDropdown) {
          activeDropdown.classList.add('hidden');
        }
        // Open the clicked dropdown
        targetDropdown.classList.remove('hidden');
        activeDropdown = targetDropdown;
      }

      // Prevent the click event from bubbling up to document
      event.stopPropagation();
    });
  });

  // Close all dropdowns when clicking outside
  document.addEventListener('click', () => {
    if (activeDropdown) {
      activeDropdown.classList.add('hidden');
      activeDropdown = null;
    }
  });
});

</script>




{{-- Sort by Start --}}
<div class="sort-outer lg:col-span-2 col-span-3 lg:ltr:text-right lg:rtl:text-left lg:relative fixed w-full left-0 bottom-0 lg:transform-none duration-700 ease-in-out lg:z-30">
  <div class="relative lg:inline-block text-black ltr:text-left rtl:text-right">
      <!-- Button to toggle dropdown -->
      <div id="sortButton" class="lg:flex items-center px-3.5 py-2 leading-[17px] cursor-pointer bg-white border text-[13px] max-w-full w-[267px] border-b-0 border-white">
          Sort by
          <span class="ltr:ml-auto rtl:mr-auto">
              <svg width="11" height="7" viewBox="0 0 11 7" fill="currentColor" class="duration-500">
                  <path d="M0 1.11329L5.50119 7L11 1.11329L9.9602 0L5.50119 4.77342L1.0398 0L0 1.11329Z"></path>
              </svg>
          </span>
      </div>

      <!-- Dropdown menu -->
      <div id="sortDropdown" class="lg:absolute z-30 w-full bg-white lg:border border-black lg:hidden hidden">
          <div class="flex items-center justify-between lg:hidden px-4 pt-3 pb-2 border-b">
              <h6>Sort By</h6>
              <svg width="18" height="18" viewBox="0 0 18 18" fill="currentColor" class="w-3 h-3 cursor-pointer" id="closeDropdown">
                  <path d="M1.38461 18L0 16.6154L7.61538 9L0 1.38461L1.38461 0L9 7.61538L16.6154 0L18 1.38461L10.3846 9L18 16.6154L16.6154 18L9 10.3846L1.38461 18Z"></path>
              </svg>
          </div>
          <ul class="text-[13px] lg:px-3.5 px-4 py-3.5">
              <li class="py-1.5">
                  <span class="inline-flex cursor-pointer relative lg:ltr:pl-0 lg:rtl:pr-0 ltr:pl-6 rtl:pr-6 lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:inline-block before:absolute before:top-0 ltr:before:left-0 rtl:before:right-0 before:bg-clip-content before:bg-white before:p-0.5 before:bg-white before:border-[#DCDCDC]">
                      Popularity
                  </span>
              </li>
              <li class="py-1.5">
                  <span class="inline-flex cursor-pointer relative lg:ltr:pl-0 lg:rtl:pr-0 ltr:pl-6 rtl:pr-6 lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:inline-block before:absolute before:top-0 ltr:before:left-0 rtl:before:right-0 before:bg-clip-content before:bg-white before:p-0.5 before:bg-white before:border-[#DCDCDC]">
                      Newly Listed
                  </span>
              </li>
              <li class="py-1.5">
                  <span class="inline-flex cursor-pointer relative lg:ltr:pl-0 lg:rtl:pr-0 ltr:pl-6 rtl:pr-6 lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:inline-block before:absolute before:top-0 ltr:before:left-0 rtl:before:right-0 before:bg-clip-content before:bg-white before:p-0.5 before:bg-white before:border-[#DCDCDC]">
                      Price - High to Low
                  </span>
              </li>
              <li class="py-1.5">
                  <span class="inline-flex cursor-pointer relative lg:ltr:pl-0 lg:rtl:pr-0 ltr:pl-6 rtl:pr-6 lg:before:hidden before:w-4 before:h-4 before:border before:border-2 before:rounded-full before:inline-block before:absolute before:top-0 ltr:before:left-0 rtl:before:right-0 before:bg-clip-content before:bg-white before:p-0.5 before:bg-white before:border-[#DCDCDC]">
                      Price - Low to High
                  </span>
              </li>
          </ul>
      </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const sortButton = document.getElementById('sortButton');
      const sortDropdown = document.getElementById('sortDropdown');
      const closeDropdown = document.getElementById('closeDropdown');

      // Toggle dropdown on button click
      sortButton.addEventListener('click', function () {
          sortDropdown.classList.toggle('hidden');
      });

      // Close dropdown on close button click
      closeDropdown.addEventListener('click', function () {
          sortDropdown.classList.add('hidden');
      });

      // Optional: Close dropdown if clicking outside of it
      document.addEventListener('click', function (event) {
          if (!sortButton.contains(event.target) && !sortDropdown.contains(event.target)) {
              sortDropdown.classList.add('hidden');
          }
      });
  });
</script>

{{-- Sort by End --}}





<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
  <!-- Image 1 -->
  <div class="text-center">
    <img src="{{ asset('assets/img/earring.webp') }}" alt="Rainbow Radiance Diamond Ladies Ring" class="w-full h-65 object-cover mb-2">
    <div class="flex justify-between items-center mb-1">
      <span class="text-lg font-semibold text-gray-900">₹21,481</span>
      <span class="text-sm text-gray-500 line-through">₹22,589</span>
    </div>
    <h3 class="text-sm font-medium text-gray-700">Rainbow Radiance Diamond Ladies Ring</h3>
  </div>

  <!-- Image 2 -->
  <div class="text-center">
    <img src="{{ asset('assets/img/earring.webp') }}" alt="Ina Cluster Diamond Ring" class="w-full h-65 object-cover mb-2">
    <div class="flex justify-between items-center mb-1">
      <span class="text-lg font-semibold text-gray-900">₹1,78,631</span>
      <span class="text-sm text-gray-500 line-through">₹1,81,752</span>
    </div>
    <h3 class="text-sm font-medium text-gray-700">Ina Cluster Diamond Ring</h3>
  </div>

  <!-- Image 3 -->
  <div class="text-center">
    <img src="{{ asset('assets/img/earring.webp') }}" alt="Infinity Yellow Gold & Diamond Ring for Women" class="w-full h-65 object-cover mb-2">
    <div class="flex justify-between items-center mb-1">
      <span class="text-lg font-semibold text-gray-900">₹61,451</span>
      <span class="text-sm text-gray-500 line-through">₹63,067</span>
    </div>
    <h3 class="text-sm font-medium text-gray-700">Infinity Yellow Gold & Diamond Ring for Women</h3>
  </div>

  <!-- Image 4 -->
  <div class="text-center">
    <img src="{{ asset('assets/img/earring.webp') }}" alt="Unity Yellow Gold Eight Diamond Ring for Women" class="w-full h-65 object-cover mb-2">
    <div class="flex justify-between items-center mb-1">
      <span class="text-lg font-semibold text-gray-900">₹18,767</span>
      <span class="text-sm text-gray-500 line-through">₹19,567</span>
    </div>
    <h3 class="text-sm font-medium text-gray-700">Unity Yellow Gold Eight Diamond Ring for Women</h3>
  </div>
</div>


<div class="lg:hidden fixed bottom-0 left-0 w-full z-50">
  <div class="grid grid-flow-col auto-cols-fr text-white">
      <div class="bg-primary uppercase text-sm py-4 flex items-center justify-center border-white ltr:border-r rtl:border-l leading-none">
          <svg width="16" height="12" viewBox="0 0 16 12" fill="currentColor">
              <path d="M3.93132 11.9999C3.63132 11.9999 3.36466 11.7665 3.36466 11.4332V1.7332L0.89799 3.7332C0.664657 3.9332 0.29799 3.89987 0.131324 3.66654C-0.0686762 3.4332 -0.0353429 3.06654 0.19799 2.89987L3.56466 0.166536L3.59799 0.133203C3.66466 0.0998699 3.76466 0.0665365 3.83132 0.0332031C3.86466 0.0332031 3.89799 0.0332031 3.93132 0.0332031C4.03132 0.0332031 4.16466 0.0665365 4.26466 0.166536L7.63132 2.89987C7.76466 2.99987 7.83132 3.16654 7.83132 3.3332C7.83132 3.46654 7.79799 3.56654 7.69799 3.66654C7.49799 3.89987 7.16466 3.9332 6.93132 3.7332L4.46466 1.7332V11.4332C4.49799 11.7332 4.23132 11.9999 3.93132 11.9999Z"></path>
              <path d="M11.2314 12C11.0981 12 10.9648 11.9667 10.8981 11.8667L7.4981 9.13333C7.36476 9.03333 7.2981 8.86667 7.2981 8.7C7.2981 8.56667 7.33143 8.46667 7.43143 8.36667C7.63143 8.13333 7.96476 8.1 8.1981 8.3L10.6648 10.3V0.566667C10.6648 0.266667 10.8981 0 11.2314 0C11.5314 0 11.7981 0.233333 11.7981 0.566667V10.2667L14.2648 8.26667C14.4981 8.06667 14.8648 8.1 15.0314 8.33333C15.2314 8.56667 15.1981 8.93333 14.9648 9.1L11.5981 11.8333L11.5648 11.8667C11.4981 11.9 11.3981 11.9333 11.3314 11.9667C11.2981 12 11.2648 12 11.2314 12Z"></path>
          </svg>
          <span class="ltr:ml-2 rtl:mr-2 lg:pt-0 pt-1">Sort</span>
      </div>
      <div class="bg-purple-500 uppercase text-sm py-4 flex items-center justify-center leading-none">
          <svg width="15" height="11" viewBox="0 0 15 11" fill="currentColor">
              <rect y="1.5" width="8" height="1.5" rx="0.75"></rect>
              <rect width="8" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 15 7.5)"></rect>
              <rect x="12" y="1.5" width="3" height="1.5" rx="0.75"></rect>
              <rect width="3" height="1.5" rx="0.75" transform="matrix(-1 0 0 1 3 7.5)"></rect>
              <rect x="9" y="4.5" width="4.5" height="1.5" rx="0.75" transform="rotate(-90 9 4.5)"></rect>
              <rect width="4.5" height="1.5" rx="0.75" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 6 10.5)"></rect>
          </svg>
          <span class="ltr:ml-2 rtl:mr-2 lg:pt-0 pt-1">Filter</span>
      </div>
  </div>
</div>






@endsection
