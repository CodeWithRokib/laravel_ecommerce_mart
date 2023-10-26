<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'bios',
        'image',
        'status',
    ];

    protected static $enterprise;

    public static function createOrUpdate($request, $id = null)
    {
        Enterprise::updateorcreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'bios' => $request->bios,
                'image' => Helper::uploadFile($request->file('image'), 'enterprise', isset($id) ? Enterprise::find($id)->image : null),
                'status' => $request->status,
            ]
        );
    }
}
