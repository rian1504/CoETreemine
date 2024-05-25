<h1>Tambah</h1>

<form action="{{ route('side.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="side_name" value="{{ old('side_name') }}">
    <label for="">price</label>
    <input type="number" name="side_price" value="{{ old('side_price') }}">

    <button type="submit">Simpan</button>
</form>
