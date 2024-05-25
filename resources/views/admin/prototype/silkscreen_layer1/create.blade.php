<h1>Tambah</h1>

<form action="{{ route('silkscreen_layer1.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="silkscreen_layer1_name" value="{{ old('silkscreen_layer1_name') }}">

    <button type="submit">Simpan</button>
</form>
