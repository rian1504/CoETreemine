<aside id="sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full bg-white dark:bg-gray-800 transition-transform transform duration-300 -translate-x-full md:translate-x-0">
    <div class="px-3 py-4 overflow-y-auto h-full">
        <a href="{{ route('dashboard') }}"
            class="flex flex-col justify-center items-center p-2 mb-4 text-gray-900 rounded-lg dark:text-whit group">
            <h1 class="text-2xl font-bold hidden md:block">CoETreemine</h1>
            <svg class="w-10 h-10 md:hidden" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 1.5A8.5 8.5 0 0118.5 10 8.5 8.5 0 0110 18.5 8.5 8.5 0 011.5 10 8.5 8.5 0 0110 1.5zM10 0a10 10 0 100 20 10 10 0 000-20zM9 5v6h6v1H8V5h1z">
                </path>
            </svg>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="{{ request()->is('admin') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('category.index') }}"
                    class="{{ request()->is('admin/category_portfolio*') ? 'active' : '' }} flex items-center p-2  rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-th-list text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Portfolio Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('portfolio.index') }}"
                    class="{{ request()->is('admin/portfolio*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-microchip text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="{{ route('prototype.index') }}"
                    class="{{ request()->is('admin/prototype*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-project-diagram text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Prototype</span>
                </a>
            </li>
            <li>
                <a href="{{ route('assembly.index') }}"
                    class="{{ request()->is('admin/assembly*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-cogs text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Assembly</span>
                </a>
            </li>
            <li>
                <a href="{{ route('review_file.index') }}"
                    class="{{ request()->is('admin/review_file*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-file-lines text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Review File</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $dataSidebar['dataReviewFile'] }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('review_payment.index') }}"
                    class="{{ request()->is('admin/review_payment*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-credit-card text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Review Payment</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $dataSidebar['dataReviewPayment'] }}</span>
                </a>
            </li>
            <li>
                <a href="{{ route('progress.index') }}"
                    class="{{ request()->is('admin/on_progress*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-sync text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">On Progress</span>
                    <span
                        class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $dataSidebar['dataOnProgress'] }}</span>
                </a>
            </li>
            <li>
                <a type="button" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example"
                    class="{{ request()->is('admin/history*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i
                        class="fas fa-clock text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">History</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <ul id="dropdown-example" class="hidden py-2 space-y-0">
                    <li>
                        <a href="{{ route('history.cart_custom') }}"
                            class="{{ request()->is('admin/history/cart_custom') ? 'active' : '' }} flex items-center p-1 my-2 ml-8 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Cart Custom</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('history.order') }}"
                            class="{{ request()->is('admin/history/order') ? 'active' : '' }} flex items-center p-1 my-2 ml-8 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                            <span class="flex-1 ms-3 whitespace-nowrap">Order</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
