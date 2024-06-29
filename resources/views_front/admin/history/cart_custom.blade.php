@extends('layouts.admin')

@section('title', 'CoE Treemine | History Cart Custom')

@section('content')

<div>
    <div class="my-4 flex flex-row gap-4">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <p>></p>
        <p class="text-admin-green">History Cart Custom</p>
    </div>
    <div class=" min-h-[450px] shadow-lg bg-white rounded-sm px-10 py-6">
        <div class="pb-4 flex flex-row justify-between">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search for items">
            </div>
        </div>
        <div class="relative overflow-x-auto text-center shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-admin-green dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Number
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Buyer name
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Total Price
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Status
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Reason
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Custom Name
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Total Price
                        </th>
                        <th scope="col" class="px-4 py-3 whitespace-nowrap truncate">
                            Detail
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $index => $data)
                    @if ($data->custom_assembly != null)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" rowspan="2" class="px-4 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <th scope="row" rowspan="2" class="px-4 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                            {{ $data->user->name }}
                        </th>
                        <td rowspan="2" class="px-4 py-4 whitespace-nowrap truncate">
                            Rp{{ number_format($data->total_price, 0, '', '.') }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            {{ $data->status }}
                        </td>
                        <td rowspan="2" class="px-4 py-4 whitespace-nowrap truncate">
                            {{ $data->reason }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap truncate">
                            Assembly
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap truncate">
                            Rp{{ number_format($data->custom_assembly->price, 0, '', '.') }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap truncate">
                            <!-- Modal toggle -->
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800" type="button">
                                View Detail
                            </button>
                        </td>
                    </tr>
                    @else
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            {{ $index + 1 }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            {{ $data->user->name }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            Rp{{ number_format($data->total_price, 0, '', '.') }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            {{ $data->status }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            {{ $data->reason }}
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            Assembly Kosong
                        </td>
                    </tr>
                    @endif

                    @if ($data->custom_prototype != null)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            Prototype
                        </td>
                        <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                            Rp{{ number_format($data->custom_prototype->price, 0, '', '.') }}
                        </td>
                        <td class="px-4 py-4 whitespace-nowrap truncate">
                            <!-- Modal toggle -->
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800" type="button">
                                View Detail
                            </button>
                        </td>
                    </tr>
                    @else
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td rowspan="3" class="px-6 py-4 text-red-600 font-semibold">
                            Prototype Kosong
                        </td>
                    </tr>
                    @endif

                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-3                         text-center text-gray-500 dark:text-gray-400">
                            <div class="flex flex-col justify-center items-center h-full py-10">
                                <h1 class="text-2xl font-semibold text-gray-700 dark:text-white mb-2">No Data</h1>
                                <i class="fas fa-database text-gray-400 text-4xl"></i>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
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
                <div>
                    <div class="px-10 py-5 flex flex-row justify-between gap-5 text-center whitespace-nowrap truncate">
                        <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                        Custom Name
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        Total Item
                                    </th>
                                    <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                        Total Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Assembly
                                    </th>
                                    <td class="px-4 py-4">
                                        2
                                    </td>
                                    <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right">
                                        Rp.40.000
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Prototype
                                    </th>
                                    <td class="px-4 py-4">
                                        1
                                    </td>
                                    <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right">
                                        Rp.30.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                        Portfolio Name
                                    </th>
                                    <th scope="col" class="px-4 py-3">
                                        Portfolio Image
                                    </th>
                                    <th scope="col" class="px-4 py-3 bg-gray-50 dark:bg-gray-800">
                                        Total Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Assembly
                                    </th>
                                    <td class="px-4 py-4">
                                        <img class="h-auto w-24 rounded-lg" src="/image/portfolio/arduino.jpeg" alt="image description">
                                    </td>
                                    <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right">
                                        Rp.40.000
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Prototype
                                    </th>
                                    <td class="px-4 py-4">
                                        <img class="h-auto w-24 rounded-lg" src="/image/portfolio/arduino.jpeg" alt="image description">
                                    </td>
                                    <td class="px-4 py-4 bg-gray-50 dark:bg-gray-800 text-right">
                                        Rp.30.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="border border-admin-green w-full">
                    <div class="px-10 py-5 flex flex-row justify-between">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Total Price
                        </h3>
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Rp.140.000
                        </h4>
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
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                message</label>
                            <textarea type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                            </textarea>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection