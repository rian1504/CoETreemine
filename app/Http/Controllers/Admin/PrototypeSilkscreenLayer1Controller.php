<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeSilkscreenLayer1;
use Illuminate\Http\Request;

class PrototypeSilkscreenLayer1Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.silkscreen_layer1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'silkscreen_layer1_name' => 'required|min:5'
        ]);

        //create silkscreen_layer1
        PrototypeSilkscreenLayer1::create([
            'silkscreen_layer1_name' => $request->silkscreen_layer1_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Silkscreen Layer1'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeSilkscreenLayer1 $silkscreen_layer1)
    {
        //get silkscreen_layer1 by ID
        $silkscreen_layer1 = PrototypeSilkscreenLayer1::findOrFail($silkscreen_layer1->id_silkscreen_layer1);

        //render view with silkscreen_layer1
        return view('admin.prototype.silkscreen_layer1.edit', compact('silkscreen_layer1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrototypeSilkscreenLayer1 $silkscreen_layer1)
    {
        //validate form
        $request->validate([
            'silkscreen_layer1_name' => 'required|min:5'
        ]);

        //get silkscreen_layer1 by ID
        $silkscreen_layer1 = PrototypeSilkscreenLayer1::findOrFail($silkscreen_layer1->id_silkscreen_layer1);

        // update silkscreen_layer1
        $silkscreen_layer1->update([
            'silkscreen_layer1_name' => $request->silkscreen_layer1_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Silkscreen Layer1'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeSilkscreenLayer1 $silkscreen_layer1)
    {
        //get silkscreen_layer1 by ID
        $silkscreen_layer1 = PrototypeSilkscreenLayer1::findOrFail($silkscreen_layer1->id_silkscreen_layer1);

        //delete silkscreen_layer1
        $silkscreen_layer1->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Silkscreen Layer1'
        ]);
    }
}