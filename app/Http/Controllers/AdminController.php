<?php

namespace App\Http\Controllers;

use App\Models\Buyer\Order;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Portfolio;
use App\Models\Buyer\CartCustom;
use App\Http\Controllers\Controller;
use App\Models\Admin\HistoryCartCustom;

class AdminController extends Controller
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
        $data = $this->getDataAdmin();
        return view('admin.index', compact('data'));
    }
}