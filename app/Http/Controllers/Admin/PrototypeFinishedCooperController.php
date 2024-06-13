<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeFinishedCooper;
use App\Http\Requests\StorePrototypeFinishedCooperRequest;
use App\Http\Requests\UpdatePrototypeFinishedCooperRequest;

class PrototypeFinishedCooperController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.finished_cooper.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeFinishedCooperRequest $request)
    {
        //validate form
        $request->validate([
            'finished_cooper_name' => 'required|min:5',
            'finished_cooper_price' => 'required|numeric'
        ]);

        //create finished Cooper
        PrototypeFinishedCooper::create([
            'finished_cooper_name' => $request->finished_cooper_name,
            'finished_cooper_price' => $request->finished_cooper_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Finished Cooper'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeFinishedCooper $finished_cooper)
    {
        //get finished_cooper by ID
        $finished_cooper = PrototypeFinishedCooper::findOrFail($finished_cooper->id_finished_cooper);

        //render view with finished_cooper
        return view('admin.prototype.finished_cooper.edit', compact('finished_cooper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeFinishedCooperRequest $request, PrototypeFinishedCooper $finished_cooper)
    {
        //validate form
        $request->validate([
            'finished_cooper_name' => 'required|min:5',
            'finished_cooper_price' => 'required|numeric'
        ]);

        //get finished_cooper by ID
        $finished_cooper = PrototypeFinishedCooper::findOrFail($finished_cooper->id_finished_cooper);

        // update finished_cooper
        $finished_cooper->update([
            'finished_cooper_name' => $request->finished_cooper_name,
            'finished_cooper_price' => $request->finished_cooper_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Finished Cooper'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeFinishedCooper $finished_cooper)
    {
        //get finished_cooper by ID
        $finished_cooper = PrototypeFinishedCooper::findOrFail($finished_cooper->id_finished_cooper);

        //delete finished_cooper
        $finished_cooper->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Finished Cooper'
        ]);
    }
}
