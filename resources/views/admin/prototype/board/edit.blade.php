<h1>Edit</h1>

<form action="{{ route('board_type.update', $board_type->id_board) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="board_type_name" value="{{ old('board_type_name', $board_type->board_type_name) }}">

    <label for="">Price</label>
    <input type="number" name="board_type_price" value="{{ old('board_type_price', $board_type->board_type_price) }}">

    <button type="submit">update</button>
</form>
