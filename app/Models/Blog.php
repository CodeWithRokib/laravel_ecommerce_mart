<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];

    protected static $blog;

    public static function createOrUpdate($request, $id = null)
    {
        Blog::updateorcreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'description' => $request->description,
                'image' => Helper::uploadFile($request->file('image'), 'blog', isset($id) ? Blog::findOrFail($id)->image : null),
                'status' => $request->status,
            ]
        );
    }
}
