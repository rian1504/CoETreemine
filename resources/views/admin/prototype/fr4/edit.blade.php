<h1>Edit</h1>

<form action="{{ route('fr4.update', $fr4->id_fr4) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="fr4_name" value="{{ old('fr4_name', $fr4->fr4_name) }}">

    <button type="submit">update</button>
</form>
