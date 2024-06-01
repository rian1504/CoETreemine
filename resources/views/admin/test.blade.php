<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="fixed top-0 left-64 z-50 w-5/6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-5 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center me-8">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                                <h1 class="m-2">Hi, Admin</h1>
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex flex-1 mt-16">
        <!-- Sidebar -->
        <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
                <a href="admin/dashboard" class="flex flex-col justify-center items-center p-2 mb-4 whitespace-nowrap text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <h1 class="text-2xl font-bold">CoETreemine</h1>
                </a>
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/admin" class="{{ request()->is('admin*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/category_portfolio" class="{{ request()->is('category_portfolio*') ? 'active' : '' }} flex items-center p-2  rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-th-list text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Portfolio Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="/portfolio" class="{{ request()->is('portfolio*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-microchip text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prototype" class="{{ request()->is('prototype*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-project-diagram text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Prototype</span>
                        </a>
                    </li>
                    <li>
                        <a href="/assembly" class="{{ request()->is('assembly*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-cogs text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Assembly</span>
                        </a>
                    </li>
                    <li>
                        <a href="/review_file" class="{{ request()->is('review_file*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-file-lines text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Review File</span>
                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="/review_payment" class="{{ request()->is('review_payment*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-credit-card text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Review Payment</span>
                            <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="/history" class="{{ request()->is('history*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <i class="fas fa-clock text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">History</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>


        <!-- Content -->
        <main class="flex-1 ml-64 bg-blue-100 min-h-screen">
            <div>
                <div class="my-4 flex flex-row gap-4">
                    <h1>Dashboard</h1>
                    <h2>></h2>
                    <h1>Portfolio</h1>
                    <h2>></h2>
                    <h3 class="text-admin-900">Create</h3>
                </div>
                <div class=" bg-white rounded-sm px-10 py-6">
                    <div class="flex flex-col my-2">
                        <label for="" class="font-semibold mb-2">Name</label>
                        <input type="text" class="rounded-xl border-admin-900 h-12" placeholder="Input Product Name">
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>