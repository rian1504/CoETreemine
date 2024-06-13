<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Admin\Category;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Portfolio::with('category')->latest()->paginate(10);
        return view('admin.portfolio.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // get all data category
        $category = Category::all();
        return view('admin.portfolio.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortfolioRequest $request)
    {
        //validate form
        $request->validate([
            'portfolio_name' => 'required|min:5',
            'portfolio_price' => 'required|numeric',
            'portfolio_description' => 'required|min:10',
            'portfolio_stock' => 'required|numeric',
            'portfolio_picture' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'id_category' => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('portfolio_picture');
        $image->storeAs('public/assets/images/portfolio', $image->hashName());

        //create portfolio
        Portfolio::create([
            'portfolio_name' => $request->portfolio_name,
            'portfolio_price' => $request->portfolio_price,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_stock' => $request->portfolio_stock,
            'portfolio_picture' => $image->hashName(),
            'id_category' => $request->id_category
        ]);

        //redirect to index
        return redirect()->route('portfolio.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        //get portfolio by ID
        $portfolio = Portfolio::findOrFail($portfolio->id_portfolio);
        // get all data category
        $category = Category::all();

        //render view with portfolio
        return view('admin.portfolio.edit', compact('portfolio', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        //validate form
        $request->validate([
            'portfolio_name' => 'required|min:5',
            'portfolio_price' => 'required|numeric',
            'portfolio_description' => 'required|min:10',
            'portfolio_stock' => 'required|numeric',
            'portfolio_picture' => 'image|mimes:jpeg,jpg,png|max:2048',
            'id_category' => 'required|numeric'
        ]);

        //get portfolio by ID
        $portfolio = Portfolio::findOrFail($portfolio->id_portfolio);

        //check if image is uploaded
        if ($request->hasFile('portfolio_picture')) {

            //upload new image
            $image = $request->file('portfolio_picture');
            $image->storeAs('public/assets/images/portfolio', $image->hashName());

            //delete old image
            Storage::delete('public/assets/images/portfolio/' . $portfolio->portfolio_picture);

            //update portfolio with new image
            $portfolio->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_price' => $request->portfolio_price,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_stock' => $request->portfolio_stock,
                'portfolio_picture' => $image->hashName(),
                'id_category' => $request->id_category
            ]);
        } else {

            //update portfolio without image
            $portfolio->update([
                'portfolio_name' => $request->portfolio_name,
                'portfolio_price' => $request->portfolio_price,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_stock' => $request->portfolio_stock,
                'id_category' => $request->id_category
            ]);
        }

        //redirect to index
        return redirect()->route('portfolio.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        //get portfolio by ID
        $portfolio = Portfolio::findOrFail($portfolio->id_portfolio);

        //delete image
        Storage::delete('public/assets/images/portfolio/' . $portfolio->portfolio_picture);

        //delete portfolio
        $portfolio->delete();

        //redirect to index
        return redirect()->route('portfolio.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
