<h1>Tambah</h1>

<form action="{{ route('solder.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="solder_name" value="{{ old('solder_name') }}">

    <label for="">price</label>
    <input type="number" name="solder_price" value="{{ old('solder_price') }}">

    <button type="submit">Simpan</button>
</form>
