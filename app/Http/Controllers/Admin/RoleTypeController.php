<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleType;
use Illuminate\Http\Request;

class RoleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roleType.index', [
            'roleTypes' => RoleType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roleType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        RoleType::createOrUpdate($request);
        return redirect()->route('roletype.index')->with('success', 'Role Type created success');
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
        return view('admin.roleType.edit', [
            'roleType' => RoleType::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        RoleType::createOrUpdate($request, $id);
        return redirect()->route('roletype.index')->with('success', 'Role type updated Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RoleType::findOrFail($id)->delete();
        return redirect()->route('roletype.index')->with('success', 'Role Type deleted success');

    }
}
