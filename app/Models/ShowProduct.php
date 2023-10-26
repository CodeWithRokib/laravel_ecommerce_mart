<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'image',
        'status',
    ];

    protected static $showProduct;

    public static function createOrUpdate($request, $id = null)
    {
        ShowProduct::updateorcreate(
            ['id' => $id],
            [
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'image' => Helper::uploadFile($request->file('image'), 'showProduct', isset($id) ? ShowProduct::find($id)->image : null),
                'status' => $request->status,
            ]
        );
    }
}
