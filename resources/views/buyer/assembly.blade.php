@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Assembly')

@section('carousel')
<div class="mt-36">
    @include('components.carousel')
</div>
@endsection

@section('content')

<div class="flex flex-col my-8 gap-8">
    <!-- <div> -->
    <div class="py-8 px-8 bg-white rounded-lg">
        <h1 class="bg-white text-lg font-bold mb-8">Assembly Service</h1>
        <hr class="border-t-2 border-gray-300 -mx-8 my-4">
        <form action="{{ route('buyer.assembly.store') }}" method="POST">
            @csrf
            <div class="flexible grid grid-cols-4">
                <label for="">3 Flexible Options</label>
                @foreach ($datas['dataFlexible'] as $index => $data)
                <div>
                    <input type="radio" name="flexible" value="{{ old('flexible', $data->id_flexible) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->flexible_name }}
                </div>
                @endforeach
            </div>
            <div class="board">
                @foreach ($datas['dataBoard'] as $index => $data)
                <input type="radio" name="board" value="{{ old('board', $data->id_board) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->board_type_name }}
                @endforeach
                <p>We suggest...</p>
            </div>
            <div class="side">
                @foreach ($datas['dataSide'] as $index => $data)
                <input type="radio" name="side" value="{{ old('side', $data->id_side) }}" {{ $index == 0 ? 'checked' : '' }}>{{ $data->side_name }}
                @endforeach
            </div>
            <div class="quantity">
                <input type="number" name="quantity" id="quantity">
            </div>
            <div class="sensitive">
                <input type="radio" name="sensitive" id="sensitive" value="no" checked>No
                <input type="radio" name="sensitive" id="sensitive" value="yes">Yes
            </div>
            <div class="sensitive_description">
                <textarea name="sensitive_description" cols="60" rows="5" style="resize: none"></textarea>
            </div>
            <div class="unique">
                <input type="number" name="unique">
            </div>
            <div class="smt">
                <input type="number" name="smt">
            </div>
            <div class="bga">
                <input type="number" name="bga">
            </div>
            <div class="through_hole">
                <input type="number" name="through_hole">
            </div>
            <div class="depanel">
                <input type="radio" name="depanel" value="no" checked>No
                <input type="radio" name="depanel" value="yes">Yes
            </div>
            <div class="function_test">
                <input type="radio" name="function_test" value="no" checked>No
                <input type="radio" name="function_test" value="yes">Yes
            </div>
            <div class="cable_wire">
                <input type="radio" name="cable_wire" value="no" checked>No
                <input type="radio" name="cable_wire" value="yes">Yes
            </div>
            <div class="detail_information">
                <textarea name="detail_information" cols="60" rows="5" style="resize: none"></textarea>
            </div>
            <div class="result">
                <button type="submit">Add to Cart</button>
            </div>
        </form>
        <button onclick="calculate()">Calculate</button>
    </div>
    <!-- </div> -->
</div>

<script>
    function calculate() {
        let quantity = document.getElementById('quantity').value
        console.log(quantity);
    }

    function sensitive() {
        let sensitive = document.getElementById('sensitive').value
        let sensitive_description = document.getElementsByName('sensitive_description')
        if (sensitive == 'no') {
            sensitive_description.classList.add('hidden')
        } else {
            sensitive_description.classList.remove('hidden')
        }
    }
</script>

@endsection