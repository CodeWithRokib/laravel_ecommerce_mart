<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
        public function index()
        {
            $users = User::get();
            return view('admin.user.index',compact('users'));
        }
    

    public function statuschange($id, $status)
    {
        $user = User::find($id);
        $user->status = $status;
        $user->update();
        return response()->json(['success' => 'Status changed successfully.']);
    }

    public function edit($id)
    {
        
            $users=User::find($id);
            return view('admin.user.edit',['users'=>$users]);
            
    
    }

  
    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->status = $request->status;
        $users->save();
        return redirect()->route('user.index')->with('success','User Updated Successfully');
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
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
  

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('status','Data deleted Successfully');
    }
}


