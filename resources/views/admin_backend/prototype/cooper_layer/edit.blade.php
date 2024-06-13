<h1>Edit</h1>

<form action="{{ route('cooper_layer.update', $cooper_layer->id_cooper_layer) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="cooper_layer_name"
        value="{{ old('cooper_layer_name', $cooper_layer->cooper_layer_name) }}">

    <button type="submit">update</button>
</form>
