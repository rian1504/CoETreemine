<h1>Edit</h1>

<form action="{{ route('portfolio.update', $portfolio->id_portfolio) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input type="text" name="portfolio_name" value="{{ old('portfolio_name', $portfolio->portfolio_name) }}">

    <label for="">Price</label>
    <input type="number" name="portfolio_price" value="{{ old('portfolio_price', $portfolio->portfolio_price) }}">

    <label for="">Description</label>
    <input type="text" name="portfolio_description"
        value="{{ old('portfolio_description', $portfolio->portfolio_description) }}">

    <label for="">Stock</label>
    <input type="number" name="portfolio_stock" value="{{ old('portfolio_stock', $portfolio->portfolio_stock) }}">

    <label for="">Picture</label>
    <input type="file" name="portfolio_picture">

    <label for="">Category Name</label>
    <select name="id_category">
        @foreach ($category as $data)
            <option value="{{ $data->id_category }}"
                {{ old('id_category', $portfolio->id_category) == $data->id_category ? 'selected' : '' }}>
                {{ $data->category_name }}</option>
        @endforeach
    </select>

    <button type="submit">update</button>
</form>
