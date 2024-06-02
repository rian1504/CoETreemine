<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $datas->category_name }}</h1>
    @forelse ($datas->portfolio as $data)
        <div>
            <a href="{{ route('buyer.portfolio.showPortfolio', $data->id_portfolio) }}">
                <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt=""
                    width="100" height="100">
                <h1>{{ $data->portfolio_name }}</h1>
            </a>
        </div>
    @empty
        <h1>Data Tidak Tersedia</h1>
    @endforelse
</body>

</html>
