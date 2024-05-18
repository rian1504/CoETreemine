<h1>Tambah</h1>

<form action="/category" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Name</label>
    <input type="text" name="category_name" value="{{ old('category_name') }}">
    <label for="">Picture</label>
    <input type="file" name="category_picture">

    <button type="submit">Simpan</button>
</form>
