<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IT@CSIT-PROJECT')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-500 p-4 text-white shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold">IT@CSIT-PROJECT</h1>

        <div class="flex items-center space-x-4">
            <div class="relative group">
                <button class="px-4 py-2 bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                    📁 Menu
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white text-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    <a href="{{ route('brands.index') }}" class="block px-4 py-2 hover:bg-gray-200">🏢 Brands</a>
                    <a href="{{ route('operating_systems.index') }}" class="block px-4 py-2 hover:bg-gray-200">🖥 Operating Systems</a>
                    <a href="{{ route('mobile_phones.index') }}" class="block px-4 py-2 hover:bg-gray-200">📱 Mobile Phones</a>
                </div>
            </div>

            <input type="text" placeholder="🔍 Search..." class="px-3 py-1 rounded bg-white text-black border border-gray-300 focus:outline-none">

            <img src="{{ asset('images/boy.png') }}" alt="Icon" class="w-10 h-10 ">
    </nav>

    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    <footer class="text-center py-4 mt-6 text-gray-600 border-t">
        © 2025 IT@CSIT-PROJECT. All rights reserved.
    </footer>

</body>
</html>
