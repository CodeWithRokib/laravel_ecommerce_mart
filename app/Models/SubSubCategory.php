<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        // 'category_id',
        'sub_category_id',
        'status',
    ];

    protected static $subSubCategory;

    public static function createOrUpdate($request, $id = null)
    {
        SubSubCategory::updateorCreate(
            ['id' => $id],
            [
                'name' => $request->name,
                // 'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
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
    
}
