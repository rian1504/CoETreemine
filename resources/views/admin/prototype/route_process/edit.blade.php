<h1>Edit</h1>

<form action="{{ route('route_process.update', $route_process->id_route) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="route_process_name"
        value="{{ old('route_process_name', $route_process->route_process_name) }}">

    <button type="submit">update</button>
</form>
