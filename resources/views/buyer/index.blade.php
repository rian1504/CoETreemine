<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('buyer.portfolio.index') }}">Product</a>
    @if (Auth::check())
        {{-- Buyer --}}
        <h1>Buyer</h1>
        @include('layouts.navigation')
    @else
        {{-- Guest --}}
        <nav>
            <h1>Guest</h1>
        </nav>
    @endif

    <h1>index</h1>
</body>

</html>
