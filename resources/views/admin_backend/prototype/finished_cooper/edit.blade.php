<h1>Edit</h1>

<form action="{{ route('finished_cooper.update', $finished_cooper->id_finished_cooper) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="finished_cooper_name"
        value="{{ old('finished_cooper_name', $finished_cooper->finished_cooper_name) }}">

    <label for="">Price</label>
    <input type="number" name="finished_cooper_price"
        value="{{ old('finished_cooper_price', $finished_cooper->finished_cooper_price) }}">

    <button type="submit">update</button>
</form>
