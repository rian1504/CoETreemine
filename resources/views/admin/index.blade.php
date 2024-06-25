@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

    <div>
        <div class="my-4">
            <a href="{{ route('dashboard') }}" class="text-admin-green">Dashboard</a>
        </div>
        <!-- page -->
        <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                {{-- category --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('category.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Portfolio Category
                            </h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-th-list text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCategory'] }}</span>
                        </div>
                        <a href="{{ route('category.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- portfolio --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('portfolio.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Portfolio</h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-microchip text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataPortfolio'] }}</span>
                        </div>
                        <a href="{{ route('portfolio.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- prototype --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('prototype.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Prototype</h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-project-diagram text-4xl text-gray-500"></i>
                        </div>
                        <a href="{{ route('prototype.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- assembly --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('assembly.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Assembly</h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-cogs text-4xl text-gray-500"></i>
                        </div>
                        <a href="{{ route('assembly.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- review file --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('review_file.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Review File</h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-file-lines text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataReviewFile'] }}</span>
                        </div>
                        <a href="{{ route('review_file.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- review payment --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('review_payment.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Review Payment</h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-credit-card text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataReviewPayment'] }}</span>
                        </div>
                        <a href="{{ route('review_payment.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- on progress --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('progress.index') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">On Progress Product
                            </h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-sync text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataOnProgress'] }}</span>
                        </div>
                        <a href="{{ route('progress.index') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- history cart custom --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('history.cart_custom') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History Cart Custom
                            </h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-clock text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataCartCustomHistory'] }}</span>
                        </div>
                        <a href="{{ route('history.cart_custom') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- history order --}}
                <div
                    class="max-w-sm bg-white border border-admin-green rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center justify-center p-5">
                        <a href="{{ route('history.order') }}">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History Order
                            </h5>
                        </a>
                        <div class="relative inline-block my-4">
                            <i class="fas fa-clock text-4xl text-gray-500"></i>
                            <span
                                class="absolute -top-3 -right-3 flex items-center justify-center w-6 h-6 text-sm font-medium text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">{{ $data['dataOrderHistory'] }}</span>
                        </div>
                        <a href="{{ route('history.order') }}"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-admin-green rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            More Details
                            <div class="rounded-full ms-2 w-5 bg-white">
                                <i class="fas fa-arrow-right text-admin-green"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
