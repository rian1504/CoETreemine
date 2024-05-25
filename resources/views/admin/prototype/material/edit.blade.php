<h1>Edit</h1>

<form action="{{ route('material.update', $material->id_material) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="material_name" value="{{ old('material_name', $material->material_name) }}">

    <label for="">Picture</label>
    <input type="file" name="material_picture">

    <label for="">Price</label>
    <input type="number" name="material_price" value="{{ old('material_price', $material->material_price) }}">

    <button type="submit">update</button>
</form>
