<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomAssembly;
use App\Http\Requests\StoreCustomAssemblyRequest;
use App\Http\Requests\UpdateCustomAssemblyRequest;
use App\Models\Admin\AssemblyBoardType;
use App\Models\Admin\AssemblyFlexible;
use App\Models\Admin\AssemblySide;

class CustomAssemblyController extends Controller
{
    // get data from database
    public function getDataAssembly()
    {
        $dataFlexible = AssemblyFlexible::latest()->paginate(10);
        $dataBoard = AssemblyBoardType::latest()->paginate(10);
        $dataSide = AssemblySide::latest()->paginate(10);

        return [
            "dataFlexible" => $dataFlexible,
            "dataBoard" => $dataBoard,
            "dataSide" => $dataSide,
        ];
    }

    // get data select assembly
    public function getDataSelectAssembly()
    {
        return [
            'Flexible', 'Board', 'Side'
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAssembly = $this->getDataAssembly();
        $dataSelect = $this->getDataSelectAssembly();

        return view('admin.assembly.index', compact('dataAssembly', 'dataSelect'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreCustomAssemblyRequest $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(CustomAssembly $customAssembly)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(CustomAssembly $customAssembly)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateCustomAssemblyRequest $request, CustomAssembly $customAssembly)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(CustomAssembly $customAssembly)
    // {
    //     //
    // }
}