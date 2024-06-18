<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Admin\CustomAssembly;
use App\Models\Admin\CustomPrototype;
use App\Models\Admin\HistoryCartCustom;
use App\Models\Admin\Portfolio;
use App\Models\Buyer\CartCustom;
use App\Models\Buyer\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getDataAdmin()
    {
        $dataCategory = Category::get()->count();
        $dataPortfolio = Portfolio::get()->count();
        $dataReviewFile = CartCustom::where('status', 'not review')->get()->count();
        $dataReviewPayment = Order::where('status', 'not review')->get()->count();
        $dataOnProgress = Order::where('status', 'on progress')->get()->count();
        $dataOrderHistory = Order::where('status', '!=', 'not review')->get()->count();
        $dataCartCustomHistory = HistoryCartCustom::get()->count();

        return [
            "dataCategory" => $dataCategory,
            "dataPortfolio" => $dataPortfolio,
            "dataReviewFile" => $dataReviewFile,
            "dataReviewPayment" => $dataReviewPayment,
            "dataOnProgress" => $dataOnProgress,
            "dataOrderHistory" => $dataOrderHistory,
            "dataCartCustomHistory" => $dataCartCustomHistory,
        ];
    }

    public function index()
    {
        if (Auth::check()) {
            $is_admin = Auth()->user()->is_admin;

            if ($is_admin == 0) {
                return view('buyer.index');
            } elseif ($is_admin == 1) {
                $data = $this->getDataAdmin();
                return view('admin.index', compact('data'));
            } else {
                return redirect()->back();
            }
        } else {
            return view('buyer.index');
        }
    }
}