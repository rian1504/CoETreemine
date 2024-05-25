<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomPrototype;
use App\Http\Requests\StoreCustomPrototypeRequest;
use App\Http\Requests\UpdateCustomPrototypeRequest;
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

class CustomPrototypeController extends Controller
{
    // get data from database
    public function getDataPrototype()
    {
        $dataBoard = PrototypeBoardType::latest()->paginate(10);
        $dataRouteProcess = PrototypeRouteProcess::latest()->paginate(10);
        $dataFr4 = PrototypeFr4::latest()->paginate(10);
        $dataThickness = PrototypeThickness::with('prototype_layer')->latest()->paginate(10);
        $dataLayer = PrototypeLayer::latest()->paginate(10);
        $dataInnerCooper = PrototypeInnerCooper::latest()->paginate(10);
        $dataFinishedCooper = PrototypeFinishedCooper::latest()->paginate(10);
        $dataCooperLayer = PrototypeCooperLayer::latest()->paginate(10);
        $dataTrack = PrototypeTrack::latest()->paginate(10);
        $dataHole = PrototypeHole::latest()->paginate(10);
        $dataSolder = PrototypeSolder::latest()->paginate(10);
        $dataSilk = PrototypeSilk::latest()->paginate(10);
        $dataSurface = PrototypeSurface::latest()->paginate(10);
        $dataViaProcess = PrototypeViaProcess::latest()->paginate(10);
        $dataMaterial = PrototypeMaterial::latest()->paginate(10);
        $dataSoldermaskLayer1 = PrototypeSoldermaskLayer1::latest()->paginate(10);
        $dataSilkscreenLayer1 = PrototypeSilkscreenLayer1::latest()->paginate(10);

        return [
            "dataBoard" => $dataBoard,
            "dataRouteProcess" => $dataRouteProcess,
            "dataFr4" => $dataFr4,
            "dataThickness" => $dataThickness,
            "dataLayer" => $dataLayer,
            "dataInnerCooper" => $dataInnerCooper,
            "dataFinishedCooper" => $dataFinishedCooper,
            "dataCooperLayer" => $dataCooperLayer,
            "dataTrack" => $dataTrack,
            "dataHole" => $dataHole,
            "dataSolder" => $dataSolder,
            "dataSilk" => $dataSilk,
            "dataSurface" => $dataSurface,
            "dataViaProcess" => $dataViaProcess,
            "dataMaterial" => $dataMaterial,
            "dataSoldermaskLayer1" => $dataSoldermaskLayer1,
            "dataSilkscreenLayer1" => $dataSilkscreenLayer1,
        ];
    }

    // get data select Prototype
    public function getDataSelectPrototype()
    {
        return [
            'Board', 'Route Process', 'Fr4', 'Thickness', 'Layer',
            'Inner Cooper', 'Finished Cooper', 'Cooper Layer', 'Track',
            'Hole', 'Solder', 'Silk', 'Surface', 'Via Process', 'Material',
            'Soldermask Layer 1', 'Silkscreen Layer 1'
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPrototype = $this->getDataPrototype();
        $dataSelect = $this->getDataSelectPrototype();

        return view('admin.Prototype.index', compact('dataPrototype', 'dataSelect'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomPrototypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomPrototype $customPrototype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomPrototype $customPrototype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomPrototypeRequest $request, CustomPrototype $customPrototype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomPrototype $customPrototype)
    {
        //
    }
}