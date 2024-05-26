<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\DetailHistoryCartCustom;
use App\Models\Admin\HistoryCartCustom;
use App\Models\Pembeli\CartCustom;
use App\Models\Pembeli\DetailCartCustom;
use Illuminate\Http\Request;

class ReviewFileController extends Controller
{
    public function index()
    {
        // get data
        // $datas = DetailCartCustom::with('cart_custom')->with('custom_assembly')->with('custom_prototype')->get();
        $datas = DetailCartCustom::whereHas('cart_custom', function ($query) {
            $query->where('status', 'not review');
        })->with('custom_assembly')->with('custom_prototype')->get();

        return view('admin.review_file.index', compact('datas'));
    }

    public function showAssembly($assembly)
    {
        //get assembly by ID
        $assembly = CustomAssembly::findOrFail($assembly);

        //render view with assembly
        return view('admin.review_file.assembly', compact('assembly'));
    }

    public function showPrototype($prototype)
    {
        //get prototype by ID
        $prototype = CustomPrototype::findOrFail($prototype);

        //render view with prototype
        return view('admin.review_file.prototype', compact('prototype'));
    }

    public function reject($cart_custom, Request $request)
    {
        // get data
        $data_cart_custom = CartCustom::findOrFail($cart_custom);

        $total_price = $data_cart_custom->total_price;
        $id_user = $data_cart_custom->user()->get()[0]->id_user;
        $id_custom_assembly = DetailCartCustom::where('id_cart_custom', $cart_custom)->first()->id_custom_assembly;
        $id_custom_prototype = DetailCartCustom::where('id_cart_custom', $cart_custom)->first()->id_custom_prototype;

        // create history cart custom
        HistoryCartCustom::create([
            'status' => 'rejected',
            'reason' => $request->reason,
            'total_price' => $total_price,
            'id_user' => $id_user
        ]);

        // get new id history cart custom
        $id_history_cart_custom = HistoryCartCustom::orderBy('created_at', 'desc')->first()->id_history_cart_custom;

        // create detail history cart custom
        DetailHistoryCartCustom::create([
            'id_history_cart_custom' => $id_history_cart_custom,
            'id_custom_assembly' => $id_custom_assembly,
            'id_custom_prototype' => $id_custom_prototype
        ]);

        // delete cart custom sekaligus menghapus detail cart custom
        $data_cart_custom->delete();

        //redirect to index
        return redirect()->route('review_file.index')->with(['success' => 'Data Berhasil Direject!']);
    }

    public function accept($cart_custom)
    {
        // get data
        $data_cart_custom = CartCustom::findOrFail($cart_custom);

        // update status to accepted
        $data_cart_custom->update([
            'status' => 'accepted'
        ]);

        //redirect to index
        return redirect()->route('review_file.index')->with(['success' => 'Data Berhasil Diaccept!']);
    }
}
