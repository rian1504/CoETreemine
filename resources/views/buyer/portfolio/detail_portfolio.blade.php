<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @session('success')
        {{ session('success') }}
    @endsession

    <h1>{{ $data->portfolio_name }}</h1>
    <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="" width="100"
        height="100">
    <h1>Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>
    <h1>{{ $data->portfolio_stock }} Available</h1>

    <form action="{{ route('buyer.portfolio.cartAdd') }}" method="POST"
        onsubmit="return confirm('Ingin menambah data ke keranjang?')">
        @csrf
        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
        <input type="hidden" name="portfolio_stock" value="{{ $data->portfolio_stock }}">
        <p>Quantity</p>
        <input type="number" name="quantity" id="input1" oninput="syncInput()">
        <br>
        <button type="submit">Add to Cart</button>
    </form>
    <form action="{{ route('buyer.portfolio.buyNow') }}" method="POST"
        onsubmit="return confirm('Ingin membeli barang ini?')">
        @csrf
        <input type="hidden" name="id_portfolio" value="{{ $data->id_portfolio }}">
        <input type="hidden" name="quantity" id="input2">
        <button type="submit">Buy Now</button>
    </form>

    <h3>DESCRIPTION :</h3>
    <h1>{{ $data->portfolio_description }}</h1>

    <script>
        function syncInput() {
            const input1 = document.getElementById('input1');
            const input2 = document.getElementById('input2');
            input2.value = input1.value;
        }
    </script>
</body>

</html>
