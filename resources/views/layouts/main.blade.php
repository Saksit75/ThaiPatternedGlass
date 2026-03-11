<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ThaiPatternedGlass</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-main-navbar />
    <main class="container mx-auto bg-blue-700">
        @yield('main-content')
    </main>
    <footer>

    </footer>
</body>

</html>
