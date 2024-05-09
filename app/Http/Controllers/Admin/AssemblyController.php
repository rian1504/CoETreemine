<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assembly;
use App\Http\Requests\StoreAssemblyRequest;
use App\Http\Requests\UpdateAssemblyRequest;

class AssemblyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.assembly.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.assembly.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssemblyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Assembly $assembly)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assembly $assembly)
    {
        return view('admin.assembly.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssemblyRequest $request, Assembly $assembly)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assembly $assembly)
    {
        //
    }
}