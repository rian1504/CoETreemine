@extends('layouts.buyer_homepage')

@section('title', 'CoE Treemine | Assembly')

@section('carousel')
<div class="mt-36">
    @include('components.carousel')
</div>
@endsection

@section('content')
<div class="my-4 py-4 px-8 bg-white w-full flex flex-row gap-4 justify-around font-semibold">
    <a href="{{ route('buyer.prototype.index') }}" class="w-1/6 h-20">
        <div class="flex justify-center items-center w-full h-full px-4 py-2 border shadow-lg gap-2 hover-effect
        {{ Route::is('buyer.prototype.index') ? 'border-buyer-green' : 'border-custom-grey' }}">
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
        {{ Route::is('buyer.portfolio.index') ? 'border-buyer-green' : 'border-custom-grey' }}">
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
            <h1 class="bg-white text-lg font-bold mb-8">Assembly Service</h1>
            <hr class="border-t-2 border-custom-grey -mx-8 my-4">
            <form action="{{ route('buyer.assembly.store') }}" method="POST" class="w-full flex flex-col gap-4 text-sm">
                @csrf

                <div class="flexible flex flex-row w-full">
                    <label for="" class="w-1/3">3 Flexible Options</label>
                    <div class="w-2/3">
                        <div class="flex flex-row gap-4">
                            @foreach ($datas['dataFlexible'] as $index => $data)
                            <div class="flex items-center">
                                <input type="radio" name="flexible" id="flexible-{{ $index }}" value="{{ old('flexible', $data->id_flexible) }}" {{ $index == 0 ? 'checked' : '' }} class="hidden peer" checked>
                                <label for="flexible-{{ $index }}" class="label-radio">{{ $data->flexible_name }}</label>
                            </div>
                            @endforeach
                        </div>
                        <p class="text-xs text-yellow-300 mt-2">Polibatam supply parts</span>
                    </div>
                </div>

                <div class=" board flex flex-row w-full">
                    <label for="" class="w-1/3">Board Type</label>
                    <div class="w-2/3 ">
                        <div class="flex flex-row gap-4">
                            @foreach ($datas['dataBoard'] as $index => $data)
                            <div class="flex items-center">
                                <input type="radio" name="board" id="board-{{ $index }}" value="{{ old('board', $data->id_board) }}" {{ $index == 0 ? 'checked' : '' }} class="hidden peer" checked>
                                <label for="board-{{ $index }}" class="label-radio">{{ $data->board_type_name }}</label>
                            </div>
                            @endforeach
                        </div>
                        <p class="text-xs text-yellow-300 mt-2">We suggest choose to do panel if single PCB qty is more
                            than 20pcs or any side of single board is smaller than 50mm.</p>
                    </div>
                </div>
                <div class="side flex flex-row w-full">
                    <label for="" class="w-1/3">Assembly Side(s)</label>
                    <div class="w-2/3 ">
                        <div class="flex flex-row gap-4">
                            @foreach ($datas['dataSide'] as $index => $data)
                            <div class="flex items-center">
                                <input type="radio" name="side" id="flex-{{ $index }}" value="{{ old('side', $data->id_side) }}" {{ $index == 0 ? 'checked' : '' }} class="hidden peer" checked>
                                <label for="flex-{{ $index }}" class="label-radio">{{ $data->side_name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="quantity flex flex-row w-full">
                    <label for="quantity" class="w-1/3">Quantity<span class="text-red-600">*</span></label>
                    <input type="number" name="quantity" id="quantity" class="input-number">
                    <label for="quantity" class="label-input-number">Pcs</label>
                </div>
                <div class="flex flex-row w-full">
                    <label for="" class="w-1/3">Pay Attention <span class="text-red-600">*</span></label>
                    <div class="w-2/3 ">
                        <p>Contains sensitive components/parts</p>
                        <div class="">
                            <div class="sensitive inline-flex flex-row gap-4 my-2">
                                <div class="flex items-center">
                                    <input type="radio" name="sensitive" id="sensitive-no" value="no" class="hidden peer" checked>
                                    <label for="sensitive-no" class="label-radio">No</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="sensitive" id="sensitive-yes" value="yes" class="hidden peer">
                                    <label for="sensitive-yes" class="label-radio">Yes</label>
                                </div>
                            </div>
                            <div class="sensitive_description hidden">
                                <textarea name="sensitive_description" id="sensitive_description" rows="4" class="textarea-form" placeholder="Write your thoughts here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-xs text-yellow-300">They can be left blank if you're not sure about the number of Unique
                    Parts, SMT Parts, BGA/QFP Parts or THT parts.</p>
                <div class="unique flex flex-row w-full">
                    <label for="" class="w-1/3">Number of Unique Parts</label>
                    <input type="number" name="unique" class="input-number">
                </div>
                <div class="smt flex flex-row w-full">
                    <label for="" class="w-1/3">Number of SMD Parts</label>
                    <input type="number" name="smt" class="input-number">
                </div>
                <div class="bga flex flex-row w-full">
                    <label for="" class="w-1/3">Number of BGA/QFP Parts</label>
                    <input type="number" name="bga" class="input-number">
                </div>
                <div class="through_hole flex flex-row w-full">
                    <label for="" class="w-1/3">Through Hole</label>
                    <input type="number" name="through_hole" class="input-number">
                </div>
                <div class="depanel flex flex-row w-full">
                    <label for="" class="w-1/3">Depanel the Boards to delivery</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="depanel" id="depanel-no" value="no" class="hidden peer" checked>
                            <label for="depanel-no" class="label-radio">No</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="depanel" id="depanel-yes" value="yes" class="hidden peer">
                            <label for="depanel-yes" class="label-radio">Yes</label>
                        </div>
                    </div>
                </div>
                <div class="function_test flex flex-row w-full">
                    <label for="" class="w-1/3">Function Test</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="function_test" id="function-no" value="no" class="hidden peer" checked>
                            <label for="function-no" class="label-radio">No</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="function_test" id="function-yes" value="yes" class="hidden peer">
                            <label for="function-yes" class="label-radio">Yes</label>
                        </div>
                    </div>
                </div>
                <div class="cable_wire flex flex-row w-full">
                    <label for="" class="w-1/3">Cable wire harness assembly</label>
                    <div class="w-2/3 inline-flex flex-row gap-4">
                        <div class="flex items-center">
                            <input type="radio" name="cable_wire" id="cable-no" value="no" class="hidden peer" checked>
                            <label for="cable-no" class="label-radio">No</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="cable_wire" id="cable-yes" value="yes" class="hidden peer">
                            <label for="cable-yes" class="label-radio">Yes</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full">
                    <label for="" class="w-1/3">Detail Information</label>
                    <div class="w-2/3 ">
                        <div class="">
                            <div class="detail_information">
                                <textarea name="detail_information" id="detail_information" rows="4" class="textarea-form" placeholder="Write your thoughts here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4 gap-4">
                    {{-- button addcart sementara --}}
                    <button type="submit" class="w-1/6 button-green"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                    <button class="w-1/6 button-green" onclick="calculate()"><i class="fas fa-calculator me-2"></i>Calculate</button>
                </div>
            </form>
        </div>
    </div>

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