<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairstylist_availabilities extends Model
{
    protected $table = 'hairstylist_availabilities';

    protected $fillable = [
        'hairstylist_id',
        'day',
        'start_time',
        'end_time',
    ];

    public function hairStylesDetails()
    {
        return $this->belongsTo(HairStylesDetails::class);
    }
}
