<h1>Tambah</h1>

<form action="{{ route('flexible.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="flexible_name" value="{{ old('flexible_name') }}">
    <label for="">price</label>
    <input type="number" name="flexible_price" value="{{ old('flexible_price') }}">

    <button type="submit">Simpan</button>
</form>
