<h1>Edit</h1>

<form action="{{ route('via_process.update', $via_process->id_via) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="via_process_name" value="{{ old('via_process_name', $via_process->via_process_name) }}">

    <label for="">Price</label>
    <input type="number" name="via_process_price" value="{{ old('via_process_price', $via_process->via_process_price) }}">

    <button type="submit">update</button>
</form>
