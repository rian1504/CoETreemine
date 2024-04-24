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

    </header>
    <!-- <div class="min-h-100"> -->
    <!-- <h1 class="text-xl font-bold dark:text-white">List Produk</h1> -->
    <div class="container">
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