<h1>Edit</h1>

<form action="{{ route('surface.update', $surface->id_surface) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="surface_name" value="{{ old('surface_name', $surface->surface_name) }}">

    <label for="">Price</label>
    <input type="number" name="surface_price" value="{{ old('surface_price', $surface->surface_price) }}">

    <button type="submit">update</button>
</form>
