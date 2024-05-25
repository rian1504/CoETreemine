<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeHole;
use App\Http\Requests\StorePrototypeHoleRequest;
use App\Http\Requests\UpdatePrototypeHoleRequest;

class PrototypeHoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Hole'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.hole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeHoleRequest $request)
    {
        //validate form
        $request->validate([
            'hole_name' => 'required|min:5',
            'hole_price' => 'required|numeric'
        ]);

        //create hole
        PrototypeHole::create([
            'hole_name' => $request->hole_name,
            'hole_price' => $request->hole_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Hole'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeHole $hole)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Hole'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeHole $hole)
    {
        //get hole by ID
        $hole = PrototypeHole::findOrFail($hole->id_hole);

        //render view with hole
        return view('admin.prototype.hole.edit', compact('hole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeHoleRequest $request, PrototypeHole $hole)
    {
        //validate form
        $request->validate([
            'hole_name' => 'required|min:5',
            'hole_price' => 'required|numeric'
        ]);

        //get hole by ID
        $hole = PrototypeHole::findOrFail($hole->id_hole);

        // update hole
        $hole->update([
            'hole_name' => $request->hole_name,
            'hole_price' => $request->hole_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Hole'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeHole $hole)
    {
        //get hole by ID
        $hole = PrototypeHole::findOrFail($hole->id_hole);

        //delete hole
        $hole->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Hole'
        ]);
    }
}