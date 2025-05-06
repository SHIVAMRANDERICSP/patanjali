<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    protected $table = 'product_categories';

    protected $fillable = [
        'title',
        'description',
        'image',
        'sort_order',
        'status',
    ];

    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}
