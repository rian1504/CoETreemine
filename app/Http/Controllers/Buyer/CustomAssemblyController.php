<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssemblyBoardType;
use App\Models\Admin\AssemblyFlexible;
use App\Models\Admin\AssemblySide;
use App\Models\Admin\CustomAssembly;
use App\Models\Buyer\CartCustom;
use Illuminate\Http\Request;

class CustomAssemblyController extends Controller
{
    public function getDataAssembly()
    {
        $dataFlexible = AssemblyFlexible::get();
        $dataBoard = AssemblyBoardType::get();
        $dataSide = AssemblySide::get();

        return [
            'dataFlexible' => $dataFlexible,
            'dataBoard' => $dataBoard,
            'dataSide' => $dataSide
        ];
    }

    public function index()
    {
        $datas = $this->getDataAssembly();

        return view('buyer.assembly', compact('datas'));
    }

    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'flexible' => 'required|numeric',
            'board' => 'required|numeric',
            'side' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sensitive' => 'required|string',
            'sensitive_description' => 'nullable|string',
            'unique' => 'required|numeric',
            'smt' => 'required|numeric',
            'bga' => 'required|numeric',
            'through_hole' => 'required|numeric',
            'depanel' => 'required|string',
            'function_test' => 'required|string',
            'cable_wire' => 'required|string',
            'detail_information' => 'nullable|string'
        ]);

        // get price
        $price = 100000;

        // create custom assembly
        CustomAssembly::create([
            'quantity' => $request->quantity,
            'sensitive_component' => $request->sensitive,
            'sensitive_component_description' => $request->sensitive_description,
            'unique_part' => $request->unique,
            'smt_part' => $request->smt,
            'bga_part' => $request->bga,
            'through_hole_part' => $request->through_hole,
            'depanel' => $request->depanel,
            'function_test' => $request->function_test,
            'cable_wire' => $request->cable_wire,
            'detail_information' => $request->detail_information,
            'price' => $price,
            'id_flexible' => $request->flexible,
            'id_board' => $request->board,
            'id_side' => $request->side
        ]);

        // get new id assembly
        $id_custom_assembly = CustomAssembly::latest()->first()->id_custom_assembly;

        // get id user
        $id_user = $request->user()->id_user;

        // get total price
        $total_price = 100000;

        // create cart portfolio
        CartCustom::create([
            'status' => 'not review',
            'total_price' => $total_price,
            'id_user' => $id_user,
            'id_custom_assembly' => $id_custom_assembly,
            'id_custom_prototype' => null
        ]);

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Berhasil Menambahkan Data Assembly ke Keranjang']);
    }
}
