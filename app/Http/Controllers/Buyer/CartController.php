<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Buyer\CartCustom;
use App\Models\Buyer\CartPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getDataCustom()
    {
        $id_user = Auth::id();
        $dataCustom = CartCustom::where('id_user', $id_user)->where('status', 'not review')->with('custom_assembly')->with('custom_prototype')->get();

        return $dataCustom;
    }

    public function getDataPortfolio()
    {
        $id_user = Auth::id();
        $dataPortfolio = CartPortfolio::where('id_user', $id_user)->with('portfolio')->get();

        return $dataPortfolio;
    }

    public function index()
    {
        $dataCustom = $this->getDataCustom();
        $dataPortfolio = $this->getDataPortfolio();
        return view('buyer.cart', compact('dataCustom', 'dataPortfolio'));
    }
}
