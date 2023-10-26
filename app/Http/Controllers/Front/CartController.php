<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\OrederDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.cart.cart', [
            'carts' =>Cart::where('user_id', Auth::user()->id)->get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cart::createOrUpdate($request);
        return redirect()->back()->with('success', 'Cart Added Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            echo "<pre>"; print_r($data); die;

        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::destroy($id);
        return redirect()->back()->with('success', 'Cart Deleted Successfully');
    }

    public function updateQuantity(Request $request)
    {
        $cart = Cart::find($request->cartid);
        // return $cart;
        $cart->quantity = $request->qty;
        $cart->subtotal = $request->qty * $cart->price;
        $cart->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Cart Updated Successfully',
            'view' => view('front.cart.item', [
                'carts' => Cart::where('user_id', Auth::user()->id)->get()
            ])->render()
        ]);
    }

    public function orderIndex()
    {
        return view('admin.order.index', [
            'orderDetails' => OrederDetails::all()->orderBy('id', 'ASC')->get(),
        ]);
    }
}
