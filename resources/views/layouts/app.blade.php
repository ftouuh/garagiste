<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include CSS, JS, and other meta tags here -->
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Include JS scripts here if needed -->
</body>
</html>
