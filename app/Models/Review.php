<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
        'product_id',
        'rating',
        'review',
    ];

    protected static $review;

    public static function createOrUpdate($request, $id = null)
    {
        Review::updateorcreate(
            ['id' => $id],
            [
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'product_id' => $request->product_id,
                'rating' => $request->rating,
                'review' => $request->review,
            ]
        );
    }
}
