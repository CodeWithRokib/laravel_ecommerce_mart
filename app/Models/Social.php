<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'icon',
        'status',
    ];

    protected static $social;

    public static function createOrUpdate($request, $id = null)
    {
        Social::updateorcreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'link' => $request->link,
                'icon' => $request->icon,
                'status' => $request->status,
            ]
        );
    }
}
