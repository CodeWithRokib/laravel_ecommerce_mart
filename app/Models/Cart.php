<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'price',
        'subtotal'
    ];

    protected static $cart;


    public static function createOrUpdate($request, $id = null)
    {
        Cart::updateorcreate(
            [
                'id' => $id,
                'product_id' => $request->product_id,
                'user_id' => auth()->user()->id,
            ],
            [
                'quantity' => $request->quantity,
                'price' => $request->price,
                'subtotal' => $request->price * $request->quantity,
            ]
        );
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
