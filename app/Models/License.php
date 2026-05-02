<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    protected $table = 'licence';

    protected $fillable = [
        'mac_number',
        'activation_key',
        'product_slug',
        'product_name',
        'last_verified_at',
    ];

    protected $casts = [
        'last_verified_at' => 'datetime',
    ];
}
