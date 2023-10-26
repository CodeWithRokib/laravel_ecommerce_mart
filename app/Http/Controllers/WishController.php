<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (session()->has('wish')) {
        //     $wishs = request()->session()->get('wish');
        //     // return $wishs;
        //     return view('front.wish.wish', compact('wishs'));
        // } else {
        //     return redirect()->back()->with('error', 'No product added to wish list');
        // }

        $user_id =   Auth::user()->id;
        $wishs = \DB::table('wishes as w')
        ->leftJoin('products as p', function($join) {
        $join->on('p.id', '=', 'w.product_id');
        })
        ->where('w.user_id', $user_id) // Add this line to filter by user ID
        ->get(['p.*','p.name as name']);

        $wishCount = $wishs->count();

        return view('front.wish.wish', compact(
            'wishs','wishCount'
        ));
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

        $user_id =   Auth::user()->id;
        $product_id = $request->product_id;

        $existingWish = \DB::table('wishes')
        ->where('user_id', $user_id)
        ->where('product_id', $product_id)
        ->first();

        if (!$existingWish) {
            // The wish does not exist, so you can add it to the wish list
            \DB::table('wishes')->insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'created_at' => now(),
                'updated_at' => now(),
                // Add other wish data as needed
            ]);
        } else {
            // The wish already exists, you can choose to handle this case accordingly,
            // such as displaying an error message to the user or updating the existing wish.
            return redirect()->back()->with('success', 'The wish already exists');
        }
        // $WishData = [
        //     'user_id' => $uid,
        //     'product_id' => $product_id,
        // ];
        // Wish::create($WishData);
        // // dd("product_id",$request->product_id);
        // // $request->session()->put('wish', $request->product_id);
        return redirect()->back()->with('success', 'Product added to wish list');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete(Request $request)
    {
        $user_id =   Auth::user()->id;
        $product_id = $request->product_id;
        // Wish::where('product_id', $product_id)->delete();
        Wish::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->delete();
        return redirect(url()->previousPath());

        //      $deleted = Wish::where('user_id', $user_id)
        //     ->where('product_id', $product_id)
        //     ->delete();

        // if ($deleted) {
        //     // The wish with the specified user_id and product_id has been deleted successfully.
        // } else {
        //     // No matching wish was found.
        // }
    }

    public function wishproduct($id)
    {
        $product = Product::find($id);
        $wish = session()->get('wish');

        $wish[] = [
            "id" => $product->id,
            "name" => $product->name,
            "price" => $product->price,
            "image" => $product->image,
        ];

        session()->put('wish', $wish);
        return redirect()->back()->with('success', 'Product added to wish list');
    }
}
