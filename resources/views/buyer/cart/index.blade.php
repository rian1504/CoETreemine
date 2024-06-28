@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Prototype')

@section('carousel')
    <div class="mt-36">
    </div>
@endsection

@section('content')

    @session('success')
        {{ session('success') }}
    @endsession

    <div class="flex flex-col my-8 gap-8">
        <div class="py-8 px-8 bg-white rounded-lg flex flex-col justify-center gap-4">
            <div
                class="px-3 py-1 bg-gray-400 w-20 flex justify-center items-center rounded-lg text-white text-sm hover:bg-gray-500">
                <a href="{{ url()->previous() }}" rel="noopener noreferrer"><i class="fas fa-arrow-left me-1"></i>Back</a>
            </div>
            <div class="overflow-x-auto shadow-md sm:rounded-lg text-nowrap truncate">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">All</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Detail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataCustom as $index => $data)
                            {{-- CUSTOM ASSEMBLY --}}
                            @if ($data->custom_assembly != null)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    {{-- CHECKBOX --}}
                                    @if ($data->custom_prototype != null)
                                        <td rowspan="2" class="w-4 p-4 text-center">
                                            <div class="flex items-center">
                                                <input type="checkbox" name="custom[]" id="custom"
                                                    value="{{ $data->id_cart_custom }}"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                    @disabled($data->status == 'not review')>
                                                <label for="custom" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                    @else
                                        <td class="w-4 p-4 text-center">
                                            <div class="flex items-center">
                                                <input type="checkbox" name="custom[]" id="custom"
                                                    value="{{ $data->id_cart_custom }}"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                                    @disabled($data->status == 'not review')>
                                                <label for="custom" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                    @endif
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <img src="{{ asset('/storage/assets/images/pcb-assembly.jpg') }}" alt=""
                                            width="100" height="100">
                                        <h1>Assembly</h1>
                                    </th>
                                    <td class="px-6 py-4">{{ $data->custom_assembly->quantity }}</td>
                                    <td class="px-6 py-4">Rp{{ number_format($data->custom_assembly->price, 0, '', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <!-- Modal toggle -->
                                        <button data-modal-target="static-assembly-modal"
                                            data-modal-toggle="static-assembly-modal"
                                            data-id={{ $data->custom_assembly->id_custom_assembly }}
                                            class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800"
                                            type="button">
                                            View Detail
                                        </button>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{-- BUTTON ADD FILE --}}
                                        @if ($data->custom_assembly->file == null)
                                            <form
                                                action="{{ route('cart.assembly.addFile', $data->custom_assembly->id_custom_assembly) }}"
                                                method="POST" enctype="multipart/form-data" class="add-file-form">
                                                @csrf
                                                <input type="file" name="file">
                                                <button type="submit">Save</button>
                                            </form>
                                            <h1>Not Completed</h1>
                                        @else
                                            <h1>Under Review</h1>
                                        @endif

                                        {{-- BUTTON DELETE CART CUSTOM --}}
                                        <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}"
                                            method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 w-10 bg-red-500 text-center rounded-lg text-white text-sm hover:bg-gray-500"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4 text-center">
                                        <input type="checkbox" name="custom[]" id="custom"
                                            value="{{ $data->id_cart_custom }}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                            @disabled($data->status == 'not review')>
                                    </td>
                            @endif

                            {{-- CUSTOM PROTOTYPE --}}
                            @if ($data->custom_prototype != null)
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ asset('/storage/assets/images/pcb-prototype.png') }}" alt=""
                                        width="100" height="100">
                                    <h1>Prototype</h1>
                                </th>
                                <td class="w-4 p-4 text-center">{{ $data->custom_prototype->quantity }}</td>
                                <td class="w-4 p-4 text-center">
                                    Rp{{ number_format($data->custom_prototype->price, 0, '', '.') }}</td>
                                <td class="w-4 p-4 text-center">
                                    {{-- <a href="{{ route('cart.prototype', $data->custom_prototype->id_custom_prototype) }}">View
                                        Detail</a> --}}
                                    <!-- Modal toggle -->
                                    <button data-modal-target="static-prototype-modal"
                                        data-modal-toggle="static-prototype-modal"
                                        data-id="{{ $data->custom_prototype->id_custom_prototype }}"
                                        class="hover:text-blue-600 font-medium text-sm text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        View Detail
                                    </button>
                                </td>
                                <td class="w-4 p-4 text-center">
                                    {{-- BUTTON ADD FILE --}}
                                    @if ($data->custom_prototype->file == null)
                                        <form
                                            action="{{ route('cart.prototype.addFile', $data->custom_prototype->id_custom_prototype) }}"
                                            method="POST" enctype="multipart/form-data" class="add-file-form">
                                            @csrf
                                            <input type="file" name="file">
                                            <button type="submit">Save</button>
                                        </form>
                                        <h1>Not Completed</h1>
                                    @else
                                        <h1>Under Review</h1>
                                    @endif

                                    {{-- BUTTON DELETE CART CUSTOM --}}
                                    <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}"
                                        method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 w-10 bg-red-500 text-center rounded-lg text-white text-sm hover:bg-gray-500"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                                </tr>
                            @endif
                        @endforeach

                        @foreach ($dataPortfolio as $index => $data)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4 text-center">
                                    <input type="checkbox" name="portfolio[]" id="portfolio"
                                        value="{{ $data->id_portfolio }}"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex gap-2">
                                    <div class="h-20 w-20 border-custom-grey border-2 rounded-lg p-2">
                                        <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio->portfolio_picture) }}"
                                            alt="" class="h-full w-full object-cover">
                                    </div>
                                    {{ $data->portfolio->portfolio_name }}
                                </th>
                                <td class="w-4 p-4 text-center">
                                    <div class="flex justify-center items-center">
                                        <button type="button"
                                            onclick="decreaseQuantity('{{ $data->id_cart_portfolio }}')"
                                            class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-l">
                                            -
                                        </button>
                                        <input type="text" id="quantity-{{ $data->id_cart_portfolio }}"
                                            name="quantity" value="{{ $data->quantity }}"
                                            class="w-12 text-center border-t border-b border-gray-200" readonly>
                                        <button type="button"
                                            onclick="increaseQuantity('{{ $data->id_cart_portfolio }}')"
                                            class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-r">
                                            +
                                        </button>
                                    </div>
                                </td>
                                <td class="w-4 p-4 text-center">
                                    <h1>Rp{{ number_format($data->portfolio->portfolio_price, 0, '', '.') }}</h1>
                                </td>
                                <td class="w-4 p-4 text-center">
                                    <a href="{{ route('cart.portfolio', $data->portfolio->id_portfolio) }}">
                                        View Detail
                                    </a>
                                </td>
                                <td class="w-4 p-4 text-center">
                                    <form action="{{ route('cart.portfolio.delete', $data->id_cart_portfolio) }}"
                                        method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            class="px-3 py-1 w-10 bg-red-500 text-center rounded-lg text-white text-sm hover:bg-gray-500"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class=" flex justify-end items-center">
                <div class="px-3 py-1 w-28 bg-buyer-green text-center rounded-lg text-white text-sm hover:bg-gray-500">
                    <a href="#">Buy Now</a>
                </div>
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

    <script>
        function decreaseQuantity(id) {
            var quantityInput = document.getElementById('quantity-' + id);
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }

        function increaseQuantity(id) {
            var quantityInput = document.getElementById('quantity-' + id);
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        }
    </script>
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
                    url: '/cart/assembly/' + id_assembly,
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
                    url: '/cart/prototype/' + id_prototype,
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

            // // Reject Button

            // // Handler saat tombol "Reject" di klik untuk menetapkan nilai cart_custom ke input hidden
            // $('[data-modal-toggle="authentication-modal"]').click(function() {
            //     let id_cart_custom = $(this).data('id');
            //     $('#cart_custom').val(id_cart_custom);

            //     let actionUrl = $('#rejectForm').attr('action');
            //     actionUrl = actionUrl.replace(':id_cart_custom', id_cart_custom);
            //     $('#rejectForm').attr('action', actionUrl);
            // });

            // // Handler saat form di-submit
            // $('#rejectForm').submit(function(event) {
            //     event.preventDefault(); // Mencegah form dikirim dan halaman dimuat ulang

            //     // Mengambil data
            //     let dataForm = $('#rejectForm').serialize();

            //     // Mengirim data form menggunakan jQuery AJAX
            //     $.ajax({
            //         type: 'POST',
            //         url: $(this).attr('action'), // Mengambil URL dari action form
            //         data: dataForm,
            //         success: function(data) {
            //             window.location.reload(); // Refresh halaman untuk memuat data terbaru
            //         },
            //         error: function(error) {
            //             console.log(error.responseText);
            //             alert('Terjadi kesalahan, data tidak dapat disimpan.');
            //         }
            //     });
            // });

            // // Ketika tombol untuk menutup modal diklik
            // $('[data-modal-hide="authentication-modal"]').click(function() {
            //     // Reset action form ke awal
            //     $('#rejectForm').attr('action', '{{ route('review_file.reject', ':id_cart_custom') }}');
            //     // Reset nilai input hidden ke kosong
            //     $('#cart_custom').val('');
            // });
        });
    </script>

@endsection
