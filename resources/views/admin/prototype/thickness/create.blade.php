<h1>Tambah</h1>

<form action="{{ route('thickness.store') }}" method="POST">
    @csrf

    <label for="">Name</label>
    <input type="text" name="thickness_name" value="{{ old('thickness_name') }}">

    <label for="">price</label>
    <input type="number" name="thickness_price" value="{{ old('thickness_price') }}">

    <label for="">Layer Name</label>
    <select name="id_layer">
        <option value="" disabled selected>Select Layer</option>
        @foreach ($layer as $data)
            <option value="{{ $data->id_layer }}" @if (old('id_layer') == $data->id_layer) selected @endif>
                {{ $data->layer_name }}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>
