<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\HistoryCartCustom;
use App\Models\Buyer\DetailOrder;
use App\Models\Buyer\Order;

class HistoryController extends Controller
{
    public function cart_custom()
    {
        $datas = HistoryCartCustom::with('custom_assembly')->with('custom_prototype')->with('user')->latest()->paginate(10);
        return view('admin.history.cart_custom', compact('datas'));
    }

    public function showAssembly(CustomAssembly $assembly)
    {
        //get assembly by ID
        $assembly = CustomAssembly::findOrFail($assembly->id_custom_assembly);

        //render view with assembly
        return view('admin.history.assembly', compact('assembly'));
    }

    public function showPrototype(CustomPrototype $prototype)
    {
        //get prototype by ID
        $prototype = CustomPrototype::findOrFail($prototype->id_custom_prototype);

        //render view with prototype
        return view('admin.history.prototype', compact('prototype'));
    }

    public function getDataOrder($order)
    {
        $dataAssembly = DetailOrder::where('id_order', $order)->where('id_custom_assembly', '!=', NULL)->with('custom_assembly')->get();
        $dataPrototype = DetailOrder::where('id_order', $order)->where('id_custom_prototype', '!=', NULL)->with('custom_prototype')->get();
        $dataPortfolio = DetailOrder::where('id_order', $order)->where('id_portfolio', '!=', NULL)->with('portfolio')->get();

        // data assembly
        $totalAssembly = $dataAssembly->count();
        $priceAssembly = 0;
        foreach ($dataAssembly as $index => $item) {
            $priceAssembly += $dataAssembly[$index]->custom_assembly->price;
        }

        // data Prototype
        $totalPrototype = $dataPrototype->count();
        $pricePrototype = 0;
        foreach ($dataPrototype as $index => $item) {
            $pricePrototype += $dataPrototype[$index]->custom_prototype->price;
        }

        // price Portfolio
        $pricePortfolio = 0;
        foreach ($dataPortfolio as $index => $item) {
            $pricePortfolio += $dataPortfolio[$index]->portfolio->portfolio_price;
        }

        return [
            'dataAssembly' => [
                'total' => $totalAssembly,
                'price' => $priceAssembly
            ],
            'dataPrototype' => [
                'total' => $totalPrototype,
                'price' => $pricePrototype
            ],
            'dataPortfolio' => $dataPortfolio,
            'pricePortfolio' => $pricePortfolio
        ];
    }

    public function order()
    {
        $datas = Order::where('status', '!=', 'not review')->where('status', '!=', 'on progress')->with('user')->latest()->paginate(10);
        return view('admin.history.order', compact('datas'));
    }

    public function showOrder(Order $order)
    {
        // get detail order by ID
        $datas = $this->getDataOrder($order->id_order);

        return view('admin.history.show_order', compact('datas'));
    }
}
