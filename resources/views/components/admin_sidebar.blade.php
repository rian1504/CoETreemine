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
                <a href="/admin/category_portfolio" class="{{ request()->is('category_portfolio*') ? 'active' : '' }} flex items-center p-2  rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-th-list text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Portfolio Category</span>
                </a>
            </li>
            <li>
                <a href="/admin/portfolio" class="{{ request()->is('portfolio*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-microchip text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Portfolio</span>
                </a>
            </li>
            <li>
                <a href="/admin/prototype" class="{{ request()->is('prototype*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-project-diagram text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Prototype</span>
                </a>
            </li>
            <li>
                <a href="/admin/assembly" class="{{ request()->is('assembly*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-cogs text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Assembly</span>
                </a>
            </li>
            <li>
                <a href="/admin/review_file" class="{{ request()->is('review_file*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-file-lines text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Review File</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">3</span>
                </a>
            </li>
            <li>
                <a href="/admin/review_payment" class="{{ request()->is('review_payment*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-credit-card text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Review Payment</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">3</span>
                </a>
            </li>
            <li>
                <a href="/admin/history" class="{{ request()->is('history*') ? 'active' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-admin-900 hover:text-white dark:hover:bg-gray-700 group">
                    <i class="fas fa-clock text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-white dark:group-hover:text-white"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">History</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
