<h1>Tambah</h1>

<form action="{{ route('fr4.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="fr4_name" value="{{ old('fr4_name') }}">

    <button type="submit">Simpan</button>
</form>
