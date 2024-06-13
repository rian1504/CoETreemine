<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeSurface;
use App\Http\Requests\StorePrototypeSurfaceRequest;
use App\Http\Requests\UpdatePrototypeSurfaceRequest;

class PrototypeSurfaceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.surface.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeSurfaceRequest $request)
    {
        //validate form
        $request->validate([
            'surface_name' => 'required|min:5',
            'surface_price' => 'required|numeric'
        ]);

        //create surface
        PrototypeSurface::create([
            'surface_name' => $request->surface_name,
            'surface_price' => $request->surface_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Surface'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeSurface $surface)
    {
        //get surface by ID
        $surface = PrototypeSurface::findOrFail($surface->id_surface);

        //render view with surface
        return view('admin.prototype.surface.edit', compact('surface'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeSurfaceRequest $request, PrototypeSurface $surface)
    {
        //validate form
        $request->validate([
            'surface_name' => 'required|min:5',
            'surface_price' => 'required|numeric'
        ]);

        //get surface by ID
        $surface = PrototypeSurface::findOrFail($surface->id_surface);

        // update surface
        $surface->update([
            'surface_name' => $request->surface_name,
            'surface_price' => $request->surface_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Surface'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeSurface $surface)
    {
        //get surface by ID
        $surface = PrototypeSurface::findOrFail($surface->id_surface);

        //delete surface
        $surface->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Surface'
        ]);
    }
}
