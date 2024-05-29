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
        @include('components.admin_header')
    </header>
    <aside>
        @include('components.admin_sidebar')
    </aside>
    <div class="mt-20 p-4 sm:ml-64">
        <main>
            @yield('content')
        </main>
    </div>
    <!-- <footer>
        @include('components.footer')
    </footer> -->
</body>

</html>