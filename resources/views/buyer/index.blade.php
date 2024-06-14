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
    <a href="{{ route('cart.index') }}">Cart</a>
    <a href="{{ route('buyer.assembly.index') }}">Assembly</a>
    <a href="{{ route('buyer.prototype.index') }}">Prototype</a>
    @if (Auth::check())
        {{-- Buyer --}}
        <h1>Buyer</h1>
        @include('layouts.navigation')
    @else
        {{-- Guest --}}
        <a href="{{ route('login') }}">Login</a>
        <h1>Guest</h1>
    @endif

    <h1>index</h1>
</body>

</html>
