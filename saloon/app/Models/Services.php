<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount_price',
        'image',
        'sort_order',
        'duration',
        'status',
    ];
}
