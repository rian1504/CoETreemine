<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CoE Treemine')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body class="h-screen w-screen">
    <header>
        @include('components.header')
    </header>
    <div class="bg-grays-700 min-h-screen">
        <main class="container mx-auto p-6">
            @yield('carousel')
            @yield('content')
        </main>
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>

</html>