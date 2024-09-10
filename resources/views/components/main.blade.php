<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
    
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Include your CSS files here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    
    {{-- Include the header --}}
    @include('components.header')

    {{-- Main content section --}}
    <main class="container mx-auto py-8">
        @yield('content')
    </main>

    {{-- Include the footer --}}
    @include('components.footer')

    <!-- Include your JS files here -->
    <script src="{{ asset('js/app.js') }}"></scrip>
</body>
</html>
