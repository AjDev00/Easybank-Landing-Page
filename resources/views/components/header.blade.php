<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <div class="flex flex-row justify-between items-center px-20 py-4 bg-white z-10 relative">
        <div>
            @include('components.logo')
        </div>
        <div class="flex flex-row gap-7 tracking-tighter">
            <div class="opacity-50 hover:opacity-100 hover:border-b-2 hover:border-green-400 hover:cursor-pointer font-semibold p-1">Home</div>
            <div class=" opacity-50 hover:opacity-100 hover:border-b-2 hover:border-green-400 hover:cursor-pointer font-semibold p-1">About</div>
            <div class=" opacity-50 hover:opacity-100 hover:border-b-2 hover:border-green-400 hover:cursor-pointer font-semibold p-1">Contact</div>
            <div class=" opacity-50 hover:opacity-100 hover:border-b-2 hover:border-green-400 hover:cursor-pointer font-semibold p-1">Blog</div>
            <div class=" opacity-50 hover:opacity-100 hover:border-b-2 hover:border-green-400 hover:cursor-pointer font-semibold p-1">Careers</div>
        </div>
        <div>
            @include('components.button')
        </div>
    </div>
</body>
</html>