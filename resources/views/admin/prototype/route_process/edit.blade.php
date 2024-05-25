<h1>Edit</h1>

<form action="{{ route('flexible.update', $flexible->id_flexible) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="flexible_name" value="{{ old('flexible_name', $flexible->flexible_name) }}">

    <label for="">Price</label>
    <input type="text" name="flexible_price" value="{{ old('flexible_price', $flexible->flexible_price) }}">

    <button type="submit">update</button>
</form>
