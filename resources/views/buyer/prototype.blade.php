<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prototype</title>
</head>

<body>
    <h1>Prototype</h1>

    <form action="{{ route('buyer.prototype.store') }}" method="POST">
        @csrf
        {{-- BOARD TYPE --}}
        <div class="board">
            @foreach ($datas['dataBoard'] as $index => $data)
                <input type="radio" name="board" value="{{ old('board', $data->id_board) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->board_type_name }}
            @endforeach
        </div>

        {{-- X-OUT --}}
        <div class="x_out">
            <input type="radio" name="x_out" value="Accept">Accept
            <input type="radio" name="x_out" value="Not Accept">Not Accept
        </div>

        {{-- PANEL REQUIREMENT --}}
        <div class="panel">
            <input type="radio" name="panel" value="yes" checked>yes
            <input type="radio" name="panel" value="no">no
        </div>

        {{-- PANEL REQUIREMENT DESCRIPTION --}}
        <div class="panel_description">
            <textarea name="panel_description" cols="100" rows="5"></textarea>
        </div>

        {{-- ROUTE PROCESS --}}
        <div class="route">
            <select name="route">
                @foreach ($datas['dataRoute'] as $index => $data)
                    <option value="{{ old('route', $data->id_route) }}" {{ $index == 0 ? 'selected' : '' }}>
                        {{ $data->route_process_name }}</option>
                @endforeach
            </select>
        </div>

        {{-- DESIGN --}}
        <div class="design">
            <input type="radio" name="design" value="1" checked>1
            <input type="radio" name="design" value="2">2
            <input type="radio" name="design" value="3">3
            {{-- <input type="text" name="design"> --}}
        </div>

        {{-- SIZE --}}
        <div class="size">
            <input type="number" name="length">
            <input type="number" name="width">
        </div>

        {{-- QUANTITY --}}
        <div class="quantity">
            <input type="number" name="quantity">
        </div>

        {{-- LAYER --}}
        <div class="layer">
            @foreach ($datas['dataLayer'] as $index => $data)
                <input type="radio" name="layer" value="{{ old('layer', $data->id_layer) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->layer_name }}
            @endforeach
        </div>

        {{-- LAYER 1 --}}
        <div class="layer1">
            {{-- COOPER LAYER --}}
            <select name="cooper_layer">
                <option value="" disabled selected>--</option>
                @foreach ($datas['dataCooperLayer'] as $index => $data)
                    <option value="{{ old('cooper_layer', $data->id_cooper_layer) }}">
                        {{ $data->cooper_layer_name }}</option>
                @endforeach
            </select>

            {{-- SOLDERMASK --}}
            <select name="soldermask_layer1">
                <option value="" disabled selected>--</option>
                @foreach ($datas['dataSoldermaskLayer1'] as $index => $data)
                    <option value="{{ old('soldermask_layer1', $data->id_soldermask_layer1) }}">
                        {{ $data->soldermask_layer1_name }}</option>
                @endforeach
            </select>

            {{-- SILKSCREEN --}}
            <select name="silkscreen_layer1">
                <option value="" disabled selected>--</option>
                @foreach ($datas['dataSilkscreenLayer1'] as $index => $data)
                    <option value="{{ old('silkscreen_layer1', $data->id_silkscreen_layer1) }}">
                        {{ $data->silkscreen_layer1_name }}</option>
                @endforeach
            </select>
        </div>

        {{-- MATERIAL --}}
        <div class="material">
            @foreach ($datas['dataMaterial'] as $index => $data)
                <input type="radio" name="material" value="{{ old('material', $data->id_material) }}"
                    {{ $index == 0 ? 'checked' : '' }}>
                <img src="{{ asset('/storage/assets/images/material/' . $data->material_picture) }}" alt=""
                    width="50" height="50">{{ $data->material_name }}
            @endforeach
        </div>

        {{-- FR4 --}}
        <div class="fr4">
            @foreach ($datas['dataFr4'] as $index => $data)
                <input type="radio" name="fr4" value="{{ old('fr4', $data->id_fr4) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->fr4_name }}
            @endforeach
        </div>

        {{-- THICKNESS --}}
        <div class="thickness">
            @foreach ($datas['dataThickness'] as $index => $data)
                <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
            @endforeach

            {{-- LAYER 1 --}}
            {{-- <div class="thickness-layer1">
            @foreach ($datas['dataThicknessLayer1'] as $index => $data)
                <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
            @endforeach
            </div> --}}

            {{-- LAYER 2 --}}
            {{-- <div class="thickness-layer2">
            @foreach ($datas['dataThicknessLayer2'] as $index => $data)
                <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
            @endforeach
            </div> --}}

            {{-- LAYER 4 --}}
            {{-- <div class="thickness-layer4">
            @foreach ($datas['dataThicknessLayer4'] as $index => $data)
                <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
            @endforeach
            </div> --}}
        </div>

        {{-- MIN TRACK --}}
        <div class="track">
            @foreach ($datas['dataTrack'] as $index => $data)
                <input type="radio" name="track" value="{{ old('track', $data->id_track) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->track_name }}
            @endforeach
        </div>

        {{-- MIN HOLE --}}
        <div class="hole">
            @foreach ($datas['dataHole'] as $index => $data)
                <input type="radio" name="hole" value="{{ old('hole', $data->id_hole) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->hole_name }}
            @endforeach
        </div>

        {{-- SOLDER MASK --}}
        <div class="solder">
            @foreach ($datas['dataSolder'] as $index => $data)
                <input type="radio" name="solder" value="{{ old('solder', $data->id_solder) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->solder_name }}
            @endforeach
        </div>

        {{-- SILKSCREEN --}}
        <div class="silk">
            @foreach ($datas['dataSilk'] as $index => $data)
                <input type="radio" name="silk" value="{{ old('silk', $data->id_silk) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->silk_name }}
            @endforeach
        </div>

        {{-- SURFACE FINISH --}}
        <div class="surface">
            @foreach ($datas['dataSurface'] as $index => $data)
                <input type="radio" name="surface" value="{{ old('surface', $data->id_surface) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->surface_name }}
            @endforeach
        </div>

        {{-- VIA PROCESS --}}
        <div class="via_process">
            @foreach ($datas['dataViaProcess'] as $index => $data)
                <input type="radio" name="via" value="{{ old('via', $data->id_via) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->via_process_name }}
            @endforeach
        </div>

        {{-- FINISHED COOPER --}}
        <div class="finished_cooper">
            @foreach ($datas['dataFinishedCooper'] as $index => $data)
                <input type="radio" name="finished" value="{{ old('finished', $data->id_finished_cooper) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->finished_cooper_name }}
            @endforeach
        </div>

        {{-- FINISHED COOPER --}}
        <div class="inner_cooper">
            @foreach ($datas['dataInnerCooper'] as $index => $data)
                <input type="radio" name="inner" value="{{ old('inner', $data->id_inner) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->inner_cooper_name }}
            @endforeach
        </div>
        <div class="result">
            <button type="submit">Add to Cart</button>
        </div>
    </form>
    <button onclick="calculate()">Calculate</button>
</body>

</html>
