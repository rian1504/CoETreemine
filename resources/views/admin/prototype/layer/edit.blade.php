<h1>Edit</h1>

<form action="{{ route('layer.update', $layer->id_layer) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="layer_name" value="{{ old('layer_name', $layer->layer_name) }}">

    <label for="">Price</label>
    <input type="number" name="layer_price" value="{{ old('layer_price', $layer->layer_price) }}">

    <button type="submit">update</button>
</form>
