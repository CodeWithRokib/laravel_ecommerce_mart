<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'roletype_id',
        'permission_id',
        'status',
    ];

    protected static $role;

    public static function createOrUpdate($request, $id = null)
    {
        Role::updateorcreate(
            ['id' => $id],
            [
                'user_id' => $request->user_id,
                'roletype_id' => $request->roletype_id,
                'permission_id' => $request->permission_id,
                'status' => $request->status,
            ]
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roletype()
    {
        return $this->belongsTo(RoleType::class);
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class);
    }
}
