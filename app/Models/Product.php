<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'libelle', 'price', 'quantity', 'weight', 'active', 'quantity_alert', 'image', 'description',
    ];
}
