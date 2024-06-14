<h1>Tambah</h1>

<form action="{{ route('board.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="board_type_name" value="{{ old('board_type_name') }}">

    <button type="submit">Simpan</button>
</form>
