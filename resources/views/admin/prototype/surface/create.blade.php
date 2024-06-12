<h1>Tambah</h1>

<form action="{{ route('surface.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="surface_name" value="{{ old('surface_name') }}">

    <label for="">price</label>
    <input type="number" name="surface_price" value="{{ old('surface_price') }}">

    <button type="submit">Simpan</button>
</form>
