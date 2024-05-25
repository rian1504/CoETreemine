<h1>Edit</h1>

<form action="{{ route('side.update', $side->id_side) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="side_name" value="{{ old('side_name', $side->side_name) }}">

    <label for="">Price</label>
    <input type="number" name="side_price" value="{{ old('side_price', $side->side_price) }}">

    <button type="submit">update</button>
</form>
