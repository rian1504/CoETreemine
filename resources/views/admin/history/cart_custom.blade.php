@extends('layouts.admin')

@section('title', 'CoE Treemine | History Cart Custom')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="/admin">Dashboard</a>
        <p>></p>
        <a href="/admin/history" class="text-admin-900">History Cart Custom</a>
    </div>
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
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Number
                    </th>
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Buyer Name
                    </th>
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Total Price
                    </th>
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Reason
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Custom Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3" rowspan="2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th rowspan="2" scope="row"
                        class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        1
                    </th>
                    <th rowspan="2" scope="row"
                        class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        Salman Isnaini Alnauri
                    </th>
                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                        $2999
                    </td>
                    <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                        rejected
                    </td>
                    <td rowspan="2" class="px-6 py-4">
                        
                    </td>
                    <td class="px-6 py-4">
                        Prototype 
                    </td>
                    <td class="px-6 py-4">
                        $3000
                    </td>
                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            View Detail
                        </button>
                    </td>
                </tr>
                <tr>
                <td class="px-6 py-4">
                       Assembly
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
                <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th rowspan="2" scope="row"
                        class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        2
                    </th>
                    <th rowspan="2" scope="row"
                        class="px-6 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                        Rizqi Vela Syifa
                    </th>
                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                        $2999
                    </td>
                    <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                        rejected
                    </td>
                    <td rowspan="2" class="px-6 py-4">
                       
                    </td>
                    <td class="px-6 py-4">
                        Prototype 
                    </td>
                    <td class="px-6 py-4">
                    $3000
                    </td>
                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            View Detail
                        </button>
                    </td>
                </tr>
                <tr>
                <td class="px-6 py-4">
                       Assembly
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
                @endsection