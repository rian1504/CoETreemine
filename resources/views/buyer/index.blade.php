<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (Auth::check())
        {{-- Buyer --}}
        <nav>
            <h1>Buyer</h1>
            @include('layouts.navigation')
        </nav>
    @else
        {{-- Guest --}}
        <nav>
            <h1>Guest</h1>
        </nav>
    @endif

    <h1>index</h1>
</body>

</html>
