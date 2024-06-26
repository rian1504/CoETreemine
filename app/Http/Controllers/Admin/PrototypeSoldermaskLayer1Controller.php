<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeSoldermaskLayer1;
use Illuminate\Http\Request;

class PrototypeSoldermaskLayer1Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.soldermask_layer1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'soldermask_layer1_name' => 'required|min:5'
        ]);

        //create soldermask_layer1
        PrototypeSoldermaskLayer1::create([
            'soldermask_layer1_name' => $request->soldermask_layer1_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Soldermask Layer1'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeSoldermaskLayer1 $soldermask_layer1)
    {
        //get soldermask_layer1 by ID
        $soldermask_layer1 = PrototypeSoldermaskLayer1::findOrFail($soldermask_layer1->id_soldermask_layer1);

        //render view with soldermask_layer1
        return view('admin.prototype.soldermask_layer1.edit', compact('soldermask_layer1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrototypeSoldermaskLayer1 $soldermask_layer1)
    {
        //validate form
        $request->validate([
            'soldermask_layer1_name' => 'required|min:5'
        ]);

        //get soldermask_layer1 by ID
        $soldermask_layer1 = PrototypeSoldermaskLayer1::findOrFail($soldermask_layer1->id_soldermask_layer1);

        // update soldermask_layer1
        $soldermask_layer1->update([
            'soldermask_layer1_name' => $request->soldermask_layer1_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Soldermask Layer1'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeSoldermaskLayer1 $soldermask_layer1)
    {
        //get soldermask_layer1 by ID
        $soldermask_layer1 = PrototypeSoldermaskLayer1::findOrFail($soldermask_layer1->id_soldermask_layer1);

        //delete soldermask_layer1
        $soldermask_layer1->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Soldermask Layer1'
        ]);
    }
}