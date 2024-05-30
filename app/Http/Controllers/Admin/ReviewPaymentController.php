<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pembeli\DetailOrder;
use App\Models\Pembeli\Order;
use Illuminate\Http\Request;

class ReviewPaymentController extends Controller
{
    public function getData($order)
    {
        $dataAssembly = DetailOrder::where('id_order', $order)->where('id_custom_assembly', '!=', NULL);
        $dataPrototype = DetailOrder::where('id_order', $order)->where('id_custom_prototype', '!=', NULL);
        $dataPortfolio = DetailOrder::where('id_order', $order)->where('id_portfolio', '!=', NULL);

        return [
            'dataAssembly' => $dataAssembly,
            'dataPrototype' => $dataPrototype,
            'dataPortfolio' => $dataPortfolio
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
    }

    public function accept($order)
    {
    }
}
