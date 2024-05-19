<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Category::latest()->paginate(10);
        return view('admin.category_portfolio.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category_portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //validate form
        $request->validate([
            'category_name' => 'required|min:5',
            'category_picture' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('category_picture');
        $image->storeAs('public/assets/images/category', $image->hashName());

        //create category
        Category::create([
            'category_name' => $request->category_name,
            'category_picture' => $image->hashName()
        ]);

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //get category by ID
        $category = Category::findOrFail($category->id_category);

        //render view with category
        return view('admin.category_portfolio.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //validate form
        $request->validate([
            'category_name' => 'required|min:5',
            'category_picture' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //get category by ID
        $category = Category::findOrFail($category->id_category);

        //check if image is uploaded
        if ($request->hasFile('category_picture')) {

            //upload new image
            $image = $request->file('category_picture');
            $image->storeAs('public/assets/images/category', $image->hashName());

            //delete old image
            Storage::delete('public/assets/images/category/' . $category->category_picture);

            //update category with new image
            $category->update([
                'category_name' => $request->category_name,
                'category_picture' => $image->hashName()
            ]);
        } else {

            //update category without image
            $category->update([
                'category_name' => $request->category_name
            ]);
        }

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //get category by ID
        $category = Category::findOrFail($category->id_category);

        //delete image
        Storage::delete('public/assets/images/category/' . $category->category_picture);

        //delete category
        $category->delete();

        //redirect to index
        return redirect()->route('category.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
