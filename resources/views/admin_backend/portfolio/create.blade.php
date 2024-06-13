<h1>Tambah</h1>

<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Name</label>
    <input type="text" name="portfolio_name" value="{{ old('portfolio_name') }}">
    <label for="">Price</label>
    <input type="number" name="portfolio_price" value="{{ old('portfolio_price') }}">
    <label for="">Description</label>
    <input type="text" name="portfolio_description" value="{{ old('portfolio_description') }}">
    <label for="">Stock</label>
    <input type="number" name="portfolio_stock" value="{{ old('portfolio_stock') }}">
    <label for="">Picture</label>
    <input type="file" name="portfolio_picture">
    <label for="">Category Name</label>
    <select name="id_category">
        <option value="" disabled selected>Select Category</option>
        @foreach ($category as $data)
            <option value="{{ $data->id_category }}" @if (old('id_category') == $data->id_category) selected @endif>
                {{ $data->category_name }}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>
