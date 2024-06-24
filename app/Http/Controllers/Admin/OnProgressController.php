<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buyer\Order;
use App\Models\Buyer\DetailOrder;
use Illuminate\Http\Request;

class OnProgressController extends Controller
{
    public function getData($order)
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
            'pricePortfolio' => $pricePortfolio,
            'totalPrice' => $priceAssembly + $pricePrototype + $pricePortfolio
        ];
    }

    public function index()
    {
        // get data
        $datas = Order::where('status', 'on progress')->with('user')->latest()->get();

        return view('admin.on_progress.index', compact('datas'));
    }

    public function show(Order $order)
    {
        // get detail order by ID
        $datas = $this->getData($order->id_order);

        // return view('admin.on_progress.show', compact('datas'));
        return $datas;
    }

    public function done(Order $order, Request $request)
    {

        // validate input
        $request->validate([
            'no_resi' => 'required|string|min:10',
            'shipping_method' => 'required|string|min:3'
        ]);

        // get data order by id
        $dataOrder = Order::findOrFail($order->id_order);

        // update status order to done and input no resi
        $dataOrder->update([
            'status' => 'done',
            'shipping_method' => $request->shipping_method,
            'no_resi' => $request->no_resi
        ]);

        //redirect to index
        return redirect()->route('progress.index')->with(['success' => 'Data Order Sudah Done!']);
    }
}
