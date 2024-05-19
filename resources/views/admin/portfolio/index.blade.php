<a href="{{ route('category.index') }}">Category</a>
<a href="{{ route('portfolio.index') }}">Portfolio</a>
{{-- <a href="{{ route('prototype.index') }}">prototype</a>
<a href="{{ route('assembly.index') }}">assembly</a>
<a href="{{ route('review_file.index') }}">review file</a>
<a href="{{ route('review_payment.index') }}">review payment</a>
<a href="{{ route('history.index') }}">history</a> --}}

<h1>Portofolio</h1>

<a href="{{ route('portfolio.create') }}">Tambah</a>

<br><br>
<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Price</td>
            <td>Description</td>
            <td>Stock</td>
            <td>Picture</td>
            <td>Category Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($datas as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->portfolio_name }}</td>
                <td>{{ $data->portfolio_price }}</td>
                <td>{{ $data->portfolio_description }}</td>
                <td>{{ $data->portfolio_stock }}</td>
                <td>
                    <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio_picture) }}" alt=""
                        width="100" height="100">
                </td>
                <td>{{ $data->category->category_name }}</td>
                <td>
                    <a href="{{ route('portfolio.edit', $data->id_portfolio) }}">Edit</a>
                    <form action="{{ route('portfolio.destroy', $data->id_portfolio) }}"
                        onsubmit="return confirm('Are you sure?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <h1>Tidak ada data</h1>
        @endforelse
    </tbody>
</table>
{{ $datas->links() }}
