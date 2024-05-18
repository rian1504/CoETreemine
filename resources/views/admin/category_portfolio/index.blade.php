<a href="/category">Category</a>
<a href="/portfolio">Portfolio</a>
<a href="/prototype">prototype</a>
<a href="/assembly">assembly</a>
<a href="/review_file">review file</a>
<a href="/review_payment">review payment</a>
<a href="/history">history</a>

<h1>Category</h1>

<a href="{{ route('category.create') }}">Tambah</a>

<br><br>
<table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Picture</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($datas as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->category_name }}</td>
                <td>
                    <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt=""
                        width="100" height="100">
                </td>
                <td>
                    <a href="{{ route('category.edit', $data->id_category) }}">Edit</a>
                    <form action="{{ route('category.destroy', $data->id_category) }}"
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
