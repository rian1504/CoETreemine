<h1>Edit</h1>

<form action="{{ route('category.update', $category->id_category) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="category_name" value="{{ old('category_name', $category->category_name) }}">

    <label for="">Picture</label>
    <input type="file" name="category_picture">

    <button type="submit">update</button>
</form>
