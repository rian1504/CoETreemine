<h1>Edit</h1>

<form action="{{ route('hole.update', $hole->id_hole) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="hole_name" value="{{ old('hole_name', $hole->hole_name) }}">

    <label for="">Price</label>
    <input type="number" name="hole_price" value="{{ old('hole_price', $hole->hole_price) }}">

    <button type="submit">update</button>
</form>
