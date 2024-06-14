<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CoE Treemine')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>

<body class="h-screen">
    <div class="flex w-screen h-screen ">

        <aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-full bg-white dark:bg-gray-800 transition-transform transform -translate-x-full md:translate-x-0 md:w-64">
            <div class="px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
                <a href="{{ route('dashboard') }}" class="flex flex-col justify-center items-center p-2 mb-4 whitespace-nowrap text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <h1 class="text-2xl font-bold">CoETreemine</h1>
                </a>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('dashboard') }}" class="{{ request()->is('admin') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="content" class="flex flex-col w-full transition-all duration-300">
            <nav class="fixed top-0 left-0 right-0 z-40 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="px-3 py-5 lg:px-5 lg:pl-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                            <button id="menuToggle" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            </header>
            <main class="flex flex-col grow bg-admin-100 mt-20 p-8">
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

            if (sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
                content.classList.add("md:ml-64");
            } else {
                sidebar.classList.add("-translate-x-full");
                content.classList.remove("md:ml-64");
            }
        });
    </script>
    <div class="">

    </div>
</body>

</html>
