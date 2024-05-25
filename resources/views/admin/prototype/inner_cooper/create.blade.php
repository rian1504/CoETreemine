<h1>Tambah</h1>

<form action="{{ route('inner_cooper.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="inner_cooper_name" value="{{ old('inner_cooper_name') }}">

    <label for="">price</label>
    <input type="number" name="inner_cooper_price" value="{{ old('inner_cooper_price') }}">

    <button type="submit">Simpan</button>
</form>
