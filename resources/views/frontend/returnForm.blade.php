@extends('frontend.profile.layout')
@section('profileContent')

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main Profile Content -->
    <form action="{{route('order.return', ['order' => $order->id])}}" method="post">
        @csrf
        <div class="md:col-span-2 bg-white shadow-md rounded-lg p-6">
            <!-- Personal Information -->
            <div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Return Form</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Reasons</label>
                        <textarea name="reason" id="" cols="30" rows="10"
                                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]"
                        ></textarea>
                    </div>
                </div>
            </div>

            <hr class="my-6">

            <button class="bg-[#601042] text-white px-6 py-2 rounded-md hover:bg-[#8a396b]">Submit</button>
        </div>
    </form>

@endsection
