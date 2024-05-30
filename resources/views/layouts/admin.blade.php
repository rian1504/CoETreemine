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
        <main class="min-h-screen flex flex-col flex-grow bg-admin-100 mt-20 p-4 sm:ml-64">
            @yield('content')
        </main>
    <!-- <footer>
        @include('components.footer')
    </footer> -->



    <script>
        const toggleSidebarBtn = document.getElementById('toggle-sidebar-btn');
        const sidebar = document.getElementById('logo-sidebar');

        // Function to toggle sidebar
        function toggleSidebar() {
            sidebar.classList.toggle('translate-x-0');
            sidebar.classList.toggle('-translate-x-full');
        }

        // Add event listener
        toggleSidebarBtn.addEventListener('click', toggleSidebar);
    </script>
</body>

</html>