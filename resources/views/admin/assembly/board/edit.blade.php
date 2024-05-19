<h1>Edit</h1>

<form action="{{ route('board.update', $board->id_board) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="board_type_name" value="{{ old('board_type_name', $board->board_type_name) }}">

    <button type="submit">update</button>
</form>
