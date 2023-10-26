<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrederDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'total',
        'status',
    ];

    protected static $orderDetails;

    public static function createOrUpdate($request, $id = null)
    {
        $cartid = implode(',', $request->cart_id);
        OrederDetails::updateorcreate(
            ['id' => $id],
            [
                'user_id' => $request->user_id,
                'cart_id' => $cartid,
                'total' => $request->total,
                'status' => $request->status,
            ]
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

}
