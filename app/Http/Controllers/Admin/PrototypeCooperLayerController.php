<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeCooperLayer;
use Illuminate\Http\Request;

class PrototypeCooperLayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Cooper Layer'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.cooper_layer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'cooper_layer_name' => 'required|min:5'
        ]);

        //create cooper_layer
        PrototypeCooperLayer::create([
            'cooper_layer_name' => $request->cooper_layer_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Cooper Layer'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeCooperLayer $cooper_layer)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Cooper Layer'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeCooperLayer $cooper_layer)
    {
        //get cooper_layer by ID
        $cooper_layer = PrototypeCooperLayer::findOrFail($cooper_layer->id_cooper_layer);

        //render view with cooper_layer
        return view('admin.prototype.cooper_layer.edit', compact('cooper_layer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrototypeCooperLayer $cooper_layer)
    {
        //validate form
        $request->validate([
            'cooper_layer_name' => 'required|min:5'
        ]);

        //get cooper_layer by ID
        $cooper_layer = PrototypeCooperLayer::findOrFail($cooper_layer->id_cooper_layer);

        // update cooper_layer
        $cooper_layer->update([
            'cooper_layer_name' => $request->cooper_layer_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Cooper Layer'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeCooperLayer $cooper_layer)
    {
        //get cooper_layer by ID
        $cooper_layer = PrototypeCooperLayer::findOrFail($cooper_layer->id_cooper_layer);

        //delete cooper_layer
        $cooper_layer->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Cooper Layer'
        ]);
    }
}