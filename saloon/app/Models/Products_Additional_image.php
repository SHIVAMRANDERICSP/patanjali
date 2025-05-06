<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_Additional_image extends Model
{
    protected $table = 'products_additional_images';

    protected $fillable = [
        'product_id',
        'image',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
