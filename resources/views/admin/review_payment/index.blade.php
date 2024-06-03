@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/portfolio" class="text-admin-900">Portfolio</a>
    </div>
    <div class="pb-4 flex flex-row justify-between">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search for items">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Number
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Buyer name
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Telephone
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Shipping
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Proof of Payment
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Total Price
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Detail
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        1
                    </th>
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        Salman Isnaini Alnauri
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        088872638283
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        J&T Express
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <img class="h-auto max-w-32 rounded-lg shadow-xl dark:shadow-gray-800" src="/image/portfolio/arduino.jpeg" alt="image description">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        $2999
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            View Detail
                        </button>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <a href="/admin/portfolio/edit" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Edit
                        </a>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Reject
                        </button>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        2
                    </th>
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        Salman Isnaini Alnauri
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        088872638283
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        J&T Express
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <img class="h-auto max-w-32 rounded-lg shadow-xl dark:shadow-gray-800" src="/image/portfolio/arduino.jpeg" alt="image description">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        $1999
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            View Detail
                        </button>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <div class="flex gap-2 overflow-x-auto">
                            <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                Edit
                            </a>
                            <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Reject
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        3
                    </th>
                    <th scope="row" class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        Salman Isnaini Alnauri
                    </th>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        088872638283
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        J&T Express
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <img class="h-auto max-w-32 rounded-lg shadow-xl dark:shadow-gray-800" src="/image/portfolio/arduino.jpeg" alt="image description">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        $99
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            View Detail
                        </button>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap truncate">
                        <a href="#" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Edit
                        </a>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Reject
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- modal -->
    <!-- View Detail -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-5xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Payment Detail
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 grid grid-cols-2 gap-10">
                    <div class="relative overflow-x-auto shadow-md">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Custom Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total Item
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Total Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Assembly
                                    </th>
                                    <td class="px-6 py-4">
                                        2
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        Rp.40.000
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Prototype
                                    </th>
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        Rp.30.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete -->
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Enter a Rejection Message
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                </div>
                                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection