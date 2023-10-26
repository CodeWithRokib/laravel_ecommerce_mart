<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Enterprise;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $subSubCategories;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return (Product::latest()->get());
        return view('admin.product.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all(),
            'SubCategories' => SubCategory::all(),
            'SubSubCategories' => SubSubCategory::all(),
            'enterprises' => Enterprise::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::createOrUpdate($request);
        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.product.view', [
            'product' => Product::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
            'categories' => Category::latest()->get(),
            'SubCategories' => SubCategory::latest()->get(),
            'SubSubCategories' => SubSubCategory::latest()->get(),
            'enterprises' => Enterprise::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::createOrUpdate($request, $id);
        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully');
    }

    /**
     * Get sub sub category
     */
    public function getSubSubCategory(Request $request)
    {
        $this->subSubCategories = SubSubCategory::where('sub_category_id', $request->sub_category_id)->get();
        // dd($this->subCategories);
        return response()->json($this->subSubCategories);
    }
}
