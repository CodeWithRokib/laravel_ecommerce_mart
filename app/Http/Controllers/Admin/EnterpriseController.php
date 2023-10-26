<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.enterprise.index', [
            'enterprises' => Enterprise::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.enterprise.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Enterprise::createOrUpdate($request);
        return redirect()->route('entrepreneurs.index')->with('success', 'Entrepreneur created successfully');
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
        return view('admin.enterprise.edit', [
            'enterprise' => Enterprise::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Enterprise::createOrUpdate($request, $id);
        return redirect()->route('entrepreneurs.index')->with('success', 'Entrepreneur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enterprise::findOrFail($id)->delete();
        return redirect()->route('entrepreneurs.index')->with('success', 'Entrepreneur deleted successfully');
    }
}
