<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <a href="{{ route('cart.index') }}">Back</a>


    <h1>Category: {{ $data->category->category_name }}</h1>
    <h1>Name: {{ $data->portfolio_name }}</h1>
    <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt="" width="100"
        height="100">
    <h1>Rp{{ number_format($data->portfolio_price, 0, '', '.') }}</h1>
    <h1>{{ $data->portfolio_stock }} Available</h1>

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
