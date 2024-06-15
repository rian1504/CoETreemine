<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('category.index') }}">Category</a>
<a href="{{ route('portfolio.index') }}">Portfolio</a>
<a href="{{ route('prototype.index') }}">prototype</a>
<a href="{{ route('assembly.index') }}">assembly</a>
<a href="{{ route('review_file.index') }}">review file</a>
<a href="{{ route('review_payment.index') }}">review payment</a>
{{-- <a href="{{ route('history.index') }}">history</a> --}}

<h1>Review File</h1>

@session('success')
{{ session('success') }}
@endsession

<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Buyer Name</td>
            <td>Buyer Phone</td>
            <td>Custom Name</td>
            <td>Price</td>
            <td>Detail</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($datas as $index => $data)
        @if ($data->custom_assembly != null)
        <tr>
            <td rowspan="2">{{ $index + 1 }}</td>
            <td rowspan="2">{{ $data->user->name }}</td>
            <td rowspan="2">{{ $data->user->telp }}</td>
            <td>Assembly</td>
            <td>Rp{{ number_format($data->custom_assembly->price, 0, '', '.') }}</td>
            <td>
                <a href="{{ route('review_file.showAssembly', $data->custom_assembly->id_custom_assembly) }}">View
                    Detail</a>
            </td>
            <td rowspan="2">
                <form action="{{ route('review_file.reject', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to reject?')">
                    @csrf
                    <input type="text" name="reason">
                    <button type="submit">Reject</button>
                </form>
                <form action="{{ route('review_file.accept', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to accept?')">
                    @csrf

                    <button type="submit">Accept</button>
                </form>
            </td>
        </tr>
        @else
        <tr>
            <td rowspan="2">{{ $index + 1 }}</td>
            <td rowspan="2">{{ $data->user->name }}</td>
            <td rowspan="2">{{ $data->user->telp }}</td>
            <td colspan="3">Assembly Kosong</td>
            <td rowspan="2">
                <form action="{{ route('review_file.reject', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to reject?')">
                    @csrf
                    <input type="text" name="reason">
                    <button type="submit">Reject</button>
                </form>
                <form action="{{ route('review_file.accept', $data->id_cart_custom) }}" method="POST" onsubmit="return confirm('Are you sure want to accept?')">
                    @csrf

                    <button type="submit">Accept</button>
                </form>
            </td>
        </tr>
        @endif

        @if ($data->custom_prototype != null)
        <tr>
            <td>Prototype</td>
            <td>Rp{{ number_format($data->custom_prototype->price, 0, '', '.') }}</td>
            <td>
                <a href="{{ route('review_file.showPrototype', $data->custom_prototype->id_custom_prototype) }}">View
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
            <td colspan="4" class="px-6 py-3 text-center text-gray-500 dark:text-gray-400">
                No data
            </td>
        </tr>
        @endforelse


    </tbody>
</table>