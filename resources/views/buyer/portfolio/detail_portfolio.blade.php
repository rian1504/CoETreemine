@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Detail Product Portfolio')

@section('content')

@session('success')
{{ session('success') }}
@endsession

<div class="flex flex-col my-8 gap-8 mt-36">
    <div class="py-4 px-8 bg-white rounded-lg">
        <div class="flex justify-around">
            <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="" class="w-60 h-60 object-cover">
            <div>
                <h1>{{ $data->portfolio_name }}</h1>
                <h1>Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>
                <h1>{{ $data->portfolio_stock }} Available</h1>
                <div class="grid grid-cols-2 relative">
                    <form action="{{ route('buyer.portfolio.cartAdd') }}" method="POST" onsubmit="return confirm('Ingin menambah data ke keranjang?')">
                        @csrf
                        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
                        <input type="hidden" name="portfolio_stock" value="{{ $data->portfolio_stock }}">
                        <div class="grid grid-cols-2 absolute -top-0">
                            <p>Quantity</p>
                            <input type="number" name="quantity" id="input1" oninput="syncInput()">
                        </div>
                        <br>
                        <button type="submit">Add to Cart</button>
                    </form>
                    <form action="{{ route('buyer.portfolio.buyNow') }}" method="POST" onsubmit="return confirm('Ingin membeli barang ini?')">
                        @csrf
                        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
                        <input type="hidden" name="quantity" id="input2">
                        <button type="submit">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
        <h3>DESCRIPTION :</h3>
        <h1>{{ $data->portfolio_description }}</h1>
    </div>
</div>






<script>
    function syncInput() {
        const input1 = document.getElementById('input1');
        const input2 = document.getElementById('input2');
        input2.value = input1.value;
    }
</script>

@endsection