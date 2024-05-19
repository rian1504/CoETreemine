<a href="{{ route('dashboard') }}">Dashboard</a>
<a href="{{ route('category.index') }}">Category</a>
<a href="{{ route('portfolio.index') }}">Portfolio</a>
<a href="{{ route('prototype.index') }}">prototype</a>
<a href="{{ route('assembly.index') }}">assembly</a>
{{-- <a href="{{ route('review_file.index') }}">review file</a>
<a href="{{ route('review_payment.index') }}">review payment</a>
<a href="{{ route('history.index') }}">history</a> --}}

<h1>Assembly</h1>

<select name="assembly" id="assembly">
    <option disabled selected>Select Assembly</option>
    @foreach ($dataSelect as $item)
        <option value="{{ $item }}" {{ session('select') == $item ? 'selected' : '' }}>
            {{ $item }}</option>
    @endforeach
</select>

@session('success')
    {{ session('success') }}
@endsession

<div class="flexible">
    <h1>Flexible</h1>
    <a href="{{ route('flexible.create') }}">Tambah</a>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Price</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataAssembly['dataFlexible'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->flexible_name }}</td>
                    <td>Rp{{ number_format($data->flexible_price, 0, ''), '.' }}</td>
                    <td>
                        <a href="{{ route('flexible.edit', $data->id_flexible) }}">Edit</a>
                        <form action="{{ route('flexible.destroy', $data->id_flexible) }}"
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
    {{ $dataAssembly['dataFlexible']->links() }}

</div>

{{-- <div class="flexible">
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
                        <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}"
                            alt="" width="100" height="100">
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

</div>

<div class="flexible">
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
                        <img src="{{ asset('/storage/assets/images/category/' . $data->category_picture) }}"
                            alt="" width="100" height="100">
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

</div> --}}
