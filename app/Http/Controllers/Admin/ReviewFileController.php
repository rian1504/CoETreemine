<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\HistoryCartCustom;
use App\Models\Buyer\CartCustom;
use Illuminate\Http\Request;

class ReviewFileController extends Controller
{
    public function index()
    {
        // get data
        $datas = CartCustom::where('status', 'not review')->with('custom_assembly')->with('custom_prototype')->with('user')->latest()->get();

        return view('admin.review_file.index', compact('datas'));
    }

    public function showAssembly(CustomAssembly $assembly)
    {
        //get assembly by ID
        $assembly = CustomAssembly::with('assembly_flexible')
            ->with('assembly_board_type')->with('assembly_side')
            ->findOrFail($assembly->id_custom_assembly);

        // $assembly = CustomAssembly::->findOrFail($assembly->id_custom_assembly);
        //render view with assembly
        // return view('admin.review_file.assembly', compact('assembly'));
        return $assembly;
    }

    public function showPrototype(CustomPrototype $prototype)
    {
        //get prototype by ID
        $prototype = CustomPrototype::with('prototype_board_type')->with('prototype_route_process')
            ->with('prototype_fr4')->with('prototype_thickness')->with('prototype_layer')
            ->with('prototype_inner_cooper')->with('prototype_finished_cooper')->with('prototype_cooper_layer')
            ->with('prototype_track')->with('prototype_hole')->with('prototype_solder')->with('prototype_silk')
            ->with('prototype_surface')->with('prototype_via_process')->with('prototype_material')
            ->with('prototype_soldermask_layer1')->with('prototype_silkscreen_layer1')
            ->findOrFail($prototype->id_custom_prototype);

        // $prototype = CustomPrototype::findOrFail($prototype->id_custom_prototype);
        //render view with prototype
        // return view('admin.review_file.prototype', compact('prototype'));
        return $prototype;
    }

    public function reject(CartCustom $cart_custom, Request $request)
    {
        // get data
        $data_cart_custom = CartCustom::findOrFail($cart_custom->id_cart_custom);

        $total_price = $data_cart_custom->total_price;
        $id_user = $data_cart_custom->user()->first()->id_user;
        $id_custom_assembly = $data_cart_custom->id_custom_assembly;
        $id_custom_prototype = $data_cart_custom->id_custom_prototype;

        // validate data input
        $request->validate([
            'reason' => 'required|min:5'
        ]);

        // create history cart custom
        HistoryCartCustom::create([
            'status' => 'rejected',
            'reason' => $request->reason,
            'total_price' => $total_price,
            'id_user' => $id_user,
            'id_custom_assembly' => $id_custom_assembly,
            'id_custom_prototype' => $id_custom_prototype
        ]);

        // delete cart custom 
        $data_cart_custom->delete();

        //redirect to index
        return redirect()->route('review_file.index')->with(['success' => 'Data Berhasil Direject!']);
    }

    public function accept(CartCustom $cart_custom)
    {
        // get data
        $data_cart_custom = CartCustom::findOrFail($cart_custom->id_cart_custom);

        $total_price = $data_cart_custom->total_price;
        $id_user = $data_cart_custom->user()->first()->id_user;
        $id_custom_assembly = $data_cart_custom->id_custom_assembly;
        $id_custom_prototype = $data_cart_custom->id_custom_prototype;

        // create history cart custom
        HistoryCartCustom::create([
            'status' => 'accepted',
            'reason' => Null,
            'total_price' => $total_price,
            'id_user' => $id_user,
            'id_custom_assembly' => $id_custom_assembly,
            'id_custom_prototype' => $id_custom_prototype
        ]);

        // update status cart custom to accepted
        $data_cart_custom->update([
            'status' => 'accepted'
        ]);

        //redirect to index
        return redirect()->route('review_file.index')->with(['success' => 'Data Berhasil Diaccept!']);
    }
}
