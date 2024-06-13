<h1>Tambah</h1>

<form action="{{ route('layer.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="layer_name" value="{{ old('layer_name') }}">

    <label for="">Price</label>
    <input type="number" name="layer_price" value="{{ old('layer_price') }}">

    <button type="submit">Simpan</button>
</form>
