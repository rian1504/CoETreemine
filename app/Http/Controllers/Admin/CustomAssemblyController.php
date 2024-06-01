<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
