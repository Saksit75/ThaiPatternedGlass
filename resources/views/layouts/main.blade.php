<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="sticky top-0 z-10">
        <x-main-navbar />
    </div>
    <main>
        @yield('main-content')
    </main>
    <x-main-footer />
    <div class="fixed right-5 bottom-5">
        <x-float-contact />
    </div>
</body>

</html>
