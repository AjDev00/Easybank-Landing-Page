<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-x-hidden">
    <div>
        @include('components.header')
    </div>

    <div>
        @include('components.home-content')
    </div>

    <div>
        @include('components.why-choose-us')
    </div>

    <div>
        @include('components.latest-articles')
    </div>

    <div>
        @include('components.footer')
    </div>
</body>
</html>