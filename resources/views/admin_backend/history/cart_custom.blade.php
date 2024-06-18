<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart Custom</title>
</head>

<body>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('category.index') }}">Category</a>
    <a href="{{ route('portfolio.index') }}">Portfolio</a>
    <a href="{{ route('prototype.index') }}">Prototype</a>
    <a href="{{ route('assembly.index') }}">Assembly</a>
    <a href="{{ route('review_file.index') }}">Review File</a>
    <a href="{{ route('review_payment.index') }}">Review Payment</a>
    <a href="{{ route('history.cart_custom') }}">History Cart Custom</a>
    <a href="{{ route('history.order') }}">History Order</a>
    <h1>History Cart Custom</h1>
    <br>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Buyer Name</td>
                <td>Total Price</td>
                <td>Status</td>
                <td>Reason</td>
                <td>Custom Name</td>
                <td>Price</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas as $index => $data)
            @if ($data->custom_assembly != null)
            <tr>
                <td rowspan="2">{{ $index + 1 }}</td>
                <td rowspan="2">{{ $data->user->name }}</td>
                <td rowspan="2">Rp{{ number_format($data->total_price, 0, '', '.') }}</td>
                <td rowspan="2">{{ $data->status }}</td>
                <td rowspan="2">{{ $data->reason }}</td>
                <td>Assembly</td>
                <td>Rp{{ number_format($data->custom_assembly->price, 0, '', '.') }}</td>
                <td>
                    <a href="{{ route('history.cart_custom.assembly', $data->custom_assembly->id_custom_assembly) }}">View
                        Detail</a>
                </td>
            </tr>
            @else
            <tr>
                <td rowspan="2">{{ $index + 1 }}</td>
                <td rowspan="2">{{ $data->user->name }}</td>
                <td rowspan="2">Rp{{ number_format($data->total_price, 0, '', '.') }}</td>
                <td rowspan="2">{{ $data->status }}</td>
                <td rowspan="2">{{ $data->reason }}</td>
                <td colspan="3">Assembly Kosong</td>
            </tr>
            @endif

            @if ($data->custom_prototype != null)
            <tr>
                <td>Prototype</td>
                <td>Rp{{ number_format($data->custom_prototype->price, 0, '', '.') }}</td>
                <td>
                    <a href="{{ route('history.cart_custom.prototype', $data->custom_prototype->id_custom_prototype) }}">View
                        Detail</a>
                </td>
            </tr>
            @else
            <tr>
                <td colspan="3">Prototype Kosong</td>
            </tr>
            @endif

            @empty
            <tr>
                <td colspan="8" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                    No data
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>