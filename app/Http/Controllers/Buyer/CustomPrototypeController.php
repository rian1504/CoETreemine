<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\PrototypeBoardType;
use App\Models\Admin\PrototypeCooperLayer;
use App\Models\Admin\PrototypeFinishedCooper;
use App\Models\Admin\PrototypeFr4;
use App\Models\Admin\PrototypeHole;
use App\Models\Admin\PrototypeInnerCooper;
use App\Models\Admin\PrototypeLayer;
use App\Models\Admin\PrototypeMaterial;
use App\Models\Admin\PrototypeRouteProcess;
use App\Models\Admin\PrototypeSilk;
use App\Models\Admin\PrototypeSilkscreenLayer1;
use App\Models\Admin\PrototypeSolder;
use App\Models\Admin\PrototypeSoldermaskLayer1;
use App\Models\Admin\PrototypeSurface;
use App\Models\Admin\PrototypeThickness;
use App\Models\Admin\PrototypeTrack;
use App\Models\Admin\PrototypeViaProcess;
use App\Models\Buyer\CartCustom;
use Illuminate\Http\Request;

class CustomPrototypeController extends Controller
{
    public function getDataPrototype()
    {
        $dataBoard = PrototypeBoardType::get();
        $dataRoute = PrototypeRouteProcess::get();
        $dataLayer = PrototypeLayer::get();
        $dataCooperLayer = PrototypeCooperLayer::get();
        $dataSoldermaskLayer1 = PrototypeSoldermaskLayer1::get();
        $dataSilkscreenLayer1 = PrototypeSilkscreenLayer1::get();
        $dataMaterial = PrototypeMaterial::get();
        $dataFr4 = PrototypeFr4::get();
        $dataThickness = PrototypeThickness::with('prototype_layer')->get();

        // // Layer 1
        // $dataLayer1 = PrototypeLayer::where('layer_name', 'layer 1')->first();
        // $id_layer1 = $dataLayer1->id_layer;
        // $dataThicknessLayer1 = PrototypeThickness::where('id_layer', $id_layer1)->with('prototype_layer')->get();

        // // Layer 2
        // $dataLayer2 = PrototypeLayer::where('layer_name', 'layer 2')->first();
        // $id_layer2 = $dataLayer2->id_layer;
        // $dataThicknessLayer2 = PrototypeThickness::where('id_layer', $id_layer2)->with('prototype_layer')->get();

        // // Layer 4
        // $dataLayer4 = PrototypeLayer::where('layer_name', 'layer 4')->first();
        // $id_layer4 = $dataLayer4->id_layer;
        // $dataThicknessLayer4 = PrototypeThickness::where('id_layer', $id_layer4)->with('prototype_layer')->get();

        $dataTrack = PrototypeTrack::get();
        $dataHole = PrototypeHole::get();
        $dataSolder = PrototypeSolder::get();
        $dataSilk = PrototypeSilk::get();
        $dataSurface = PrototypeSurface::get();
        $dataViaProcess = PrototypeViaProcess::get();
        $dataFinishedCooper = PrototypeFinishedCooper::get();
        $dataInnerCooper = PrototypeInnerCooper::get();

        return [
            'dataBoard' => $dataBoard,
            'dataRoute' => $dataRoute,
            'dataFr4' => $dataFr4,
            'dataLayer' => $dataLayer,
            'dataThickness' => $dataThickness,
            // 'dataThicknessLayer1' => $dataThicknessLayer1,
            // 'dataThicknessLayer2' => $dataThicknessLayer2,
            // 'dataThicknessLayer4' => $dataThicknessLayer4,
            'dataInnerCooper' => $dataInnerCooper,
            'dataFinishedCooper' => $dataFinishedCooper,
            'dataCooperLayer' => $dataCooperLayer,
            'dataTrack' => $dataTrack,
            'dataHole' => $dataHole,
            'dataSolder' => $dataSolder,
            'dataSilk' => $dataSilk,
            'dataSurface' => $dataSurface,
            'dataViaProcess' => $dataViaProcess,
            'dataMaterial' => $dataMaterial,
            'dataSoldermaskLayer1' => $dataSoldermaskLayer1,
            'dataSilkscreenLayer1' => $dataSilkscreenLayer1,
        ];
    }

    public function index()
    {
        $datas = $this->getDataPrototype();

        return view('buyer.prototype', compact('datas'));
    }

    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'board' => 'required|numeric',
            'x_out' => 'nullable|string',
            'panel' => 'required|string',
            'panel_description' => 'nullable|string',
            'route' => 'required|numeric',
            'design' => 'required|numeric',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'quantity' => 'required|numeric',
            'layer' => 'required|numeric',
            'cooper_layer' => 'nullable|numeric',
            'soldermask_layer1' => 'nullable|numeric',
            'silkscreen_layer1' => 'nullable|numeric',
            'material' => 'required|numeric',
            'fr4' => 'required|numeric',
            'thickness' => 'required|numeric',
            'track' => 'required|numeric',
            'hole' => 'required|numeric',
            'solder' => 'required|numeric',
            'silk' => 'required|numeric',
            'surface' => 'required|numeric',
            'via' => 'required|numeric',
            'finished' => 'required|numeric',
            'inner' => 'nullable|numeric',
        ]);

        // get price
        $price = 20000;

        // create custom prototype
        CustomPrototype::create([
            'x_out' => $request->x_out,
            'panel_requirement' => $request->panel,
            'panel_requirement_description' => $request->panel_requirement_description,
            'design_panel' => $request->design,
            'length' => $request->length,
            'width' => $request->width,
            'quantity' => $request->quantity,
            'price' => $price,
            'id_board' => $request->board,
            'id_route' => $request->route,
            'id_fr4' => $request->fr4,
            'id_thickness' => $request->thickness,
            'id_layer' => $request->layer,
            'id_inner_cooper' => $request->inner,
            'id_track' => $request->track,
            'id_hole' => $request->hole,
            'id_solder' => $request->solder,
            'id_silk' => $request->silk,
            'id_surface' => $request->surface,
            'id_via' => $request->via,
            'id_finished_cooper' => $request->finished,
            'id_material' => $request->material,
            'id_soldermask_layer1' => $request->soldermask_layer1,
            'id_silkscreen_layer1' => $request->silkscreen_layer1,
            'id_cooper_layer' => $request->cooper_layer
        ]);

        // get new id prototype
        $id_custom_prototype = CustomPrototype::latest()->first()->id_custom_prototype;

        // get id user
        $id_user = $request->user()->id_user;

        // get total price
        $total_price = 200000;

        // create cart portfolio
        CartCustom::create([
            'status' => 'not review',
            'total_price' => $total_price,
            'id_user' => $id_user,
            'id_custom_assembly' => null,
            'id_custom_prototype' => $id_custom_prototype
        ]);

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Berhasil Menambahkan Data Prototype ke Keranjang']);
    }
}