<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'sub_sub_category_id',
        'enterprise_id',
        'name',
        'slug',
        'price',
        'quantity',
        'description',
        'sku',
        'code',
        'discount',
        'image',
        'status',
    ];

    protected static $product;

    public static function createOrUpdate($request, $id = null)
    {
        Product::updateorcreate(
            ['id' => $id],
            [
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'sub_sub_category_id' => $request->sub_sub_category_id,
                'enterprise_id' => $request->enterprise_id,
                'name' => $request->name,
                'slug' => str_replace(' ', '-', $request->name),
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'sku' => $request->sku,
                'code' => $request->code,
                'discount' => $request->discount,
                'image' => Helper::uploadFile($request->file('image'), 'product', isset($id) ? Product::find($id)->image : null),
                'status' => $request->status,
            ]
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class);
    }

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class);
    }

}
