<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeViaProcess;
use App\Http\Requests\StorePrototypeViaProcessRequest;
use App\Http\Requests\UpdatePrototypeViaProcessRequest;

class PrototypeViaProcessController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.via_process.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeViaProcessRequest $request)
    {
        //validate form
        $request->validate([
            'via_process_name' => 'required|min:5',
            'via_process_price' => 'required|numeric'
        ]);

        //create via_process
        PrototypeViaProcess::create([
            'via_process_name' => $request->via_process_name,
            'via_process_price' => $request->via_process_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Via Process'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeViaProcess $via_process)
    {
        //get via_process by ID
        $via_process = PrototypeViaProcess::findOrFail($via_process->id_via);

        //render view with via_process
        return view('admin.prototype.via_process.edit', compact('via_process'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeViaProcessRequest $request, PrototypeViaProcess $via_process)
    {
        //validate form
        $request->validate([
            'via_process_name' => 'required|min:5',
            'via_process_price' => 'required|numeric'
        ]);

        //get via_process by ID
        $via_process = PrototypeViaProcess::findOrFail($via_process->id_via);

        // update via_process
        $via_process->update([
            'via_process_name' => $request->via_process_name,
            'via_process_price' => $request->via_process_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Via Process'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeViaProcess $via_process)
    {
        //get via_process by ID
        $via_process = PrototypeViaProcess::findOrFail($via_process->id_via);

        //delete via_process
        $via_process->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Via Process'
        ]);
    }
}
