<h1>Tambah</h1>

<form action="{{ route('cooper_layer.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="cooper_layer_name" value="{{ old('cooper_layer_name') }}">

    <button type="submit">Simpan</button>
</form>
