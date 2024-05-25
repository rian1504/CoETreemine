<h1>Tambah</h1>

<form action="{{ route('track.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="track_name" value="{{ old('track_name') }}">

    <label for="">price</label>
    <input type="number" name="track_price" value="{{ old('track_price') }}">

    <button type="submit">Simpan</button>
</form>
