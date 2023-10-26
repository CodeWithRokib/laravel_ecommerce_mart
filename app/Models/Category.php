<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    protected static $category;

    public static function createOrUpdate($request, $id = null)
    {
        Category::updateOrCreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'image' => Helper::uploadFile($request->file('image'), 'category', isset($id) ? Category::find($id)->image : null),
                'status' => $request->status,
            ]
        );
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function subSubCategory()
    {
        return $this->hasMany(SubSubCategory::class);
    }
}
