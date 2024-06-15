<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('category.index') }}">Category</a>
<a href="{{ route('portfolio.index') }}">Portfolio</a>
<a href="{{ route('prototype.index') }}">prototype</a>
<a href="{{ route('assembly.index') }}">assembly</a>
{{-- <a href="{{ route('review_file.index') }}">review file</a>
<a href="{{ route('review_payment.index') }}">review payment</a>
<a href="{{ route('history.index') }}">history</a> --}}

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
                <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}" alt="" width="100" height="100">
            </td>
            <td>
                <a href="{{ route('category.edit', $data->id_category) }}">Edit</a>
                <form action="{{ route('category.destroy', $data->id_category) }}" onsubmit="return confirm('Are you sure?')" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
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
{{ $datas->links() }}