<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('category.index') }}">Category</a>
<a href="{{ route('portfolio.index') }}">Portfolio</a>
<a href="{{ route('prototype.index') }}">prototype</a>
<a href="{{ route('assembly.index') }}">assembly</a>
<a href="{{ route('review_file.index') }}">review file</a>
<a href="{{ route('review_payment.index') }}">review payment</a>
{{-- <a href="{{ route('history.index') }}">history</a> --}}

<h1>Review Payment</h1>

@session('success')
    {{ session('success') }}
@endsession

<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Buyer Name</td>
            <td>Buyer Phone</td>
            <td>Address Destination</td>
            <td>Total Price</td>
            <td>Payment Proof</td>
            <td>Detail</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($datas as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->user->telp }}</td>
                <td>{{ $data->address }}</td>
                <td>Rp{{ number_format($data->total_price, 0, '', '.') }}</td>
                <td>
                    <img src="{{ asset('/storage/assets/images/payment/' . $data->payment_proof) }}" alt=""
                        width="100" height="100">
                </td>
                <td>
                    <a href="{{ route('review_payment.show', $data->id_order) }}">View Detail</a>
                </td>
                <td>
                    <form action="{{ route('review_payment.reject', $data->id_order) }}" method="POST"
                        onsubmit="return confirm('Are you sure want to reject?')">
                        @csrf
                        <button type="submit">Reject</button>
                    </form>
                    <form action="{{ route('review_payment.accept', $data->id_order) }}" method="POST"
                        onsubmit="return confirm('Are you sure want to accept?')">
                        @csrf
                        <button type="submit">Accept</button>
                    </form>
                </td>
            </tr>
        @empty
            <h1>Tidak ada data</h1>
        @endforelse
    </tbody>
</table>
