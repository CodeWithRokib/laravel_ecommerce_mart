<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'url',
        'status',
    ];

    protected static $banner;

    public static function createOrUpdate($request, $id = null)
    {
        Banner::updateorcreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'url' => $request->url,
                'image' => Helper::uploadFile($request->file('image'), 'banner', isset($id) ? Banner::find($id)->image : null),
                'status' => $request->status,
            ]
        );
    }
}
