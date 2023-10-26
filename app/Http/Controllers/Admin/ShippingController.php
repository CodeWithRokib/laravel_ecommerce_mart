<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
        {
            $shippings = Shipping::get();
            return view('admin.shipping.index',compact('shippings'));
        }

        public function show()
        {
            $shippings = Shipping::get();
            return view('admin.shipping.create',compact('shippings'));
        }

        public function store(Request $request)
        {
            $shippings = new Shipping;
            $shippings->id = $request->id;
            $shippings->product_name = $request->product_name;
            $shippings->price = $request->price;
            $shippings->status = $request->status;
            
            $shippings->save();

            return redirect()->route('shipping.index')->with('success','Shipping Added Successfully');
        }
        public function delete($id)
        {
            $shippings = Shipping::find($id);
            $shippings->delete();
            return redirect()->route('shipping.index')->with('status','Shipping deleted Successfully');
        }

}
