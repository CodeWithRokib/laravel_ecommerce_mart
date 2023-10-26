<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ShowProduct;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.showProduct.index', [
            'showProducts' => ShowProduct::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.showProduct.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShowProduct::createOrUpdate($request);
        return redirect()->route('showProduct.index')->with('success', 'Show Product Created Successfully');
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
        return view('admin.showProduct.edit', [
            'showProduct' => ShowProduct::find($id),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        ShowProduct::createOrUpdate($request, $id);
        return redirect()->route('showProduct.index')->with('success', 'Show Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ShowProduct::find($id)->delete();
        return redirect()->route('showProduct.index')->with('success', 'Show Product Deleted Successfully');
    }
}
