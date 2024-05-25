<h1>Edit</h1>

<form action="{{ route('solder.update', $solder->id_solder) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="solder_name" value="{{ old('solder_name', $solder->solder_name) }}">

    <label for="">Price</label>
    <input type="number" name="solder_price" value="{{ old('solder_price', $solder->solder_price) }}">

    <button type="submit">update</button>
</form>
