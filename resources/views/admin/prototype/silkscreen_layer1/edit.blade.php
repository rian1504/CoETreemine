<h1>Edit</h1>

<form action="{{ route('silkscreen_layer1.update', $silkscreen_layer1->id_silkscreen_layer1) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="silkscreen_layer1_name"
        value="{{ old('silkscreen_layer1_name', $silkscreen_layer1->silkscreen_layer1_name) }}">

    <button type="submit">update</button>
</form>
