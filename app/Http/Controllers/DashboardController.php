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
        $dataReviewFile = CartCustom::where('status', 'not review')->get()->count();
        $dataReviewPayment = Order::where('status', 'not review')->get()->count();
        $dataOrderHistory = Order::get()->count();
        $dataCartCustomHistory = Order::get()->count();

        return [
            "dataCategory" => $dataCategory,
            "dataPortfolio" => $dataPortfolio,
            "dataCustomAssembly" => $dataCustomAssembly->count(),
            "dataCustomPrototype" => $dataCustomPrototype->count(),
            "dataReviewFile" => $dataReviewFile,
            "dataReviewPayment" => $dataReviewPayment,
            "dataOrderHistory" => $dataOrderHistory,
            "dataCartCustomHistory" => $dataCartCustomHistory,
        ];
    }

    public function index()
    {
        $is_admin = Auth()->user()->is_admin;

        if ($is_admin == 0) {
            return view('buyer.dashboard');
        } elseif ($is_admin == 1) {
            $data = $this->getDataAdmin();
            return view('admin.dashboard', compact('data'));
        } else {
            return redirect()->back();
        }
    }
}