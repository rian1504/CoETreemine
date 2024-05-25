<h1>Tambah</h1>

<form action="{{ route('material.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Name</label>
    <input type="text" name="material_name" value="{{ old('material_name') }}">

    <label for="">Picture</label>
    <input type="file" name="material_picture">

    <label for="">price</label>
    <input type="number" name="material_price" value="{{ old('material_price') }}">

    <button type="submit">Simpan</button>
</form>
