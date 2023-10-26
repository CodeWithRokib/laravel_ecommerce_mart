<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public $subCategory;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index', [
            'subCategories' => SubCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::createOrUpdate($request);
        return redirect()->route('sub-category.index')->with('success', 'Sub Category Created Successfully');
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
        return view('admin.sub-category.edit', [
            'subCategory' => SubCategory::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SubCategory::createOrUpdate($request, $id);
        return redirect()->route('sub-category.index')->with('success', 'Sub Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->subCategory = SubCategory::findOrFail($id);
        if (isset($this->subCategory->image)) {
            if (file_exists($this->subCategory->image)) {
                unlink($this->subCategory->image);
            }
        }
        $this->subCategory->delete();
        return redirect()->route('sub-category.index')->with('success', 'Sub Category Deleted Successfully');
    }
}
