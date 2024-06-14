<h1>Tambah</h1>

<form action="{{ route('route_process.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="route_process_name" value="{{ old('route_process_name') }}">

    <button type="submit">Simpan</button>
</form>
