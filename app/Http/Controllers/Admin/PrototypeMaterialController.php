<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PrototypeMaterial;
use App\Http\Requests\StorePrototypeMaterialRequest;
use App\Http\Requests\UpdatePrototypeMaterialRequest;
use Illuminate\Support\Facades\Storage;

class PrototypeMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Material'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeMaterialRequest $request)
    {
        //validate form
        $request->validate([
            'material_name' => 'required|min:5',
            'material_picture' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'material_price' => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('material_picture');
        $image->storeAs('public/assets/images/material', $image->hashName());

        //create material
        PrototypeMaterial::create([
            'material_name' => $request->material_name,
            'material_picture' => $image->hashName(),
            'material_price' => $request->material_price
        ]);

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Disimpan!',
            'select' => 'Material'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(PrototypeMaterial $material)
    {
        //redirect to index
        return redirect()->route('prototype.index')->with([
            'select' => 'Material'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrototypeMaterial $material)
    {
        //get material by ID
        $material = PrototypeMaterial::findOrFail($material->id_material);

        //render view with material
        return view('admin.prototype.material.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeMaterialRequest $request, PrototypeMaterial $material)
    {
        //validate form
        $request->validate([
            'material_name' => 'required|min:5',
            'material_picture' => 'image|mimes:jpeg,jpg,png|max:2048',
            'material_price' => 'required|numeric'
        ]);

        //get material by ID
        $material = PrototypeMaterial::findOrFail($material->id_material);

        //check if image is uploaded
        if ($request->hasFile('material_picture')) {

            //upload new image
            $image = $request->file('material_picture');
            $image->storeAs('public/assets/images/material', $image->hashName());

            //delete old image
            Storage::delete('public/assets/images/material/' . $material->material_picture);

            //update material with new image
            $material->update([
                'material_name' => $request->material_name,
                'material_picture' => $image->hashName(),
                'material_price' => $request->material_price
            ]);
        } else {

            //update material without image
            $material->update([
                'material_name' => $request->material_name,
                'material_price' => $request->material_price
            ]);
        }

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Diubah!',
            'select' => 'Material'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrototypeMaterial $material)
    {
        //get material by ID
        $material = PrototypeMaterial::findOrFail($material->id_material);

        //delete image
        Storage::delete('public/assets/images/material/' . $material->material_picture);

        //delete material
        $material->delete();

        //redirect to index
        return redirect()->route('prototype.index')->with([
            'success' => 'Data Berhasil Dihapus!',
            'select' => 'Material'
        ]);
    }
}