<h1>Edit</h1>

<form action="{{ route('thickness.update', $thickness->id_thickness) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="thickness_name" value="{{ old('thickness_name', $thickness->thickness_name) }}">

    <label for="">Price</label>
    <input type="text" name="thickness_price" value="{{ old('thickness_price', $thickness->thickness_price) }}">

    <label for="">Layer Name</label>
    <select name="id_layer">
        @foreach ($layer as $data)
            <option value="{{ $data->id_layer }}"
                {{ old('id_layer', $thickness->id_layer) == $data->id_layer ? 'selected' : '' }}>
                {{ $data->layer_name }}</option>
        @endforeach
    </select>

    <button type="submit">update</button>
</form>
