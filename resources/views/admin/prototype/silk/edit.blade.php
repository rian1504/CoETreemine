<h1>Edit</h1>

<form action="{{ route('silk.update', $silk->id_silk) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="silk_name" value="{{ old('silk_name', $silk->silk_name) }}">

    <label for="">Price</label>
    <input type="number" name="silk_price" value="{{ old('silk_price', $silk->silk_price) }}">

    <button type="submit">update</button>
</form>
