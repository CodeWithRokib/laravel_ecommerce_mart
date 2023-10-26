<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    protected static $roleType;

    public static function createOrUpdate($request, $id = null)
    {
        RoleType::updateorCreate(
            ['id' => $id],
            [
                'name' => $request->name,
                'status' => $request->status
            ]
        );
    }
}
