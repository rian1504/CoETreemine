<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\Portfolio;
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
        return view('buyer.cart.index', compact('dataCustom', 'dataPortfolio'));
    }

    public function portfolio(Portfolio $portfolio)
    {
        //get portfolio by ID
        $data = Portfolio::with('category')->findOrFail($portfolio->id_portfolio);

        //render view with portfolio
        return view('buyer.cart.show_portfolio', compact('data'));
    }

    public function assembly(CustomAssembly $assembly)
    {
        //get custom_assembly by ID
        $assembly = CustomAssembly::findOrFail($assembly->id_custom_assembly);

        //render view with custom_assembly
        return view('buyer.cart.show_assembly', compact('assembly'));
    }

    public function prototype(CustomPrototype $prototype)
    {
        //get custom_prototype by ID
        $prototype = CustomPrototype::findOrFail($prototype->id_custom_prototype);

        //render view with custom_prototype
        return view('buyer.cart.show_prototype', compact('prototype'));
    }

    public function assemblyAddFile(CustomAssembly $assembly, Request $request)
    {
    }

    public function prototypeAddFile(CustomPrototype $prototype, Request $request)
    {
    }

    public function portfolio_delete(CartPortfolio $prototype)
    {
    }

    public function custom_delete(CustomPrototype $prototype)
    {
    }
}
