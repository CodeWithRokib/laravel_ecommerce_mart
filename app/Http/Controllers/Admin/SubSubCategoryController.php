<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class SubSubCategoryController extends Controller
{
    public $subCategories;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-sub-category.index', [
            'subSubCategories' => SubSubCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-sub-category.create', [
            // 'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubSubCategory::createOrUpdate($request);
        return redirect()->route('sub-sub-category.index')->with('success', 'Sub Sub Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.sub-sub-category.edit', [
            'subSubCategory' => SubSubCategory::findOrFail($id),
            'categories' => Category::all(),
            'subCategories' => SubCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SubSubCategory::createOrUpdate($request, $id);
        return redirect()->route('sub-sub-category.index')->with('success', 'Sub Sub Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubSubCategory::findOrFail($id)->delete();
        return redirect()->route('sub-sub-category.index')->with('success', 'Sub Sub Category Deleted Successfully');
    }

    public function getSubCategory(Request $request)
    {
        $this->subCategories = SubCategory::where('category_id', $request->category_id)->get();
        // dd($this->subCategories);
        return response()->json($this->subCategories);
    }
}
