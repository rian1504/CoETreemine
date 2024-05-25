<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeInnerCooper;
use App\Http\Requests\StorePrototypeInnerCooperRequest;
use App\Http\Requests\UpdatePrototypeInnerCooperRequest;

class PrototypeInnerCooperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Inner Cooper'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.inner_cooper.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeInnerCooperRequest $request)
    {
        //validate form
        $request->validate([
            'inner_cooper_name' => 'required|min:5',
            'inner_cooper_price' => 'required|numeric'
        ]);

        //create Inner Cooper
        PrototypeInnerCooper::create([
            'inner_cooper_name' => $request->inner_cooper_name,
            'inner_cooper_price' => $request->inner_cooper_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Inner Cooper'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeInnerCooper $inner_cooper)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Inner Cooper'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeInnerCooper $inner_cooper)
    {
        //get inner_cooper by ID
        $inner_cooper = PrototypeInnerCooper::findOrFail($inner_cooper->id_inner_cooper);

        //render view with inner_cooper
        return view('admin.prototype.inner_cooper.edit', compact('inner_cooper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeInnerCooperRequest $request, PrototypeInnerCooper $inner_cooper)
    {
        //validate form
        $request->validate([
            'inner_cooper_name' => 'required|min:5',
            'inner_cooper_price' => 'required|numeric'
        ]);

        //get inner_cooper by ID
        $inner_cooper = PrototypeInnerCooper::findOrFail($inner_cooper->id_inner_cooper);

        // update inner_cooper
        $inner_cooper->update([
            'inner_cooper_name' => $request->inner_cooper_name,
            'inner_cooper_price' => $request->inner_cooper_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Inner Cooper'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeInnerCooper $inner_cooper)
    {
        //get inner_cooper by ID
        $inner_cooper = PrototypeInnerCooper::findOrFail($inner_cooper->id_inner_cooper);

        //delete inner_cooper
        $inner_cooper->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Inner Cooper'
        ]);
    }
}