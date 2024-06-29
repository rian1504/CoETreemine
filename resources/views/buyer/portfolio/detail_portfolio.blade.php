@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Detail Product Portfolio')

@section('content')
<div class="flex flex-col my-8 gap-8 mt-36 ">
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg">
        {{ session('success') }}
    </div>
    @endif

    <div class="py-8 px-8 bg-white rounded-lg h-[400px] flex flex-col gap-4">
        <div class="px-3 py-1 bg-gray-400 w-20 flex justify-center items-center rounded-lg text-white text-sm hover:bg-gray-500">
            <a href="{{ url()->previous() }}" rel="noopener noreferrer"><i class="fas fa-arrow-left me-1"></i>Back</a>
        </div>
        <div class="flex justify-between h-full gap-4">
            <div class="w-1/3 h-60 overflow-hidden rounded-lg shadow-lg bg-custom-grey">
                <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="Portfolio Picture" class="image">
            </div>
            <!-- description box -->
            <div class="w-1/3 h-[90%] overflow-y-auto p-4 bg-white dark:bg-gray-800 custom-scrollbar">
                <h1 class="text-lg font-bold text-black dark:text-white leading-tight tracking-tight mb-2">DESCRIPTION :</h1>
                <h1 class="text-sm text-gray-700 dark:text-gray-300">{{ $data->portfolio_description }}</h1>
            </div>
            <!-- order box -->
            <div class="hover-effect w-1/3 min-h-52 border border-gray-200 rounded-lg shadow-md p-4">
                <h1 class="text-2xl font-bold text-black dark:text-white leading-tight tracking-tight">{{ $data->portfolio_name }}</h1>
                <h1 class="my-2 text-lg text-buyer-green dark:text-white leading-tight tracking-tight">Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>

                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <label for="input1" class="text-sm mr-2">Quantity:</label>
                        <input type="number" name="quantity" id="input1" oninput="syncInput()" class="max-w-20 py-2 px-3 border border-gray-300 rounded-lg focus:outline-none focus:border-buyer-green dark:focus:border-white">
                    </div>

                    <div class="flex items-center">
                        <p class="text-sm mr-2">Available:</p>
                        <p>{{ $data->portfolio_stock }}</p>
                    </div>
                </div>

                <div class="flex justify-between mt-4">
                    <form action="{{ route('buyer.portfolio.cartAdd') }}" method="POST" onsubmit="return confirm('Ingin menambah data ke keranjang?')" class="flex-1 mr-2">
                        @csrf
                        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
                        <input type="hidden" name="quantity" id="input2" value="1"> <!-- Default value -->
                        <input type="hidden" name="portfolio_stock" value="{{ $data->portfolio_stock }}">
                        <button type="submit" class="w-full py-2 px-4 bg-buyer-green text-white rounded-lg hover:bg-opacity-80 focus:outline-none focus:bg-opacity-80"><i class="fas fa-shopping-cart me-4"></i>Add to Cart</button>
                    </form>

                    <form action="{{ route('buyer.portfolio.buyNow') }}" method="POST" onsubmit="return confirm('Ingin membeli barang ini?')" class="flex-1 ml-2">
                        @csrf
                        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
                        <input type="hidden" name="quantity" id="input2">
                        <button type="submit" class="w-full py-2 px-4 border border-buyer-green text-buyer-green rounded-lg hover:bg-opacity-80 focus:outline-none focus:bg-opacity-80">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-scrollbar {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }

    .custom-scrollbar::-webkit-scrollbar {
        display: none;
    }
</style>

<script>
    function syncInput() {
        const input1 = document.getElementById('input1');
        const input2 = document.getElementById('input2');
        input2.value = input1.value;
    }
</script>
@endsection