<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'type',
        'name',
        'slug',
        'sku',
        'category',
        'status',
        'price',
        'rent_price',
        'billing_period',
        'best_for',
        'short_description',
        'description',
        'features',
        'specifications',
        'image_path',
    ];

    protected $casts = [
        'features' => 'array',
        'specifications' => 'array',
        'price' => 'float',
        'rent_price' => 'float',
    ];
}
