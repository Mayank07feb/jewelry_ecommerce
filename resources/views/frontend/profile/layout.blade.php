@extends('components.main')

@section('content')
    @php
        $user = auth()->user();
    @endphp
    <div class="container mx-auto my-10 p-4">
        <!-- Profile Header Section -->
        <div class="shadow-md rounded-lg p-6 bg-gradient-to-r bg-[#601042]">
            <div class="flex items-center space-x-6">
                <div
                    class="w-24 h-24 bg-gray-300 rounded-full flex justify-center items-center text-white text-3xl font-bold">
                    {{$user->first_name[0]}}
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-white">{{$user->first_name.' '.$user->last_name}}</h2>
                    <p class="text-sm text-gray-300">{{$user->email}}</p>
                </div>
            </div>
        </div>

        <!-- Profile Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- Sidebar Section -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <ul class="space-y-4">
                    <!-- Orders Section -->
                    <li class="font-semibold text-gray-700 mb-2 flex items-center">
                        <i class="fas fa-shopping-cart mr-2 text-[#601042]"></i>
                        Orders
                    </li>
                    <li class="ml-6">
                        <a href="{{route('orderhistory')}}" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-list mr-2"></i> My Orders
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="{{route('cancel')}}" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-times-circle mr-2"></i> Cancel / Return Requests
                        </a>
                    </li>

                    <!-- My Stuff Section -->
                    <li class="font-semibold text-gray-700 mt-6 flex items-center">
                        <i class="fas fa-box mr-2 text-[#601042]"></i>
                        My Stuff
                    </li>
                    <li class="ml-6">
                        <a href="#" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-heart mr-2"></i> My Wishlist
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-star mr-2"></i> My Reviews
                        </a>
                    </li>

                    <!-- Settings Section -->
                    <li class="font-semibold text-gray-700 mt-6 flex items-center">
                        <i class="fas fa-cog mr-2 text-[#601042]"></i>
                        My Settings
                    </li>
                    <li class="ml-6">
                        <a href="{{route('profile')}}" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i> Manage Addresses
                        </a>
                    </li>

                    <!-- Logout Section -->
                    <li class="mt-6 ml-6">
                        <a href="#" class="text-gray-600 hover:text-[#601042] flex items-center">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Profile Content Section -->
            <div class="col-span-2">
                @yield('profileContent')
            </div>
        </div>
    </div>
@endsection
