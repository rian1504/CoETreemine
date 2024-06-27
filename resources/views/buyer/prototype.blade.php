@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Prototype')

@section('carousel')
<div class="mt-36">
    @include('components.carousel')
</div>
@endsection

@section('content')
<div class="my-4 py-4 px-8 bg-white w-full flex flex-row gap-4 justify-around font-semibold">
    <a href="{{ route('buyer.prototype.index') }}" class="w-1/6 h-20">
        <div class="flex justify-center items-center w-full h-full px-4 py-2 border shadow-lg gap-2 hover-effect
        {{ Route::is('buyer.prototype.index') ? 'border-4 border-buyer-green' : 'border-custom-grey' }}">
            <div class="w-20 h-12 overflow-hidden">
                <img src="{{ asset('image/prototype.jpg') }}" alt="" class="w-full h-full object-cover ">
            </div>
            <h1>
                Standard PCB
            </h1>
        </div>
    </a>
    <a href="{{ route('buyer.assembly.index') }}" class="w-1/6 h-20">
        <div class="flex justify-center items-center w-full h-full px-4 py-2 border shadow-lg gap-2 hover-effect 
        {{ Route::is('buyer.assembly.index') ? 'border-4 border-buyer-green' : 'border-custom-grey' }}">
            <div class="w-20 h-12 overflow-hidden">
                <img src="{{ asset('image/assembly.jpg') }}" alt="" class="w-full h-full object-cover ">
            </div>
            <h1>
                Assembly
            </h1>
        </div>
    </a>
    <a href="{{ route('buyer.portfolio.index') }}" class="w-1/6 h-20">
        <div class="flex justify-center items-center w-full h-full px-4 py-2 border shadow-lg gap-2 hover-effect 
        {{ Route::is('buyer.portfolio.index') ? 'border-4 border-buyer-green' : 'border-custom-grey' }}">
            <div class="w-20 h-12 overflow-hidden">
                <img src="{{ asset('image/pcb.jpg') }}" alt="" class="w-full h-full object-cover ">
            </div>
            <h1>
                Product
            </h1>
        </div>
    </a>
</div>

