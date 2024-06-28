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
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function getDataCustom()
    {
        $id_user = Auth::id();
        $dataCustom = CartCustom::where('id_user', $id_user)->with('custom_assembly')->with('custom_prototype')->get();

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
        $assembly = CustomAssembly::with('assembly_flexible')
            ->with('assembly_board_type')->with('assembly_side')
            ->findOrFail($assembly->id_custom_assembly);

        // $assembly = CustomAssembly::findOrFail($assembly->id_custom_assembly);
        //render view with custom_assembly
        // return view('buyer.cart.show_assembly', compact('assembly'));
        return $assembly;
    }

    public function prototype(CustomPrototype $prototype)
    {
        //get custom_prototype by ID
        $prototype = CustomPrototype::with('prototype_board_type')->with('prototype_route_process')
            ->with('prototype_fr4')->with('prototype_thickness')->with('prototype_layer')
            ->with('prototype_inner_cooper')->with('prototype_finished_cooper')->with('prototype_cooper_layer')
            ->with('prototype_track')->with('prototype_hole')->with('prototype_solder')->with('prototype_silk')
            ->with('prototype_surface')->with('prototype_via_process')->with('prototype_material')
            ->with('prototype_soldermask_layer1')->with('prototype_silkscreen_layer1')
            ->findOrFail($prototype->id_custom_prototype);

        // $prototype = CustomPrototype::findOrFail($prototype->id_custom_prototype);
        //render view with custom_prototype
        // return view('buyer.cart.show_prototype', compact('prototype'));
        return $prototype;
    }

    public function assemblyAddFile(CustomAssembly $assembly, Request $request)
    {
        // validate input
        $request->validate([
            'file' => 'required|mimes:rar,zip|max:2048'
        ]);

        //get assembly by ID
        $assembly = CustomAssembly::findOrFail($assembly->id_custom_assembly);

        //upload file
        $file = $request->file('file');
        $file->storeAs('public/assets/files/assembly', $file->hashName());

        // update assembly
        $assembly->update([
            'file' => $file->hashName()
        ]);

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Berhasil Menambah File pada Assembly!']);
    }

    public function prototypeAddFile(CustomPrototype $prototype, Request $request)
    {
        // validate input
        $request->validate([
            'file' => 'required|mimes:rar,zip|max:2048'
        ]);

        //get prototype by ID
        $prototype = CustomPrototype::findOrFail($prototype->id_custom_prototype);

        //upload file
        $file = $request->file('file');
        $file->storeAs('public/assets/files/prototype', $file->hashName());

        // update prototype
        $prototype->update([
            'file' => $file->hashName()
        ]);

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Berhasil Menambah File pada Prototype!']);
    }

    public function portfolio_delete(CartPortfolio $portfolio)
    {
        //get portfolio by ID
        $portfolio = CartPortfolio::findOrFail($portfolio->id_cart_portfolio);

        //delete portfolio
        $portfolio->delete();

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Cart Portfolio Berhasil Dihapus!']);
    }

    public function custom_delete(CartCustom $custom)
    {
        //get custom by ID
        $custom = CartCustom::with('custom_assembly')->with('custom_prototype')->findOrFail($custom->id_cart_custom);

        // Hapus data custom_assembly
        if ($custom->custom_assembly != NULL) {

            //delete file assembly
            if ($custom->custom_assembly->file != NULL) {
                Storage::delete('public/assets/files/assembly/' . $custom->custom_assembly->file);
            }

            $custom->custom_assembly->delete();
        }

        // Hapus data custom_prototype
        if ($custom->custom_prototype != NULL) {

            //delete file prototype
            if ($custom->custom_prototype->file != NULL) {
                Storage::delete('public/assets/files/prototype/' . $custom->custom_prototype->file);
            }

            $custom->custom_prototype->delete();
        }

        //redirect to index
        return redirect()->route('cart.index')->with(['success' => 'Cart Custom Berhasil Dihapus!']);
    }
}
