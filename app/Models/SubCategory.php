<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'status',
    ];

    protected static $subCategory;

    public static function createOrUpdate($request, $id = null)
    {
        SubCategory::updateorCreate(
            ['id' => $id],
            [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => str_replace(' ', '-', $request->name),
                'image' => Helper::uploadFile($request->file('image'), 'sub-category', isset($id) ? SubCategory::findOrFail($id)->image : null),
                'status' => $request->status,
            ]
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subSubCategory()
    {
        return $this->hasMany(SubSubCategory::class);
    }
}
