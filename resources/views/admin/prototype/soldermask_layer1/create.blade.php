<h1>Tambah</h1>

<form action="{{ route('soldermask_layer1.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="soldermask_layer1_name" value="{{ old('soldermask_layer1_name') }}">

    <button type="submit">Simpan</button>
</form>
