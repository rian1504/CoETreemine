<h1>Edit</h1>

<form action="{{ route('inner_cooper.update', $inner_cooper->id_inner_cooper) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="inner_cooper_name"
        value="{{ old('inner_cooper_name', $inner_cooper->inner_cooper_name) }}">

    <label for="">Price</label>
    <input type="number" name="inner_cooper_price"
        value="{{ old('inner_cooper_price', $inner_cooper->inner_cooper_price) }}">

    <button type="submit">update</button>
</form>
