<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname',
        'firstname',
        'professionnal',
        'civility',
        'company',
        'address',
        'addressbis',
        'bp',
        'postal',
        'city',
        'phone',
        'country_id',
    ];
}
