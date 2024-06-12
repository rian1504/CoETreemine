<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssemblySide;
use App\Http\Requests\StoreAssemblySideRequest;
use App\Http\Requests\UpdateAssemblySideRequest;

class AssemblySideController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assembly.side.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssemblySideRequest $request)
    {
        //validate form
        $request->validate([
            'side_name' => 'required|min:5',
            'side_price' => 'required|numeric'
        ]);

        //create side
        AssemblySide::create([
            'side_name' => $request->side_name,
            'side_price' => $request->side_price
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Side'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssemblySide $side)
    {
        //get side by ID
        $side = AssemblySide::findOrFail($side->id_side);

        //render view with side
        return view('admin.assembly.side.edit', compact('side'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssemblySideRequest $request, AssemblySide $side)
    {
        //validate form
        $request->validate([
            'side_name' => 'required|min:5',
            'side_price' => 'required|numeric'
        ]);

        //get side by ID
        $side = AssemblySide::findOrFail($side->id_side);

        // update side
        $side->update([
            'side_name' => $request->side_name,
            'side_price' => $request->side_price
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Side'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssemblySide $side)
    {
        //get side by ID
        $side = AssemblySide::findOrFail($side->id_side);

        //delete side
        $side->delete();

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Side'
        ]);
    }
}
