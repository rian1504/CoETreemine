<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Admin\AssemblyBoardType;
use App\Models\Admin\AssemblyFlexible;
use App\Models\Admin\AssemblySide;
use Illuminate\Http\Request;

class CustomAssemblyController extends Controller
{
    public function getDataAssembly()
    {
        $dataFlexible = AssemblyFlexible::get();
        $dataBoard = AssemblyBoardType::get();
        $dataSide = AssemblySide::get();

        return [
            'dataFlexible' => $dataFlexible,
            'dataBoard' => $dataBoard,
            'dataSide' => $dataSide
        ];
    }

    public function index()
    {
        $datas = $this->getDataAssembly();

        return view('buyer.assembly', compact('datas'));
    }
}