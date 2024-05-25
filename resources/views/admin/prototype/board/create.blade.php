<h1>Tambah</h1>

<form action="{{ route('board_type.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="board_type_name" value="{{ old('board_type_name') }}">

    <label for="">Price</label>
    <input type="number" name="board_type_price" value="{{ old('board_type_price') }}">

    <button type="submit">Simpan</button>
</form>
