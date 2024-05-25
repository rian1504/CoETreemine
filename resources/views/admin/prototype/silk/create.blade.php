<h1>Tambah</h1>

<form action="{{ route('silk.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="silk_name" value="{{ old('silk_name') }}">

    <label for="">price</label>
    <input type="number" name="silk_price" value="{{ old('silk_price') }}">

    <button type="submit">Simpan</button>
</form>
