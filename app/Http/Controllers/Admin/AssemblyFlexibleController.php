<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssemblyFlexible;
use App\Http\Requests\StoreAssemblyFlexibleRequest;
use App\Http\Requests\UpdateAssemblyFlexibleRequest;

class AssemblyFlexibleController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assembly.flexible.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssemblyFlexibleRequest $request)
    {
        //validate form
        $request->validate([
            'flexible_name' => 'required|min:5',
            'flexible_price' => 'required|numeric'
        ]);

        //create flexible
        AssemblyFlexible::create([
            'flexible_name' => $request->flexible_name,
            'flexible_price' => $request->flexible_price
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Flexible'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssemblyFlexible $flexible)
    {
        //get flexible by ID
        $flexible = AssemblyFlexible::findOrFail($flexible->id_flexible);

        //render view with flexible
        return view('admin.assembly.flexible.edit', compact('flexible'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssemblyFlexibleRequest $request, AssemblyFlexible $flexible)
    {
        //validate form
        $request->validate([
            'flexible_name' => 'required|min:5',
            'flexible_price' => 'required|numeric'
        ]);

        //get flexible by ID
        $flexible = AssemblyFlexible::findOrFail($flexible->id_flexible);

        // update flexible
        $flexible->update([
            'flexible_name' => $request->flexible_name,
            'flexible_price' => $request->flexible_price
        ]);

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Flexible'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssemblyFlexible $flexible)
    {
        //get flexible by ID
        $flexible = AssemblyFlexible::findOrFail($flexible->id_flexible);

        //delete flexible
        $flexible->delete();

        //redirect to index
        return redirect()->route('assembly.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Flexible'
        ]);
    }
}
