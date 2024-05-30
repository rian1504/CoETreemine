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

        {{ dd($datas['dataPortfolio']->get()->sum()) }}

        <div class="grid grid-cols-2">
            <div class="custom">
                <table border="1">
                    <thead>
                        <tr>
                            <td>Custom Name</td>
                            <td>Total Item</td>
                            <td>Total Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Assembly</td>
                            <td>2 Pcs</td>
                            <td>Rp50.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="portfolio"></div>
        </div>
    </div>
</body>

</html>
