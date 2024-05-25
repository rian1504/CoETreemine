<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeThickness;
use App\Http\Requests\StorePrototypeThicknessRequest;
use App\Http\Requests\UpdatePrototypeThicknessRequest;
use App\Models\Admin\PrototypeLayer;

class PrototypeThicknessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Thickness'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get all data layer
        $layer = PrototypeLayer::all();

        return view('admin.prototype.thickness.create', compact('layer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeThicknessRequest $request)
    {
        //validate form
        $request->validate([
            'thickness_name' => 'required|min:5',
            'thickness_price' => 'required|numeric',
            'id_layer' => 'required|numeric'
        ]);

        //create Thickness
        PrototypeThickness::create([
            'thickness_name' => $request->thickness_name,
            'thickness_price' => $request->thickness_price,
            'id_layer' => $request->id_layer
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Thickness'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeThickness $thickness)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Thickness'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeThickness $thickness)
    {
        //get thickness by ID
        $thickness = PrototypeThickness::findOrFail($thickness->id_thickness);

        // get all data layer
        $layer = PrototypeLayer::all();

        //render view with thickness
        return view('admin.prototype.thickness.edit', compact('thickness', 'layer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeThicknessRequest $request, PrototypeThickness $thickness)
    {
        //validate form
        $request->validate([
            'thickness_name' => 'required|min:5',
            'thickness_price' => 'required|numeric',
            'id_layer' => 'required|numeric'
        ]);

        //get thickness by ID
        $thickness = PrototypeThickness::findOrFail($thickness->id_thickness);

        // update thickness
        $thickness->update([
            'thickness_name' => $request->thickness_name,
            'thickness_price' => $request->thickness_price,
            'id_layer' => $request->id_layer
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Thickness'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeThickness $thickness)
    {
        //get thickness by ID
        $thickness = PrototypeThickness::findOrFail($thickness->id_thickness);

        //delete thickness
        $thickness->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Thickness'
        ]);
    }
}