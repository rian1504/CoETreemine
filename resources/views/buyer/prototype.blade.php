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
                <img src="{{ asset('image/prototype.jpg') }}" alt="" class="image ">
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
                <img src="{{ asset('image/assembly.jpg') }}" alt="" class="image ">
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
                <img src="{{ asset('image/pcb.jpg') }}" alt="" class="image ">
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
            <button class="w-1/2 button-grey" type="reset"><i class="fas fa-undo me-2"></i>Reset</button>
            <button class="w-1/2 button-green" onclick="calculate()"><i class="fas fa-calculator me-2"></i>Calculate</button>
        </div>
        <div class="w-full py-8 px-8 bg-white rounded-lg shadow-lg">
            <h1 class="bg-white text-lg font-bold mb-8">Prototype Service</h1>
            <hr class="border-t-2 border-custom-grey -mx-8 my-4">

            <form action="{{ route('buyer.prototype.store') }}" method="POST" class="w-full flex flex-col gap-4 text-sm">
                @csrf

                <div class="board flex flex-row w-full">
                    <label for="" class="w-1/3">Board Type</label>
                    <div class="w-2/3 flex flex-row gap-4">
                        @foreach ($datas['dataBoard'] as $index => $data)
                        <div class="flex items-center">
                            <input type="radio" name="board" id="board-{{ $index }}" value="{{ old('board', $data->id_board) }}" {{ $index == 0 ? 'checked' : '' }} class="hidden peer" checked>
                            <label for="board-{{ $index }}" class="label-radio">
                                {{ $data->board_type_name }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="x_out flex flex-row w-full">
                    <label for="" class="w-1/3">X Out</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="x_out" id="x_out-not" value="not accept" class="hidden peer">
                            <label for="x_out-not" class="label-radio">Not
                                Accept</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="x_out" id="x_out-accept" value="accept" class="hidden peer" checked>
                            <label for="x_out-accept" class="label-radio">Accept</label>
                        </div>
                    </div>
                </div>


                <div class="panel flex flex-row w-full">
                    <label for="" class="w-1/3">Panel Requirement</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="panel" id="panel-no" value="no" class="hidden peer">
                            <label for="panel-no" class="label-radio">No</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="panel" id="panel-yes" value="yes" class="hidden peer" checked>
                            <label for="panel-yes" class="label-radio">Yes</label>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row w-full">
                    <label for="" class="w-1/3">Panel Description</label>
                    <div class="w-2/3 ">
                        <div class="panel_description">
                            <textarea name="panel_description" id="panel_description" rows="4" class="textarea-form" placeholder="Write your thoughts here..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row w-full">
                    <label for="route_process" class="w-1/3">Route Process</label>
                    <div class="route">
                        <select id="route_process" name="route" class="select-form">
                            @foreach ($datas['dataRoute'] as $index => $data)
                            <option value="{{ old('route', $data->id_route) }}" {{ $index == 0 ? 'selected' : '' }}>
                                {{ $data->route_process_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- {{-- DESIGN --}} -->
                <div class="design flex flex-row w-full">
                    <label for="route_process" class="w-1/3">Different design in panel</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" id="design-1" name="design" value="1" class="hidden peer" checked>
                            <label for="design-1" class="label-radio">1</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="design-2" name="design" value="2" class="hidden peer">
                            <label for="design-2" class="label-radio">2</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" id="design-3" name="design" value="3" class="hidden peer">
                            <label for="design-3" class="label-radio">3</label>
                        </div>
                    </div>
                    {{-- <input type="text" name="design"> --}}
                </div>

                <!-- {{-- SIZE --}} -->
                <div class="size flex flex-row w-full items-center">
                    <label for="size" class="w-1/3">Size<span class="text-red-600">*</span></label>
                    <input type="number" name="length" placeholder="Length" value="{{ old('length') }}" class="input-number">
                    <label for="length" class="label-input-number">X</label>
                    <input type="number" name="width" placeholder="Width" value="{{ old('width') }}" class="input-number">
                    <label for="width" class="label-input-number">mm</label>
                </div>

                <!-- {{-- QUANTITY --}} -->
                <div class="quantity flex flex-row w-full items-center">
                    <label for="quantity" class="w-1/3">Quantity<span class="text-red-600">*</span></label>
                    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="input-number">
                    <label for="quantity" class="label-input-number">Pcs</label>
                </div>

                <!-- {{-- LAYER --}} -->
                <div class="layer flex flex-row w-full items-center">
                    <label for="layer-{{ $index }}" class="w-1/3">Layers</label>
                    <div class="w-2/3 flex flex-row gap-4">
                        @foreach ($datas['dataLayer'] as $index => $data)
                        <input type="radio" id="layer-{{ $index }}" name="layer" value="{{ old('layer', $data->id_layer) }}" class="hidden peer" checked {{ $index == 0 ? 'checked' : '' }}>
                        <label for="layer-{{ $index }}" class="label-radio">
                            {{ $data->layer_name }}
                        </label>
                        @endforeach
                    </div>
                </div>

                <!-- {{-- LAYER 1 --}} -->
                <div class="flex flex-row w-full">
                    <label for="" class="w-1/3">Layer 1</label>
                    <div class="layer1 flex  gap-4">
                        <!-- {{-- COOPER LAYER --}} -->
                        <select name="cooper_layer" class="select-form w-40">
                            <option value="" disabled selected>Cooper Layer</option>
                            @foreach ($datas['dataCooperLayer'] as $index => $data)
                            <option value="{{ old('cooper_layer', $data->id_cooper_layer) }}">
                                {{ $data->cooper_layer_name }}
                            </option>
                            @endforeach
                        </select>

                        <!-- {{-- SOLDERMASK --}} -->
                        <select name="soldermask_layer1" class="select-form">
                            <option value="" disabled selected>Solder Mask</option>
                            @foreach ($datas['dataSoldermaskLayer1'] as $index => $data)
                            <option value="{{ old('soldermask_layer1', $data->id_soldermask_layer1) }}">
                                {{ $data->soldermask_layer1_name }}
                            </option>
                            @endforeach
                        </select>

                        <!-- {{-- SILKSCREEN --}} -->
                        <select name="silkscreen_layer1" class="select-form">
                            <option value="" disabled selected>Silk Screen</option>
                            @foreach ($datas['dataSilkscreenLayer1'] as $index => $data)
                            <option value="{{ old('silkscreen_layer1', $data->id_silkscreen_layer1) }}">
                                {{ $data->silkscreen_layer1_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- {{-- MATERIAL --}} -->
                <div class="material flex flex-row w-full">
                    <label for="" class="w-1/3">Materials</label>
                    <div class="w-2/3 flex flex-row gap-4">
                        @foreach ($datas['dataMaterial'] as $index => $data)
                        <input type="radio" name="material" value="{{ old('material', $data->id_material) }}" class="hidden peer" checked {{ $index == 0 ? 'checked' : '' }}>
                        <label for="" class="label-radio flex gap-2">
                            <div class="w-16 h-10 overflow-hidden">
                                <img src="{{ asset('/storage/assets/images/material/' . $data->material_picture) }}" alt="" class="image">
                            </div>
                            {{ $data->material_name }}
                        </label>
                        @endforeach
                    </div>
                </div>

                <!-- {{-- FR4 --}} -->
                <div class="fr4 flex flex-row w-full items-center">
                    <label for="" class="w-1/3">FR4</label>
                    <div class="w-2/3 flex flex-row gap-4">
                        @foreach ($datas['dataFr4'] as $index => $data)
                        <input type="radio" name="fr4" value="{{ old('fr4', $data->id_fr4) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
                        <label for="" class="label-radio">
                            {{ $data->fr4_name }}
                        </label>
                        @endforeach
                    </div>
                </div>

                <!-- {{-- THICKNESS --}} -->
                <div class="thickness flex flex-row w-full items-center">
                    <label for="" class="w-1/3">Thicness</label>
                    <div class="w-2/3 flex flex-row gap-4">
                        @foreach ($datas['dataThickness'] as $index => $data)
                        <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
                        <label for="" class="label-radio">
                            {{ $data->thickness_name }}
                        </label>
                        @endforeach

                    </div>

                    <!-- LAYER 1 -->
                    {{-- <div class="thickness-layer1">
                        @foreach ($datas['dataThicknessLayer1'] as $index => $data)
                        <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                    {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
                    @endforeach
                </div> --}}

                <!-- LAYER 2 -->
                {{-- <div class="thickness-layer2">
                            @foreach ($datas['dataThicknessLayer2'] as $index => $data)
                                <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
                {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
                @endforeach
        </div> --}}

        <!-- LAYER 4 -->
        {{-- <div class="thickness-layer4">
                        @foreach ($datas['dataThicknessLayer4'] as $index => $data)
                            <input type="radio" name="thickness" value="{{ old('thickness', $data->id_thickness) }}"
        {{ $index == 0 ? 'checked' : '' }}>{{ $data->thickness_name }}
        @endforeach
    </div> --}}
</div>

<!-- {{-- MIN TRACK --}} -->
<div class="track flex flex-row w-full items-center">
    <label for="" class="w-1/3">Min Track</label>
    <div class="w-2/3 flex flex-row gap-4">
        @foreach ($datas['dataTrack'] as $index => $data)
        <input type="radio" name="track" value="{{ old('track', $data->id_track) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
        <label for="" class="label-radio">
            {{ $data->track_name }}
        </label>
        @endforeach
    </div>
</div>

<!-- {{-- MIN HOLE --}} -->
<div class="hole flex flex-row w-full items-center">
    <label for="" class="w-1/3">Min Hole</label>
    @foreach ($datas['dataHole'] as $index => $data)
    <input type="radio" name="hole" value="{{ old('hole', $data->id_hole) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->hole_name }}
    </label>
    @endforeach
</div>

<!-- {{-- SOLDER MASK --}} -->
<div class="solder flex flex-row w-full items-center">
    <label for="" class="w-1/3">Solder Mask</label>
    @foreach ($datas['dataSolder'] as $index => $data)
    <input type="radio" name="solder" value="{{ old('solder', $data->id_solder) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->solder_name }}
    </label>
    @endforeach
</div>

<!-- {{-- SILKSCREEN --}} -->
<div class="silk flex flex-row w-full items-center">
    <label for="" class="w-1/3">Silkscreen</label>
    @foreach ($datas['dataSilk'] as $index => $data)
    <input type="radio" name="silk" value="{{ old('silk', $data->id_silk) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->silk_name }}
    </label>
    @endforeach
</div>

<!-- {{-- SURFACE FINISH --}} -->
<div class="surface flex flex-row w-full items-center">
    <label for="" class="w-1/3">Surface Finish</label>
    @foreach ($datas['dataSurface'] as $index => $data)
    <input type="radio" name="surface" value="{{ old('surface', $data->id_surface) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->surface_name }}
    </label>
    @endforeach
</div>

<!-- {{-- VIA PROCESS --}} -->
<div class="via_process flex flex-row w-full items-center">
    <label for="" class="w-1/3">Via Process</label>
    @foreach ($datas['dataViaProcess'] as $index => $data)
    <input type="radio" name="via" value="{{ old('via', $data->id_via) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->via_process_name }}
    </label>
    @endforeach
</div>

<!-- {{-- FINISHED COOPER --}} -->
<div class="finished_cooper flex flex-row w-full items-center">
    <label for="" class="w-1/3">Finished Cooper</label>
    @foreach ($datas['dataFinishedCooper'] as $index => $data)
    <input type="radio" name="finished" value="{{ old('finished', $data->id_finished_cooper) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->finished_cooper_name }}
    </label>
    @endforeach
</div>

<!-- {{-- Inner COOPER --}} -->
<div class="inner_cooper flex flex-row w-full items-center">
    <label for="" class="w-1/3">Inner Cooper</label>
    @foreach ($datas['dataInnerCooper'] as $index => $data)
    <input type="radio" name="inner" value="{{ old('inner', $data->id_inner) }}" class="hidden peer" {{ $index == 0 ? 'checked' : '' }}>
    <label for="" class="label-radio">
        {{ $data->inner_cooper_name }}
    </label>
    @endforeach
</div>
<div class="flex justify-end mt-4 gap-4">
    {{-- button addcart sementara --}}
    <button type="submit" class="w-1/6 button-green"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
    <button class="w-1/6 button-green" onclick="calculate()"><i class="fas fa-calculator me-2"></i>Calculate</button>
</div>
</form>
</div>
</div>
<!-- <button onclick="calculate()">Calculate</button> -->
<!-- calculate -->
<div class="w-1/4 py-4 px-8 mt-4 bg-white rounded-lg shadow-lg h-1/6">
    <!-- Calculate Button -->
    <div id="calculate-section">
        <h1 class="text-lg text-center font-bold">Please click on Calculate</h1>
        <hr class="border-t-2 border-custom-grey -mx-8 my-4">
        <div class="flex flex-row justify-center text-sm whitespace-nowrap truncate">
            <button class="button-green w-32 " onclick="calculate()"><i class="fas fa-calculator me-2"></i>Calculate</button>
        </div>
    </div>
    <!-- Add to Cart Section -->
    <div id="add-to-cart-section" class="hidden">
        <h1 class="text-lg text-center font-bold">Pricing and Build Time</h1>
        <hr class="border-t-2 border-custom-grey -mx-8 my-2">
        <div class="overflow-x-auto w-full">
            <table class="w-full text-xs text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            Build Time
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Qty
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3-4 Days
                        </th>
                        <td class="px-4 py-4">
                            5
                        </td>
                        <td class="px-4 py-4">
                            Rp.210k
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex flex-col justify-center gap-2 my-4 text-xs w-full text-left rtl:text-right text-gray-700 dark:text-gray-400">
            <div class="flex flex-row gap-2">
                <div class="flex  justify-center items-center"><i class="fas fa-tools text-xl"></i></div>
                <div class="flex flex-col">
                    <h1 class="font-bold">Building Date</h1>
                    <h2>20/03/2024</h2>
                </div>
            </div>
            <div class="flex flex-row gap-2">
                <div class="flex  justify-center items-center"><i class="fas fa-box text-xl"></i></div>
                <div class="flex flex-col">
                    <h1 class="font-bold">Delivery Date</h1>
                    <h2>20/03/2024</h2>
                </div>
            </div>
        </div>
        <div class="flex flex-col text-xs font-bold text-gray-500 my-4">
            <div class="flex flex-row justify-between">
                <div>PCB Cost:</div>
                <div>Rp.210k</div>
            </div>
            <div class="flex flex-row justify-between">
                <div>Shipping:</div>
                <div>Rp.36k</div>
            </div>
            <div class="flex flex-row justify-between text-sm">
                <div>Total:</div>
                <div>Rp.246k</div>
            </div>
        </div>
        <div class="result flex flex-row justify-center items-center text-sm whitespace-nowrap truncate">
            <button type="submit" class="button-green" onclick="calculate()"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
        </div>
    </div>
</div>

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