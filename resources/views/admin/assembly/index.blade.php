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

<div class="board">
    <h1>Board</h1>
    <a href="{{ route('board.create') }}">Tambah</a>

    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataAssembly['dataBoard'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->board_type_name }}</td>
                    <td>
                        <a href="{{ route('board.edit', $data->id_board) }}">Edit</a>
                        <form action="{{ route('board.destroy', $data->id_board) }}"
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
    {{ $dataAssembly['dataBoard']->links() }}

</div>

<div class="side">
    <h1>Side</h1>
    <a href="{{ route('side.create') }}">Tambah</a>

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
            @forelse ($dataAssembly['dataSide'] as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->side_name }}</td>
                    <td>Rp{{ number_format($data->side_price, 0, ''), '.' }}</td>
                    <td>
                        <a href="{{ route('side.edit', $data->id_side) }}">Edit</a>
                        <form action="{{ route('side.destroy', $data->id_side) }}"
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
    {{ $dataAssembly['dataSide']->links() }}

</div>
