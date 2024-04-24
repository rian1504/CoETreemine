<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CoE Treemine')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body>

    <header>
        @include('components.header')
        @include('components.carousel')
    </header>
    <div class="flex justify-center bg-grays-700">
        <div class="container ">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    <!-- <footer>
        @include('components.footer')
    </footer> -->
</body>

</html>