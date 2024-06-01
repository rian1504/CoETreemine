<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Pembeli\Order;
use App\Models\Pembeli\DetailOrder;
use App\Http\Controllers\Controller;

class ReviewPaymentController extends Controller
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
            'pricePortfolio' => $pricePortfolio
        ];
    }

    public function index()
    {
        // get data
        $datas = Order::where('status', 'not review')->with('user')->get();

        return view('admin.review_payment.index', compact('datas'));
    }

    public function show($order)
    {
        // get detail order by ID
        $datas = $this->getData($order);

        return view('admin.review_payment.show', compact('datas'));
    }

    public function reject($order)
    {
        // get data order by id
        $dataOrder = Order::findOrFail($order);

        // update status order to rejected
        $dataOrder->update([
            'status' => 'rejected'
        ]);

        //redirect to index
        return redirect()->route('review_payment.index')->with(['success' => 'Data Berhasil Direject!']);
    }

    public function accept($order)
    {
        // get data order by id
        $dataOrder = Order::findOrFail($order);

        // update status order to accepted and make invoice number
        $dataOrder->update([
            // make invoice number
            'status' => 'accepted',
            'no_invoice' => Str::random(10)
        ]);


        //redirect to index
        return redirect()->route('review_payment.index')->with(['success' => 'Data Berhasil Diaccept!']);
    }
}
