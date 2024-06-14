<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Assembly</title>
</head>

<body>

    <a href="{{ route('history.cart_custom') }}">Back</a>

    <h1>ASSEMBLY</h1>

    <table>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td>{{ $assembly->quantity }} Pcs</td>
        </tr>
        <tr>
            <td>Sensitive Component</td>
            <td>:</td>
            <td>{{ $assembly->sensitive_component }}</td>
        </tr>
        <tr>
            <td>Sensitive Component Description</td>
            <td>:</td>
            <td>{{ $assembly->sensitive_component_description }}</td>
        </tr>
        <tr>
            <td>Unique Part</td>
            <td>:</td>
            <td>{{ $assembly->unique_part }} Pcs</td>
        </tr>
        <tr>
            <td>Smt Part</td>
            <td>:</td>
            <td>{{ $assembly->smt_part }} Pcs</td>
        </tr>
        <tr>
            <td>Bga Part</td>
            <td>:</td>
            <td>{{ $assembly->bga_part }} Pcs</td>
        </tr>
        <tr>
            <td>Through Hole Part</td>
            <td>:</td>
            <td>{{ $assembly->through_hole_part }} Pcs</td>
        </tr>
        <tr>
            <td>Depanel</td>
            <td>:</td>
            <td>{{ $assembly->depanel }}</td>
        </tr>
        <tr>
            <td>Function Test</td>
            <td>:</td>
            <td>{{ $assembly->function_test }}</td>
        </tr>
        <tr>
            <td>Cable Wire</td>
            <td>:</td>
            <td>{{ $assembly->cable_wire }}</td>
        </tr>
        <tr>
            <td>Detail Information</td>
            <td>:</td>
            <td>{{ $assembly->detail_information }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>:</td>
            <td>Rp{{ number_format($assembly->price, 0, '', '.') }}</td>
        </tr>
        <tr>
            <td>File</td>
            <td>:</td>
            <td>{{ $assembly->file }}</td>
        </tr>
        <tr>
            <td>Flexible Option</td>
            <td>:</td>
            <td>{{ $assembly->assembly_flexible()->get()[0]->flexible_name }}</td>
        </tr>
        <tr>
            <td>Board Type</td>
            <td>:</td>
            <td>{{ $assembly->assembly_board_type()->get()[0]->board_type_name }}</td>
        </tr>
        <tr>
            <td>Assembly Side</td>
            <td>:</td>
            <td>{{ $assembly->assembly_side()->get()[0]->side_name }}</td>
        </tr>
    </table>
</body>

</html>
