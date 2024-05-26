<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\Portfolio;
use App\Models\Pembeli\CartCustom;
use App\Models\Pembeli\Order;

class DashboardController extends Controller
{
    public function getDataAdmin()
    {
        $dataCategory = Category::get()->count();
        $dataPortfolio = Portfolio::get()->count();
        $dataCustomAssembly = CustomAssembly::get();
        $dataCustomPrototype = CustomPrototype::get();
        $dataReviewFile = CartCustom::get()->count();
        $dataReviewPayment = Order::get()->count();
        $dataOrder = Order::get()->count();

        return [
            "dataCategory" => $dataCategory,
            "dataPortfolio" => $dataPortfolio,
            "dataCustomAssembly" => $dataCustomAssembly->count(),
            "dataCustomPrototype" => $dataCustomPrototype->count(),
            "dataReviewFile" => $dataReviewFile,
            "dataReviewPayment" => $dataReviewPayment,
            "dataOrder" => $dataOrder,
        ];
    }

    public function index()
    {
        $is_admin = Auth()->user()->is_admin;

        if ($is_admin == 0) {
            return view('pembeli.dashboard');
        } elseif ($is_admin == 1) {
            $data = $this->getDataAdmin();
            return view('admin.dashboard', compact('data'));
        } else {
            return redirect()->back();
        }
    }
}
