<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'about',
        'website',
        'street',
        'city',
        'postal_code',
        'country',
        'logo',
        'favicon',
    ];

    protected static $company;

    public static function createOrUpdate($request, $id = null)
    {
        Company::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'about' => $request->about,
            'website' => $request->website,
            'street' => $request->street,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country' => $request->country,
            'logo' => Helper::uploadFile($request->file('logo'), 'company', isset($id) ? Company::find($id)->logo : null),
            'favicon' => Helper::uploadFile($request->file('favicon'), 'company', isset($id) ? Company::find($id)->favicon : null),
        ]);
    }
}
