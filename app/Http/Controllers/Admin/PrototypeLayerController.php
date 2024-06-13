<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeLayer;
use App\Http\Requests\StorePrototypeLayerRequest;
use App\Http\Requests\UpdatePrototypeLayerRequest;

class PrototypeLayerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.layer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeLayerRequest $request)
    {
        //validate form
        $request->validate([
            'layer_name' => 'required|min:5',
            'layer_price' => 'required|numeric'
        ]);

        //create layer
        PrototypeLayer::create([
            'layer_name' => $request->layer_name,
            'layer_price' => $request->layer_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Layer'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeLayer $layer)
    {
        //get layer by ID
        $layer = PrototypeLayer::findOrFail($layer->id_layer);

        //render view with layer
        return view('admin.prototype.layer.edit', compact('layer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeLayerRequest $request, PrototypeLayer $layer)
    {
        //validate form
        $request->validate([
            'layer_name' => 'required|min:5',
            'layer_price' => 'required|numeric'
        ]);

        //get layer by ID
        $layer = PrototypeLayer::findOrFail($layer->id_layer);

        // update layer
        $layer->update([
            'layer_name' => $request->layer_name,
            'layer_price' => $request->layer_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Layer'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeLayer $layer)
    {
        //get layer by ID
        $layer = PrototypeLayer::findOrFail($layer->id_layer);

        //delete layer
        $layer->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Layer'
        ]);
    }
}