<div class="flex flex-row mb-8 -mt-4 gap-4">
    <!-- form -->
    <div class="w-3/4">
        <div class="w-full py-4 flex justify-between gap-4">
            <button class="w-1/2 py-2 px-4 bg-gray-300 rounded-lg hover:bg-opacity-80 focus:outline-none focus:bg-opacity-80" type="reset"><i class="fas fa-undo me-2"></i>Reset</button>
            <button class="w-1/2 py-2 px-4 bg-buyer-green text-white rounded-lg hover:bg-opacity-80 focus:outline-none focus:bg-opacity-80" onclick="calculate()"><i class="fas fa-calculator me-2"></i>Calculate</button>
        </div>
        <div class="w-full py-8 px-8 bg-white rounded-lg shadow-lg">
            <h1 class="bg-white text-lg font-bold mb-8">Assembly Service</h1>
            <hr class="border-t-2 border-custom-grey -mx-8 my-4">

            <form action="{{ route('buyer.prototype.store') }}" method="POST" class="w-full flex flex-col gap-4 text-sm">
                @csrf

                <div class="board flex flex-row w-full">
                    <label for="" class="w-1/3">Board Type</label>
                    <div class="w-2/3">
                        <div class="flex flex-row gap-4">
                            @foreach ($datas['dataBoard'] as $index => $data)
                            <div class="flex items-center">
                                <input type="radio" name="board" id="board-{{ $index }}" value="{{ old('board', $data->id_board) }}" {{ $index == 0 ? 'checked' : '' }} class="hidden peer" checked>
                                <label for="board-{{ $index }}" class="cursor-pointer py-2 px-4 border-2 border-custom-grey shadow-sm peer-checked:border-green-500 peer-checked:bg-green-100">{{ $data->board_type_name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="x_out flex flex-row w-full">
                    <label for="" class="w-1/3">X Out</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="x_out" id="x_out-not" value="no" class="hidden peer">
                            <label for="x_out-not" class="cursor-pointer py-2 px-4 border-2 border-custom-grey shadow-sm peer-checked:border-green-500 peer-checked:bg-green-100">Not Accept</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="x_out" id="x_out-accept" value="yes" class="hidden peer" checked>
                            <label for="x_out-accept" class="cursor-pointer py-2 px-4 border-2 border-custom-grey shadow-sm peer-checked:border-green-500 peer-checked:bg-green-100">Accept</label>
                        </div>
                    </div>
                </div>


                <div class="panel flex flex-row w-full">
                    <label for="" class="w-1/3">Panel Requirement</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="panel" id="panel-no" value="no" class="hidden peer">
                            <label for="panel-no" class="cursor-pointer py-2 px-4 border-2 border-custom-grey shadow-sm peer-checked:border-green-500 peer-checked:bg-green-100">No</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="panel" id="panel-yes" value="yes" class="hidden peer" checked>
                            <label for="panel-yes" class="cursor-pointer py-2 px-4 border-2 border-custom-grey shadow-sm peer-checked:border-green-500 peer-checked:bg-green-100">Yes</label>
                        </div>
                    </div>
                </div>


                <div class="flex flex-row w-full">
                    <label for="" class="w-1/3">Panel Description</label>
                    <div class="w-2/3 ">
                        <div class="">
                            <div class="panel_description">
                                <textarea name="panel_description" id="panel_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-custom-grey border border-custom-grey focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Write your thoughts here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex flex-row w-full">
                    <label for="route_process" class="w-1/3">Route Process</label>
                    <div class="route">
                        <select id="route_process" class=" py-2 px-4 border-2 border-custom-grey text-gray-900 text-sm shadow-sm focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            @foreach ($datas['dataRoute'] as $index => $data)
                            <option value="{{ old('route', $data->id_route) }}" {{ $index == 0 ? 'selected' : '' }} class="hover:bg-green-500">
                                {{ $data->route_process_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- {{-- DESIGN --}} -->
                <div class="design">
                    <input type="radio" name="design" value="1" checked>1
                    <input type="radio" name="design" value="2">2
                    <input type="radio" name="design" value="3">3
                    {{-- <input type="text" name="design"> --}}
                </div>

                <!-- {{-- SIZE --}} -->
                <div class="size">
                    <input type="number" name="length" value="{{ old('length') }}">
                    <input type="number" name="width" value="{{ old('width') }}">
                </div>

                <!-- {{-- QUANTITY --}} -->
                <div class="quantity">
                    <input type="number" name="quantity" value="{{ old('quantity') }}">
                </div>

                <!-- {{-- LAYER --}} -->
                <div class="layer">
                    @foreach ($datas['dataLayer'] as $index => $data)
                    <input type="radio" name="layer" value="{{ old('layer', $data->id_layer) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->layer_name }}
                    @endforeach
                </div>

                <!-- {{-- LAYER 1 --}} -->
                <div class="layer1">
                    <!-- {{-- COOPER LAYER --}} -->
                    <select name="cooper_layer">
                        <option value="" disabled selected>--</option>
                        @foreach ($datas['dataCooperLayer'] as $index => $data)
                        <option value="{{ old('cooper_layer', $data->id_cooper_layer) }}">
                            {{ $data->cooper_layer_name }}
                        </option>
                        @endforeach
                    </select>

                    <!-- {{-- SOLDERMASK --}} -->
                    <select name="soldermask_layer1">
                        <option value="" disabled selected>--</option>
                        @foreach ($datas['dataSoldermaskLayer1'] as $index => $data)
                        <option value="{{ old('soldermask_layer1', $data->id_soldermask_layer1) }}">
                            {{ $data->soldermask_layer1_name }}
                        </option>
                        @endforeach
                    </select>

                    <!-- {{-- SILKSCREEN --}} -->
                    <select name="silkscreen_layer1">
                        <option value="" disabled selected>--</option>
                        @foreach ($datas['dataSilkscreenLayer1'] as $index => $data)
                        <option value="{{ old('silkscreen_layer1', $data->id_silkscreen_layer1) }}">
                            {{ $data->silkscreen_layer1_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- {{-- MATERIAL --}} -->
                <div class="material">
                    @foreach ($datas['dataMaterial'] as $index => $data)
                    <input type="radio" name="material" value="{{ old('material', $data->id_material) }}" {{ $index == 0 ? 'checked' : '' }}>
                    <img src="{{ asset('/storage/assets/images/material/' . $data->material_picture) }}" alt="" width="50" height="50">{{ $data->material_name }}
                    @endforeach
                </div>

                <!-- {{-- FR4 --}} -->
                <div class="fr4">
                    @foreach ($datas['dataFr4'] as $index => $data)
                    <input type="radio" name="fr4" value="{{ old('fr4', $data->id_fr4) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->fr4_name }}
                    @endforeach
                </div>

                <!-- {{-- THICKNESS --}} -->
                <div class="thickness">
                    @foreach ($datas['dataThickness'] as $index => $data)
                    <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
                    @endforeach

                    <!-- {{-- LAYER 1 --}} -->
                    {{-- <div class="thickness-layer1">
                @foreach ($datas['dataThicknessLayer1'] as $index => $data)
                    <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
                    @endforeach
                </div> --}}

                <!-- {{-- LAYER 2 --}} -->
                {{-- <div class="thickness-layer2">
                @foreach ($datas['dataThicknessLayer2'] as $index => $data)
                    <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
                @endforeach
        </div> --}}

        <!-- {{-- LAYER 4 --}} -->
        {{-- <div class="thickness-layer4">
                @foreach ($datas['dataThicknessLayer4'] as $index => $data)
                    <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
        {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
        @endforeach
    </div> --}}
</div>

<!-- {{-- MIN TRACK --}} -->
<div class="track">
    @foreach ($datas['dataTrack'] as $index => $data)
    <input type="radio" name="track" value="{{ old('track', $data->id_track) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->track_name }}
    @endforeach
</div>

<!-- {{-- MIN HOLE --}} -->
<div class="hole">
    @foreach ($datas['dataHole'] as $index => $data)
    <input type="radio" name="hole" value="{{ old('hole', $data->id_hole) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->hole_name }}
    @endforeach
</div>

<!-- {{-- SOLDER MASK --}} -->
<div class="solder">
    @foreach ($datas['dataSolder'] as $index => $data)
    <input type="radio" name="solder" value="{{ old('solder', $data->id_solder) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->solder_name }}
    @endforeach
</div>

<!-- {{-- SILKSCREEN --}} -->
<div class="silk">
    @foreach ($datas['dataSilk'] as $index => $data)
    <input type="radio" name="silk" value="{{ old('silk', $data->id_silk) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->silk_name }}
    @endforeach
</div>

<!-- {{-- SURFACE FINISH --}} -->
<div class="surface">
    @foreach ($datas['dataSurface'] as $index => $data)
    <input type="radio" name="surface" value="{{ old('surface', $data->id_surface) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->surface_name }}
    @endforeach
</div>

<!-- {{-- VIA PROCESS --}} -->
<div class="via_process">
    @foreach ($datas['dataViaProcess'] as $index => $data)
    <input type="radio" name="via" value="{{ old('via', $data->id_via) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->via_process_name }}
    @endforeach
</div>

<!-- {{-- FINISHED COOPER --}} -->
<div class="finished_cooper">
    @foreach ($datas['dataFinishedCooper'] as $index => $data)
    <input type="radio" name="finished" value="{{ old('finished', $data->id_finished_cooper) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->finished_cooper_name }}
    @endforeach
</div>

<!-- {{-- FINISHED COOPER --}} -->
<div class="inner_cooper">
    @foreach ($datas['dataInnerCooper'] as $index => $data)
    <input type="radio" name="inner" value="{{ old('inner', $data->id_inner) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->inner_cooper_name }}
    @endforeach
</div>
<div class="result">
    <button type="submit">Add to Cart</button>
</div>
</form>
<!-- <button onclick="calculate()">Calculate</button> -->

</div>

<script>
    // function calculate() {
    //     let quantity = document.getElementById('quantity').value
    //     console.log(quantity);
    // }
    // calculate form
    function calculate() {
        // Sembunyikan tombol Calculate
        document.getElementById('calculate-section').classList.add('hidden');

        // Tampilkan bagian Add to Cart
        document.getElementById('add-to-cart-section').classList.remove('hidden');
    }

    // function sensitive() {
    //     let sensitive = document.getElementById('sensitive').value
    //     let sensitive_description = document.getElementsByName('sensitive_description')
    //     if (sensitive == 'no') {
    //         sensitive_description.classList.add('hidden')
    //     } else {
    //         sensitive_description.classList.remove('hidden')
    //     }
    // }

    // pay attention note
    document.addEventListener('DOMContentLoaded', function() {
        const sensitiveYes = document.getElementById('sensitive-yes');
        const sensitiveNo = document.getElementById('sensitive-no');
        const sensitiveDescription = document.querySelector('.sensitive_description');

        sensitiveYes.addEventListener('change', function() {
            if (this.checked) {
                sensitiveDescription.classList.remove('hidden');
            }
        });

        sensitiveNo.addEventListener('change', function() {
            if (this.checked) {
                sensitiveDescription.classList.add('hidden');
            }
        });
    });
</script>
@endsection