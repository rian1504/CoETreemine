<h1>Edit</h1>

<form action="{{ route('track.update', $track->id_track) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="track_name" value="{{ old('track_name', $track->track_name) }}">

    <label for="">Price</label>
    <input type="number" name="track_price" value="{{ old('track_price', $track->track_price) }}">

    <button type="submit">update</button>
</form>
