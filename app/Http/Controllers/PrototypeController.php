<?php

namespace App\Http\Controllers;

use App\Models\Prototype;
use App\Http\Requests\StorePrototypeRequest;
use App\Http\Requests\UpdatePrototypeRequest;

class PrototypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.prototype.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prototype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrototypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prototype $prototype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prototype $prototype)
    {
        return view('admin.prototype.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrototypeRequest $request, Prototype $prototype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prototype $prototype)
    {
        //
    }
}