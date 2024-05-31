<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container m-auto">
        <a href="{{ route('review_payment.index') }}">Back</a>
        <h1>DETAIL ORDER</h1>
        <br>

        <div class="grid grid-cols-2">
            <div class="custom">
                <table class="table border-blue-50">
                    <thead>
                        <tr>
                            <td>Custom Name</td>
                            <td>Total Item</td>
                            <td>Total Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($datas['dataAssembly']->get()->count() != null)
                            <tr>
                                <td>Assembly</td>
                                <td>
                                    {{ $datas['dataAssembly']->get()->count() }} Pcs
                                </td>
                                <td>
                                    Rp{{ number_format($datas['dataAssembly']->get()[0]->custom_assembly->sum('price'), 0, '', '.') }}
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="3" class="text-2xl font-bold text-center">Assembly Kosong</td>
                            </tr>
                        @endif
                        @if ($datas['dataPrototype']->get()->count() != null)
                            <tr>
                                <td>Prototype</td>
                                <td>
                                    {{ $datas['dataPrototype']->get()->count() }} Pcs
                                </td>
                                <td>
                                    Rp{{ number_format($datas['dataPrototype']->get()[0]->custom_prototype->sum('price'), 0, '', '.') }}
                                </td>
                            </tr>
                        @else
                            <td colspan="3" class="text-2xl font-bold text-center">Prototype Kosong</td>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="portfolio">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Portfolio Name</td>
                            <td>Portfolio Picture</td>
                            <td>Portfolio Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($datas['dataPortfolio']->get() as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data->portfolio->portfolio_name }}</td>
                                <td>
                                    <img src="{{ asset('/storage/assets/images/payment/' . $data->portfolio->portfolio_picture) }}"
                                        alt="" width="100" height="100">
                                </td>
                                <td>
                                    Rp{{ number_format($data->portfolio->portfolio_price, 0, '', '.') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-2xl font-bold">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <hr>
        <table>
            <tr>
                <td>
                    <h1 class="text-2xl font-bold">Total Price</h1>
                </td>
                <td>:</td>
                <td>
                    <h1 class="text-2xl font-bold">
                        Rp{{ number_format(
                            $datas['dataAssembly']->get()[0]->custom_assembly->sum('price') +
                                $datas['dataPrototype']->get()[0]->custom_prototype->sum('price') +
                                $datas['dataPortfolio']->get()[0]->portfolio->sum('portfolio_price'),
                            0,
                            '',
                            '.',
                        ) }}
                    </h1>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
