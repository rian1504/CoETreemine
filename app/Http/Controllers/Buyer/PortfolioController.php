<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Portfolio;
use App\Models\Buyer\CartPortfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $datas = Category::get();
        $datasBest = Category::latest()->limit(5)->get();
        return view('buyer.portfolio.index', compact('datas', 'datasBest'));
    }

    public function showCategory(Category $category)
    {
        $datas = Category::with('portfolio')->findOrFail($category->id_category);
        $datasAnother = Category::where('id_category', '!=', $category->id_category)->latest()->limit(5)->get();
        return view('buyer.portfolio.detail_category', compact('datas', 'datasAnother'));
    }

    public function showPortfolio($portfolio)
    {
        $data = Portfolio::findOrFail($portfolio);
        return view('buyer.portfolio.detail_portfolio', compact('data'));
    }

    public function addCart(Request $request)
    {
        // validate data
        $request->validate([
            'quantity' => 'required|numeric|min:1|max:' . $request->portfolio_stock
        ]);

        // create cart portfolio
        CartPortfolio::create([
            'quantity' => $request->quantity,
            'id_portfolio' => $request->id_portfolio,
            'id_user' => $request->user()->id_user
        ]);

        //redirect to index
        return redirect()->back()->with(['success' => 'Berhasil Menambahkan Data Keranjang']);
    }

    public function buyNow(Request $request)
    {
        dd($request->quantity);
    }
}