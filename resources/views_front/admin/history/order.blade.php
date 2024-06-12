@extends('layouts.admin')

@section('title', 'CoE Treemine | Dashboard')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/admin/history" class="text-admin-900">History Order</a>
    </div>
    <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
    <div class="pb-4 justify-between">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative mt-1">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search"
                class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                placeholder="Search for items">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        NO.Invoice
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Buyer Name
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Address Destination
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Shipping Method
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Total Price
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Payment Proof
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 whitespace-nowrap truncate">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="relative group">
                            <p>FGTR543</p>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative group whitespace-nowrap truncate">
                            <p>Rian Abdullah</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        12-01-2024
                    </td>
                    <td class="px-6 py-4">
                        JNT
                    </td>
                    <td class="px-6 py-4">
                        $888
                    </td>
                    <td class="px-6 py-4">
                    <img src="/image/portfolio/arduino.jpeg" class="w-16 md:w-32 max-w-full max-h-full" alt="Arduino.jpeg">
                    </td>
                    <td class="px-6 py-4 text-greens-600 font-semibold">
                        succes
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2 items-center ">
                        <i class="fa-solid fa-trash px-4 "></i>
                        <a href="#"
                            class=" inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="relative group">
                            <p>FGTR544</p>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative group whitespace-nowrap truncate">
                            <p>Firmansyah Pramudia</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        13-01-2024
                    </td>
                    <td class="px-6 py-4">
                        JNE
                    </td>
                    <td class="px-6 py-4">
                        $888
                    </td>
                    <td class="px-6 py-4">
                    <img src="/image/portfolio/arduino.jpeg" class="w-16 md:w-32 max-w-full max-h-full" alt="Arduino.jpeg">
                    </td>
                    <td class="px-6 py-4 text-greens-600 font-semibold">
                        succes
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2 items-center">
                        <i class="fa-solid fa-trash px-4 "></i>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        3
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="relative group">
                            <p>FGTR545</p>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative group whitespace-nowrap truncate">
                            <p>Alia Pramestia Nurdenia</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        14-01-2024
                    </td>
                    <td class="px-6 py-4">
                        JNE
                    </td>
                    <td class="px-6 py-4">
                        $888
                    </td>
                    <td class="px-6 py-4">
                    <img src="/image/portfolio/arduino.jpeg" class="w-16 md:w-32 max-w-full max-h-full" alt="Arduino.jpeg">
                    </td>
                    <td class="px-6 py-4 text-greens-600 font-semibold">
                        succes
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2 items-center">
                        <i class="fa-solid fa-trash px-4 "></i>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        4
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="relative group">
                            <p>FGTR546</p>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative group whitespace-nowrap truncate">
                            <p>Rizqi Vela Syifa</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        15-01-2024
                    </td>
                    <td class="px-6 py-4">
                        JNE
                    </td>
                    <td class="px-6 py-4">
                        $888
                    </td>
                    <td class="px-6 py-4">
                    <img src="/image/portfolio/arduino.jpeg" class="w-16 md:w-32 max-w-full max-h-full" alt="Arduino.jpeg">
                    </td>
                    <td class="px-6 py-4 text-greens-600 font-semibold">
                        succes
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2 items-center">
                        <i class="fa-solid fa-trash px-4 "></i>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </td>
                </tr>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        5
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="relative group">
                            <p>FGTR547</p>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <div class="relative group whitespace-nowrap truncate">
                            <p>Sarah Isnaini Alnauri</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="relative group">
                            <p class=" whitespace-nowrap truncate max-w-20">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            <div class="absolute -top-4 hidden group-hover:block bg-white text-black shadow-lg rounded p-4 w-96">
                                <p>Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        16-01-2024
                    </td>
                    <td class="px-6 py-4">
                        JNT
                    </td>
                    <td class="px-6 py-4">
                        $888
                    </td>
                    <td class="px-6 py-4">
                    <img src="/image/portfolio/arduino.jpeg" class="w-16 md:w-32 max-w-full max-h-full" alt="Arduino.jpeg">
                    </td>
                    <td class="px-6 py-4 text-greens-600 font-semibold">
                        succes
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-2 items-center">
                        <i class="fa-solid fa-trash px-4 "></i>
                        <a href="#"
                            class="inline-flex items-center px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection