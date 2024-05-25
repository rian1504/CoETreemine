<h1>Tambah</h1>

<form action="{{ route('via_process.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="via_process_name" value="{{ old('via_process_name') }}">

    <label for="">price</label>
    <input type="number" name="via_process_price" value="{{ old('via_process_price') }}">

    <button type="submit">Simpan</button>
</form>
