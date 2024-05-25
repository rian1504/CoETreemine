<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeFr4;
use App\Http\Requests\StorePrototypeFr4Request;
use App\Http\Requests\UpdatePrototypeFr4Request;

class PrototypeFr4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Fr4'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.fr4.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeFr4Request $request)
    {
        //validate form
        $request->validate([
            'fr4_name' => 'required|min:5'
        ]);

        //create Fr4
        PrototypeFr4::create([
            'fr4_name' => $request->fr4_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Fr4'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeFr4 $fr4)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Fr4'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeFr4 $fr4)
    {
        //get fr4 by ID
        $fr4 = PrototypeFr4::findOrFail($fr4->id_fr4);

        //render view with fr4
        return view('admin.prototype.fr4.edit', compact('fr4'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeFr4Request $request, PrototypeFr4 $fr4)
    {
        //validate form
        $request->validate([
            'fr4_name' => 'required|min:5'
        ]);

        //get Fr4 by ID
        $fr4 = PrototypeFr4::findOrFail($fr4->id_fr4);

        // update Fr4
        $fr4->update([
            'fr4_name' => $request->fr4_name
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Fr4'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeFr4 $fr4)
    {
        //get Fr4 by ID
        $fr4 = PrototypeFr4::findOrFail($fr4->id_fr4);

        //delete Fr4
        $fr4->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Fr4'
        ]);
    }
}