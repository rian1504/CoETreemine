<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CoE Treemine')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body class="h-screen font-inter">
    <div class="flex w-screen h-screen">
        <aside>
            @include('components.admin_sidebar')
        </aside>
        <div id="content" class="flex flex-col w-full md:ml-64 transition-all duration-300">
            <header>
                @include('components.admin_header')
            </header>
            <main class="flex flex-col grow bg-custom-grey mt-12 p-8">
                @yield('content')
            </main>
        </div>
        <!-- <footer>
        @include('components.footer')
    </footer> -->
    </div>



    <script>
        document.querySelector("#menuToggle").addEventListener("click", () => {
            let sidebar = document.querySelector("#sidebar");
            let content = document.querySelector("#content");
            let navbar = document.querySelector("#navbar");

            if (sidebar.classList.contains("md:translate-x-0")) {
                sidebar.classList.remove("md:translate-x-0");
                content.classList.remove("md:ml-64");
                navbar.classList.remove("md:ml-64");
            } else {
                sidebar.classList.add("md:translate-x-0");
                content.classList.add("md:ml-64");
                navbar.classList.add("md:ml-64");
            }
        });
    </script>
    <div class="">

    </div>
</body>

</html>