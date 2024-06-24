@extends('layouts.admin')

@section('title', 'CoE Treemine | History Cart Custom')

@section('content')

    <div>
        <div class="my-4 flex flex-row gap-4">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <p>></p>
            <p class="text-admin-900">History Cart Custom</p>
        </div>

        <div class=" min-h-96 bg-white rounded-sm px-10 py-6">
            <div class="pb-4 flex flex-row justify-between">
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
                        class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                        placeholder="Search for items">
                </div>
            </div>
            <div class="relative overflow-x-auto text-center shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-admin-900 dark:bg-gray-700 dark:text-gray-400">
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
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" rowspan="2"
                                        class="px-4 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
                                        {{ $index + 1 }}
                                    </th>
                                    <th scope="row" rowspan="2"
                                        class="px-4 py-4 whitespace-nowrap truncate font-medium text-gray-900 dark:text-white">
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
                                        <button data-modal-target="static-assembly-modal"
                                            data-modal-toggle="static-assembly-modal"
                                            data-id={{ $data->custom_assembly->id_custom_assembly }}
                                            class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            View Detail
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th rowspan="2" class="px-6 py-4 text-gray-900 dark:text-white font-semibold">
                                        {{ $index + 1 }}
                                    </th>
                                    <th rowspan="2" class="px-6 py-4 text-gray-900 dark:text-white font-semibold">
                                        {{ $data->user->name }}
                                    </th>
                                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                                        Rp{{ number_format($data->total_price, 0, '', '.') }}
                                    </td>
                                    <td rowspan="2" class="px-6 py-4 text-red-600 font-semibold">
                                        {{ $data->status }}
                                    </td>
                                    <td rowspan="2" class="px-6 py-4 whitespace-nowrap truncate">
                                        {{ $data->reason }}
                                    </td>
                                    <td colspan="3" class="px-6 py-4 text-red-600 font-semibold">
                                        Assembly Kosong
                                    </td>
                                </tr>
                            @endif

                            @if ($data->custom_prototype != null)
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <td class="px-6 py-4 whitespace-nowrap truncate">
                                        Prototype
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap truncate">
                                        Rp{{ number_format($data->custom_prototype->price, 0, '', '.') }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap truncate">
                                        <!-- Modal toggle -->
                                        <button data-modal-target="static-prototype-modal"
                                            data-modal-toggle="static-prototype-modal"
                                            data-id="{{ $data->custom_prototype->id_custom_prototype }}"
                                            class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            View Detail
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <td colspan="3" class="px-6 py-4 text-red-600 font-semibold">
                                        Prototype Kosong
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                                    No data
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <!-- View Detail Assembly -->
        <div id="static-assembly-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-5xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Assembly Detail
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-assembly-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div>
                        <div class="px-10 py-5 flex flex-row justify-between gap-5 text-center whitespace-nowrap truncate">
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Quantity
                                        </th>
                                        <td class="px-4 py-4" id="quantity">
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Sensitive Component
                                        </th>
                                        <td class="px-4 py-4" id="sensitive"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Sensitive Component Description
                                        </th>
                                        <td class="px-4 py-4" id="sensitive_description"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Unique Part
                                        </th>
                                        <td class="px-4 py-4" id="unique"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Smt Part
                                        </th>
                                        <td class="px-4 py-4" id="smt"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Bga Part
                                        </th>
                                        <td class="px-4 py-4" id="bga"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Through Hole Part
                                        </th>
                                        <td class="px-4 py-4" id="through"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Depanel
                                        </th>
                                        <td class="px-4 py-4" id="depanel"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Function Test
                                        </th>
                                        <td class="px-4 py-4" id="function"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Cable Wire
                                        </th>
                                        <td class="px-4 py-4" id="cable"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Detail Information
                                        </th>
                                        <td class="px-4 py-4" id="detail_information"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Price
                                        </th>
                                        <td class="px-4 py-4" id="price"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            File
                                        </th>
                                        <td class="px-4 py-4" id="file"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Flexible Option
                                        </th>
                                        <td class="px-4 py-4" id="flexible"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Board Type
                                        </th>
                                        <td class="px-4 py-4" id="board"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Assembly Side
                                        </th>
                                        <td class="px-4 py-4" id="side"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- View Detail Prototype -->
        <div id="static-prototype-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-5xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Prototype Detail
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-prototype-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div>
                        <div class="px-10 py-5 flex flex-row justify-between gap-5 text-center whitespace-nowrap truncate">
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            X-out
                                        </th>
                                        <td class="px-4 py-4" id="x-out">
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Panel Requirement
                                        </th>
                                        <td class="px-4 py-4" id="panel"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Panel Requirement Description
                                        </th>
                                        <td class="px-4 py-4" id="panel_description"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Design Panel
                                        </th>
                                        <td class="px-4 py-4" id="design"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Length
                                        </th>
                                        <td class="px-4 py-4" id="length"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Width
                                        </th>
                                        <td class="px-4 py-4" id="width"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Quantity
                                        </th>
                                        <td class="px-4 py-4" id="prototype_quantity"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            File
                                        </th>
                                        <td class="px-4 py-4" id="prototype_file"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Price
                                        </th>
                                        <td class="px-4 py-4" id="prototype_price"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Board Type
                                        </th>
                                        <td class="px-4 py-4" id="prototype_board"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Route Process
                                        </th>
                                        <td class="px-4 py-4" id="route"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Fr4
                                        </th>
                                        <td class="px-4 py-4" id="fr4"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Thickness
                                        </th>
                                        <td class="px-4 py-4" id="thickness"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="shadow-md w-full text-sm text-gray-500 dark:text-gray-400">
                                <tbody>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Layer
                                        </th>
                                        <td class="px-4 py-4" id="layer"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Inner Cooper
                                        </th>
                                        <td class="px-4 py-4" id="inner"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Min Track
                                        </th>
                                        <td class="px-4 py-4" id="track"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Min Hole Size
                                        </th>
                                        <td class="px-4 py-4" id="hole"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Solder
                                        </th>
                                        <td class="px-4 py-4" id="solder"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Silkscreen
                                        </th>
                                        <td class="px-4 py-4" id="silk"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Surface Finish
                                        </th>
                                        <td class="px-4 py-4" id="surface"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Via Process
                                        </th>
                                        <td class="px-4 py-4" id="via"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Finished Cooper
                                        </th>
                                        <td class="px-4 py-4" id="finished"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Material
                                        </th>
                                        <td class="px-4 py-4" id="material"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Soldermask Layer1
                                        </th>
                                        <td class="px-4 py-4" id="soldermask_layer1"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Silkscreen Layer1
                                        </th>
                                        <td class="px-4 py-4" id="silkscreen_layer1"></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                            Cooper Layer
                                        </th>
                                        <td class="px-4 py-4" id="cooper_layer"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            function formatNumber(number, options = {}) {
                return new Intl.NumberFormat('id-ID', options).format(number);
            }

            function formatCurrency(number) {
                return formatNumber(number, {
                    style: 'currency',
                    currency: 'IDR'
                });
            }

            // View Assembly
            $('button[data-modal-toggle="static-assembly-modal"]').on('click', function() {
                let id_assembly = $(this).data('id');

                $.ajax({
                    url: '/admin/review_file/custom_assembly/' + id_assembly,
                    method: 'GET',
                    success: function(data) {
                        $('#quantity').text(data.quantity + " Pcs");
                        $('#sensitive').text(data.sensitive_component);
                        $('#sensitive_description').text(data.sensitive_component_description);
                        $('#unique').text(data.unique_part + " Pcs");
                        $('#smt').text(data.smt_part + " Pcs");
                        $('#bga').text(data.bga_part + " Pcs");
                        $('#through').text(data.through_hole_part + " Pcs");
                        $('#depanel').text(data.depanel);
                        $('#function').text(data.function_test);
                        $('#cable').text(data.cable_wire);
                        $('#detail_information').text(data.detail_information);
                        $('#price').text(formatCurrency(data.price));
                        data.file == null ? $('#file').text('') : $('#file').html(
                            '<a href="/storage/assets/files/assembly/' + data.file +
                            '" download class="underline text-blue-400">Check File Here</a>'
                        )
                        $('#flexible').text(data.assembly_flexible.flexible_name);
                        $('#board').text(data.assembly_board_type.board_type_name);
                        $('#side').text(data.assembly_side.side_name);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            // View Prototype
            $('button[data-modal-toggle="static-prototype-modal"]').on('click', function() {
                let id_prototype = $(this).data('id');

                $.ajax({
                    url: '/admin/review_file/custom_prototype/' + id_prototype,
                    method: 'GET',
                    success: function(data) {
                        $('#x-out').text(data.x_out);
                        $('#panel').text(data.panel_requirement);
                        $('#panel_description').text(data.panel_requirement_description);
                        $('#design').text(data.design_panel + " Pcs");
                        $('#length').text(data.length + " Cm");
                        $('#width').text(data.width + " Cm");
                        $('#prototype_quantity').text(data.quantity + " Pcs");
                        data.file == null ? $('#prototype_file').text('') : $('#prototype_file')
                            .html(
                                '<a href="/storage/assets/files/prototype/' + data.file +
                                '" download class="underline text-blue-400">Check File Here</a>'
                            )
                        $('#prototype_price').text(formatCurrency(data.price));
                        $('#prototype_board').text(data.prototype_board_type.board_type_name);
                        $('#route').text(data.prototype_route_process.route_process_name);
                        $('#fr4').text(data.prototype_fr4.fr4_name);
                        $('#thickness').text(data.prototype_thickness.thickness_name);
                        $('#layer').text(data.prototype_layer.layer_name);
                        data.prototype_inner_cooper == null ? $('#inner').text('') : $('#inner')
                            .text(data.prototype_inner_cooper.inner_cooper_name);
                        $('#track').text(data.prototype_track.track_name);
                        $('#hole').text(data.prototype_hole.hole_name);
                        $('#solder').text(data.prototype_solder.solder_name);
                        $('#silk').text(data.prototype_silk.silk_name);
                        $('#surface').text(data.prototype_surface.surface_name);
                        $('#via').text(data.prototype_via_process.via_process_name);
                        $('#finished').text(data.prototype_finished_cooper
                            .finished_cooper_name);
                        $('#material').text(data.prototype_material.material_name);
                        data.prototype_soldermask_layer1 == null ? $('#soldermask_layer1').text(
                            '') : $('#soldermask_layer1').text(data
                            .prototype_soldermask_layer1
                            .soldermask_layer1_name);
                        data.prototype_silkscreen_layer1 == null ? $('#silkscreen_layer1').text(
                            '') : $('#silkscreen_layer1').text(data
                            .prototype_silkscreen_layer1
                            .silkscreen_layer1_name);
                        data.prototype_cooper_layer == null ? $('#cooper_layer').text(
                            '') : $('#cooper_layer').text(data
                            .prototype_cooper_layer
                            .cooper_layer_name);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
