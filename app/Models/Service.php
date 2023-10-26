<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'date',
        'location'
    ];

    protected static $service;

    public static function createOrUpdate($request, $id = null)
    {
        Service::updateorCreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => Helper::uploadFile($request->file('image'), 'services', isset($id) ? Service::find($id)->image : null),
                'date' => $request->date,
                'location' => $request->location
            ]
        );
    }
}
