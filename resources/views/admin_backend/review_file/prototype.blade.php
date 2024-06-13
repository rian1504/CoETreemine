<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Prototype</title>
</head>

<body>

    <a href="{{ route('review_file.index') }}">Back</a>

    <h1>PROTOTYPE</h1>

    <table>
        <tr>
            <td>X-Out</td>
            <td>:</td>
            <td>{{ $prototype->x_out }}</td>
        </tr>
        <tr>
            <td>Panel Requirement</td>
            <td>:</td>
            <td>{{ $prototype->panel_requirement }}</td>
        </tr>
        <tr>
            <td>Panel Requirement Description</td>
            <td>:</td>
            <td>{{ $prototype->panel_requirement_description }}</td>
        </tr>
        <tr>
            <td>Design Panel</td>
            <td>:</td>
            <td>{{ $prototype->design_panel }} Design</td>
        </tr>
        <tr>
            <td>Length</td>
            <td>:</td>
            <td>{{ $prototype->length }} Cm</td>
        </tr>
        <tr>
            <td>Width</td>
            <td>:</td>
            <td>{{ $prototype->width }} Cm</td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td>{{ $prototype->quantity }} Pcs</td>
        </tr>
        <tr>
            <td>File</td>
            <td>:</td>
            <td>{{ $prototype->file }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>:</td>
            <td>Rp{{ number_format($prototype->price, 0, '', '.') }}</td>
        </tr>
        <tr>
            <td>Board Type</td>
            <td>:</td>
            <td>{{ $prototype->prototype_board_type()->get()[0]->board_type_name }}</td>
        </tr>
        <tr>
            <td>Route Process</td>
            <td>:</td>
            <td>{{ $prototype->prototype_route_process()->get()[0]->route_process_name }}</td>
        </tr>
        <tr>
            <td>Fr4</td>
            <td>:</td>
            <td>{{ $prototype->prototype_fr4()->get()[0]->fr4_name }}</td>
        </tr>
        <tr>
            <td>Thickness</td>
            <td>:</td>
            <td>{{ $prototype->prototype_thickness()->get()[0]->thickness_name }}</td>
        </tr>
        <tr>
            <td>Layer</td>
            <td>:</td>
            <td>{{ $prototype->prototype_layer()->get()[0]->layer_name }}</td>
        </tr>
        <tr>
            <td>Inner Cooper</td>
            <td>:</td>
            <td>{{ $prototype->prototype_inner_cooper()->get()[0]->inner_cooper_name }}</td>
        </tr>
        <tr>
            <td>Finished Cooper</td>
            <td>:</td>
            <td>{{ $prototype->prototype_finished_cooper()->get()[0]->finished_cooper_name }}</td>
        </tr>
        <tr>
            <td>Cooper Layer</td>
            <td>:</td>
            <td>{{ $prototype->prototype_cooper_layer()->get()[0]->cooper_layer_name }}</td>
        </tr>
        <tr>
            <td>Track</td>
            <td>:</td>
            <td>{{ $prototype->prototype_track()->get()[0]->track_name }}</td>
        </tr>
        <tr>
            <td>Hole</td>
            <td>:</td>
            <td>{{ $prototype->prototype_hole()->get()[0]->hole_name }}</td>
        </tr>
        <tr>
            <td>Solder</td>
            <td>:</td>
            <td>{{ $prototype->prototype_solder()->get()[0]->solder_name }}</td>
        </tr>
        <tr>
            <td>Silk</td>
            <td>:</td>
            <td>{{ $prototype->prototype_silk()->get()[0]->silk_name }}</td>
        </tr>
        <tr>
            <td>Surface</td>
            <td>:</td>
            <td>{{ $prototype->prototype_surface()->get()[0]->surface_name }}</td>
        </tr>
        <tr>
            <td>Via Process</td>
            <td>:</td>
            <td>{{ $prototype->prototype_via_process()->get()[0]->via_process_name }}</td>
        </tr>
        <tr>
            <td>Material</td>
            <td>:</td>
            <td>{{ $prototype->prototype_material()->get()[0]->material_name }}</td>
        </tr>
        <tr>
            <td>Soldermask Layer1</td>
            <td>:</td>
            <td>{{ $prototype->prototype_soldermask_layer1()->get()[0]->soldermask_layer1_name }}</td>
        </tr>
        <tr>
            <td>Silkscreen Layer1</td>
            <td>:</td>
            <td>{{ $prototype->prototype_silkscreen_layer1()->get()[0]->silkscreen_layer1_name }}</td>
        </tr>
    </table>
</body>

</html>
