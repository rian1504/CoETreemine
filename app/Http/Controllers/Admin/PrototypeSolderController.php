<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeSolder;
use App\Http\Requests\StorePrototypeSolderRequest;
use App\Http\Requests\UpdatePrototypeSolderRequest;

class PrototypeSolderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.solder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeSolderRequest $request)
    {
        //validate form
        $request->validate([
            'solder_name' => 'required|min:5',
            'solder_price' => 'required|numeric'
        ]);

        //create solder
        PrototypeSolder::create([
            'solder_name' => $request->solder_name,
            'solder_price' => $request->solder_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Solder'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeSolder $solder)
    {
        //get solder by ID
        $solder = PrototypeSolder::findOrFail($solder->id_solder);

        //render view with solder
        return view('admin.prototype.solder.edit', compact('solder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeSolderRequest $request, PrototypeSolder $solder)
    {
        //validate form
        $request->validate([
            'solder_name' => 'required|min:5',
            'solder_price' => 'required|numeric'
        ]);

        //get solder by ID
        $solder = PrototypeSolder::findOrFail($solder->id_solder);

        // update solder
        $solder->update([
            'solder_name' => $request->solder_name,
            'solder_price' => $request->solder_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Solder'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeSolder $solder)
    {
        //get solder by ID
        $solder = PrototypeSolder::findOrFail($solder->id_solder);

        //delete solder
        $solder->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Solder'
        ]);
    }
}
