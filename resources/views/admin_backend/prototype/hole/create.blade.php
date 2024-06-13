<h1>Tambah</h1>

<form action="{{ route('hole.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="hole_name" value="{{ old('hole_name') }}">

    <label for="">price</label>
    <input type="number" name="hole_price" value="{{ old('hole_price') }}">

    <button type="submit">Simpan</button>
</form>
