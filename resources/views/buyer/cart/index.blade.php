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
        <div class="px-3 py-1 bg-gray-400 w-20 flex justify-center items-center rounded-lg text-white text-sm hover:bg-gray-500">
            <a href="{{ url()->previous() }}" rel="noopener noreferrer"><i class="fas fa-arrow-left me-1"></i>Back</a>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg text-nowrap truncate">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @if ($data->custom_prototype != null)
                        <td class="w-4 p-4 text-center">
                            <div class="flex items-center">
                                <input type="checkbox" name="custom[]" id="custom" value="{{ $data->id_cart_custom }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @disabled($data->status == 'not review')>
                                <label for="custom" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        @else
                        <td class="w-4 p-4 text-center">
                            <div class="flex items-center">
                                <input type="checkbox" name="custom[]" id="custom" value="{{ $data->id_cart_custom }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @disabled($data->status == 'not review')>
                                <label for="custom" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        @endif
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset('/storage/assets/images/pcb-assembly.jpg') }}" alt="" width="100" height="100">
                            <h1>Assembly</h1>
                        </th>
                        <td class="px-6 py-4">{{ $data->custom_assembly->quantity }}</td>
                        <td class="px-6 py-4">{{ number_format($data->custom_assembly->price, 0, '', '.') }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('cart.assembly', $data->custom_assembly->id_custom_assembly) }}">View Detail</a>
                        </td>
                        <td class="px-6 py-4">
                            {{-- BUTTON ADD FILE --}}
                            @if ($data->custom_assembly->file == null)
                            <form action="{{ route('cart.assembly.addFile', $data->custom_assembly->id_custom_assembly) }}" method="POST" enctype="multipart/form-data" class="add-file-form">
                                @csrf
                                <input type="file" name="file">
                                <button type="submit">Save</button>
                            </form>
                            <h1>Not Completed</h1>
                            @else
                            <h1>Under Review</h1>
                            @endif

                            {{-- BUTTON DELETE CART CUSTOM --}}
                            <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 text-center">
                            <input type="checkbox" name="custom[]" id="custom" value="{{ $data->id_cart_custom }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" @disabled($data->status == 'not review')>
                        </td>
                        @endif

                        {{-- CUSTOM PROTOTYPE --}}
                        @if ($data->custom_prototype != null)
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset('/storage/assets/images/pcb-prototype.png') }}" alt="" width="100" height="100">
                            <h1>Prototype</h1>
                        </th>
                        <td class="w-4 p-4 text-center">{{ $data->custom_prototype->quantity }}</td>
                        <td class="w-4 p-4 text-center">{{ number_format($data->custom_prototype->price, 0, '', '.') }}</td>
                        <td class="w-4 p-4 text-center">
                            <a href="{{ route('cart.prototype', $data->custom_prototype->id_custom_prototype) }}">View
                                Detail</a>
                        </td>
                        <td class="w-4 p-4 text-center">
                            {{-- BUTTON ADD FILE --}}
                            @if ($data->custom_prototype->file == null)
                            <form action="{{ route('cart.prototype.addFile', $data->custom_prototype->id_custom_prototype) }}" method="POST" enctype="multipart/form-data" class="add-file-form">
                                @csrf
                                <input type="file" name="file">
                                <button type="submit">Save</button>
                            </form>
                            <h1>Not Completed</h1>
                            @else
                            <h1>Under Review</h1>
                            @endif

                            {{-- BUTTON DELETE CART CUSTOM --}}
                            <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach

                    @foreach ($dataPortfolio as $index => $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 text-center">
                            <input type="checkbox" name="portfolio[]" id="portfolio" value="{{ $data->id_portfolio }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex gap-2">
                            <div class="h-20 w-20 border-custom-grey border-2 rounded-lg p-2">
                                <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio->portfolio_picture) }}" alt="" class="h-full w-full object-cover">
                            </div>
                            {{ $data->portfolio->portfolio_name }}
                        </th>
                        <td class="w-4 p-4 text-center">
                            <div class="flex justify-center items-center">
                                <button type="button" onclick="decreaseQuantity('{{ $data->id_cart_portfolio }}')" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-l">
                                    -
                                </button>
                                <input type="text" id="quantity-{{ $data->id_cart_portfolio }}" name="quantity" value="{{ $data->quantity }}" class="w-12 text-center border-t border-b border-gray-200" readonly>
                                <button type="button" onclick="increaseQuantity('{{ $data->id_cart_portfolio }}')" class="px-2 py-1 bg-gray-200 hover:bg-gray-300 rounded-r">
                                    +
                                </button>
                            </div>
                        </td>
                        <td class="w-4 p-4 text-center">
                            <h1>{{ number_format($data->portfolio->portfolio_price, 0, '', '.') }}</h1>
                        </td>
                        <td class="w-4 p-4 text-center">
                            <a href="{{ route('cart.portfolio', $data->portfolio->id_portfolio) }}">
                                View Detail
                            </a>
                        </td>
                        <td class="w-4 p-4 text-center">
                            <form action="{{ route('cart.portfolio.delete', $data->id_cart_portfolio) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash"></i></button>
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

@endsection