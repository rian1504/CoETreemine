<h1>Tambah</h1>

<form action="{{ route('finished_cooper.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="finished_cooper_name" value="{{ old('finished_cooper_name') }}">

    <label for="">price</label>
    <input type="number" name="finished_cooper_price" value="{{ old('finished_cooper_price') }}">

    <button type="submit">Simpan</button>
</form>
