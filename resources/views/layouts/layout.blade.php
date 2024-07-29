<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        @include('components.header')
    </div>

    <div>
        @include('components.home-content')
    </div>
</body>
</html>