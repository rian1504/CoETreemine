<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeSilk;
use App\Http\Requests\StorePrototypeSilkRequest;
use App\Http\Requests\UpdatePrototypeSilkRequest;

class PrototypeSilkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.silk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeSilkRequest $request)
    {
        //validate form
        $request->validate([
            'silk_name' => 'required|min:5',
            'silk_price' => 'required|numeric'
        ]);

        //create silk
        PrototypeSilk::create([
            'silk_name' => $request->silk_name,
            'silk_price' => $request->silk_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Silk'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeSilk $silk)
    {
        //get silk by ID
        $silk = PrototypeSilk::findOrFail($silk->id_silk);

        //render view with silk
        return view('admin.prototype.silk.edit', compact('silk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeSilkRequest $request, PrototypeSilk $silk)
    {
        //validate form
        $request->validate([
            'silk_name' => 'required|min:5',
            'silk_price' => 'required|numeric'
        ]);

        //get silk by ID
        $silk = PrototypeSilk::findOrFail($silk->id_silk);

        // update silk
        $silk->update([
            'silk_name' => $request->silk_name,
            'silk_price' => $request->silk_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Silk'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeSilk $silk)
    {
        //get silk by ID
        $silk = PrototypeSilk::findOrFail($silk->id_silk);

        //delete silk
        $silk->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Silk'
        ]);
    }
}
