@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <h1 class="my-4 text-admin-900">Dashboard</h1>
    <div class=" min-h-[450px] bg-white rounded-sm px-10 py-6">
        <div class="grid grid-cols-3 gap-4 my-4">
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('category.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Portfolio Category
                        </h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-th-list text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCategory'] }}</span>
                    </div>
                    <a href="/admin/category_portfolio" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('portfolio.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Portfolio</h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-microchip text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataPortfolio'] }}</span>
                    </div>
                    <a href="/admin/portfolio" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('prototype.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Prototype</h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-project-diagram text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCustomPrototype'] }}</span>
                    </div>
                    <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('assembly.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Assembly</h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-cogs text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCustomAssembly'] }}</span>
                    </div>
                    <a href="/assembly" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('review_file.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Review File</h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-file-lines text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataReviewFile'] }}</span>
                    </div>
                    <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('review_payment.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Review Payment</h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-credit-card text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataReviewPayment'] }}</span>
                    </div>
                    <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('progress.index') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">On Progress Product
                        </h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-clock text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCartCustomHistory'] }}
                            dummy</span>
                    </div>
                    <a href="/admin/history" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('history.cart_custom') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History Cart Custom
                        </h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-clock text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCartCustomHistory'] }}</span>
                    </div>
                    <a href="/admin/history" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-admin-900 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col items-center justify-center p-5">
                    <a href="{{ route('history.order') }}">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History Order
                        </h5>
                    </a>
                    <div class="relative inline-block my-4">
                        <i class="fas fa-clock text-4xl text-gray-500"></i>
                        <span class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataOrderHistory'] }}</span>
                    </div>
                    <a href="/admin/history" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-900 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        More Details
                        <div class="rounded-full ms-2 w-5 bg-white">
                            <i class="fas fa-arrow-right text-admin-900"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection