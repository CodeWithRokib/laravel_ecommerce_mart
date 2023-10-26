<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'section',
        'route',
        'controller',
        'icon',
        'status'
    ];

    protected static $permission;

    public static function createOrUpdate($request, $id = null)
    {
        Permission::updateorCreate(
            ['id' => $id],
            [
                'section' => $request->section,
                'route' => $request->route,
                'controller' => $request->controller,
                'icon' => $request->icon,
                'status' => $request->status,
            ]
        );
    }
}
