<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Cart Buyer</h1>

    @session('success')
        {{ session('success') }}
    @endsession

    <table border="1">
        <thead>
            <tr>
                <td>
                    <input type="checkbox" name="all" id="all">
                    All
                </td>
                <td>Product Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Detail</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataCustom as $index => $data)
                {{-- CUSTOM ASSEMBLY --}}
                @if ($data->custom_assembly != null)
                    <tr>
                        @if ($data->custom_prototype != null)
                            <td rowspan="2">
                                <input type="checkbox" name="custom[]" id="custom"
                                    value="{{ $data->id_cart_custom }}" @disabled($data->status == 'not review')>
                            </td>
                        @else
                            <td>
                                <input type="checkbox" name="custom[]" id="custom"
                                    value="{{ $data->id_cart_custom }}" @disabled($data->status == 'not review')>
                            </td>
                        @endif
                        <td>
                            <img src="{{ asset('/storage/assets/images/pcb-assembly.jpg') }}" alt=""
                                width="100" height="100">
                            Assembly
                        </td>
                        <td>{{ $data->custom_assembly->quantity }}</td>
                        <td>{{ number_format($data->custom_assembly->price, 0, '', '.') }}</td>
                        <td>
                            <a href="{{ route('cart.assembly', $data->custom_assembly->id_custom_assembly) }}">View
                                Detail</a>
                        </td>
                        <td>
                            {{-- BUTTON ADD FILE --}}
                            @if ($data->custom_assembly->file == null)
                                <form
                                    action="{{ route('cart.assembly.addFile', $data->custom_assembly->id_custom_assembly) }}"
                                    method="POST" enctype="multipart/form-data" class="add-file-form">
                                    @csrf
                                    <input type="file" name="file">
                                    <button type="submit">Save</button>
                                </form>
                                <h1>Not Completed</h1>
                            @else
                                <h1>Under Review</h1>
                            @endif

                            {{-- BUTTON DELETE CART CUSTOM --}}
                            <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}" method="POST"
                                onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete Order</button>
                            </form>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td>
                            <input type="checkbox" name="custom[]" id="custom" value="{{ $data->id_cart_custom }}"
                                @disabled($data->status == 'not review')>
                        </td>
                @endif

                {{-- CUSTOM PROTOTYPE --}}
                @if ($data->custom_prototype != null)
                    <td>
                        <img src="{{ asset('/storage/assets/images/pcb-prototype.png') }}" alt=""
                            width="100" height="100">
                        Prototype
                    </td>
                    <td>{{ $data->custom_prototype->quantity }}</td>
                    <td>{{ number_format($data->custom_prototype->price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('cart.prototype', $data->custom_prototype->id_custom_prototype) }}">View
                            Detail</a>
                    </td>
                    <td>
                        {{-- BUTTON ADD FILE --}}
                        @if ($data->custom_prototype->file == null)
                            <form
                                action="{{ route('cart.prototype.addFile', $data->custom_prototype->id_custom_prototype) }}"
                                method="POST" enctype="multipart/form-data" class="add-file-form">
                                @csrf
                                <input type="file" name="file">
                                <button type="submit">Save</button>
                            </form>
                            <h1>Not Completed</h1>
                        @else
                            <h1>Under Review</h1>
                        @endif

                        {{-- BUTTON DELETE CART CUSTOM --}}
                        <form action="{{ route('cart.custom.delete', $data->id_cart_custom) }}" method="POST"
                            onsubmit="return confirm('Are you sure want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Order</button>
                        </form>
                    </td>
                    </tr>
                @endif
            @endforeach

            @foreach ($dataPortfolio as $index => $data)
                <tr>
                    <td>
                        <input type="checkbox" name="portfolio[]" id="portfolio" value="{{ $data->id_portfolio }}">
                    </td>
                    <td>
                        <img src="{{ asset('/storage/assets/images/portfolio/' . $data->portfolio->portfolio_picture) }}"
                            alt="" width="100" height="100">
                        {{ $data->portfolio->portfolio_name }}
                    </td>
                    <td>{{ $data->quantity }}</td>
                    <td>{{ number_format($data->portfolio->portfolio_price, 0, '', '.') }}</td>
                    <td>
                        <a href="{{ route('cart.portfolio', $data->portfolio->id_portfolio) }}">View
                            Detail</a>
                    </td>
                    <td>
                        {{-- BUTTON DELETE CART PORTFOLIO --}}
                        <form action="{{ route('cart.portfolio.delete', $data->id_cart_portfolio) }}" method="POST"
                            onsubmit="return confirm('Are you sure want to delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete Order</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
