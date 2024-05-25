<h1>Edit</h1>

<form action="{{ route('soldermask_layer1.update', $soldermask_layer1->id_soldermask_layer1) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="soldermask_layer1_name"
        value="{{ old('soldermask_layer1_name', $soldermask_layer1->soldermask_layer1_name) }}">

    <button type="submit">update</button>
</form>
