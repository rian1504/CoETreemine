<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
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

    <h1>History Order</h1>
    <br>

    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Buyer Name</td>
                <td>No. Invoice</td>
                <td>Address Destination</td>
                <td>Shipping Method</td>
                <td>No. Resi</td>
                <td>Total Price</td>
                <td>Payment Proof</td>
                <td>Status</td>
                <td>Detail</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->no_invoice }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->shipping_method }}</td>
                <td>{{ $data->no_resi }}</td>
                <td>Rp{{ number_format($data->total_price, 0, '', '.') }}</td>
                <td>
                    <img src="{{ asset('/storage/assets/images/payment/' . $data->payment_proof) }}" alt="" width="100" height="100">
                </td>
                <td>{{ $data->status }}</td>
                <td>
                    <a href="{{ route('history.order.show', $data->id_order) }}">View Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                    No data
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>