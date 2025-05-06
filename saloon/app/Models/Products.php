<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title',
        'product_category_id',
        'short_description',
        'description',
        'price',
        'discount_price',
        'image',
        'sort_order',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_slug',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
