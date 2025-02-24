<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/js/app.js') <!-- For Laravel 9 and above, this is used for handling the assets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    {{-- @livewireStyles --}}
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        {{-- <header class="bg-blue-600 text-white p-4">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-xl">Welcome to Laravel Events Demo</h1>
            </div>
        </header> --}}
        <header class="bg-blue-600 text-white p-6">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-semibold"> Laravel Events & Listeners Demo</h1>
            </div>
        </header>
        

        <main class="flex-grow container mx-auto py-6">
            @yield('content') <!-- This is where the content from other views will be injected -->
        </main>

        <footer class="bg-gray-800 text-white text-center py-4">
            <p>&copy; {{ date('Y') }} Laravel Events Demo</p>
        </footer>
    </div>

    {{-- @livewireScripts --}}
</body>
</html>
