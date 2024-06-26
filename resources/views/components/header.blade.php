<nav class="flex flex-col fixed top-0 z-50 w-full">
    <div class="bg-grays-800 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-14 p-4">
            <div class="flex w-1/2">
                <div class="w-28">
                    <a href="/buyer" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <span class="self-center text-3xl font-bold whitespace-nowrap dark:text-white">LOGO</span>
                    </a>
                </div>
                <div class="flex flex-col ms-3">
                    <h1 class="text-greens-900 font-semibold text-lg">PCB Prototype and Assembly the Easy Way</h1>
                    <h2 class="text-sm">Full feature custom PCB prototype and Assembly service.</h2>
                </div>
            </div>
            <div class="flex w-1/2 justify-end items-center gap-4">
                <div class="flex w-16 gap-4">
                    <a href="{{ route('cart.index') }}">
                        <i class="fas fa-cart-shopping fa-lg"></i>
                    </a>
                    <a href="{{ route('history.index') }}">
                        <i class="fas fa-history fa-lg"></i>
                    </a>
                </div>
                @if (Auth::check())
                    {{-- Buyer --}}
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-2">
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ asset('image/user.jpeg') }}" alt="user photo">
                            </button>
                            <h1 class="font-bold">{{ Auth::user()->name }}</h1>
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm dark:text-white">{{ Auth::user()->name }}</span>
                                    <span
                                        class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="{{ route('profile.edit') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                role="menuitem">
                                                <button type="submit">Sign out</button></a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <button data-collapse-toggle="navbar-user" type="button"
                                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                aria-controls="navbar-user" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                </svg>
                            </button>
                        </div>
                    </div>
                @else
                    {{-- Guest --}}
                    <div class="flex gap-2">
                        <div class="flex mt-1 gap-2">
                            <i class="fas fa-user mt-1"></i>
                            <a href="/login" class="font-bold">Sign In</a>
                        </div>
                        <div class="">
                            <h1 class="font-bold text-xl mb-4">
                                |
                            </h1>
                        </div>
                        <div class="mt-1">
                            <a href="/register" class="font-bold">Sign Up</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="bg-greens-900 h-16 w-full" id="navbar-user">
        <ul
            class="flex flex-col ml-40 text-lg text-white font-medium p-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="block py-2 px-3 md:bg-transparent md:p-0 md:dark:text-blue-500 hover:text-black underline"
                    aria-current="page">Home</a>
            </li>
            <li class="relative">
                <!-- Dropdown Toggle Button -->
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center py-2 px-3 hover:text-black md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    Custom
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6 6a.75.75 0 0 0-1.06 1.06l4.5 4.5a.75.75 0 0 0 1.06 0l4.5-4.5A.75.75 0 0 0 14 6H6z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <!-- Dropdown Content -->
                <div id="dropdownNavbar"
                    class="absolute hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 mt-1">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                        <li>
                            <a href="{{ route('buyer.assembly.index') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Assembly</a>
                        </li>
                        <li>
                            <a href="{{ route('buyer.prototype.index') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Prototype</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('buyer.portfolio.index') }}"
                    class="block py-2 px-3 hover:text-black md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Product</a>
            </li>
            <li>
                <a href="{{ route('buyer.service') }}"
                    class="block py-2 px-3 hover:text-black md:hover:bg-transparent md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
        </ul>
    </div>
</nav>
