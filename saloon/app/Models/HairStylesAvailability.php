<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HairStylesAvailability extends Model
{
    protected $table = 'hair_styles_availabilities';

    protected $fillable = [
        'hair_styles_details_id',
        'day',
        'start_time',
        'end_time',
    ];

    public function hairStylesDetails()
    {
        return $this->belongsTo(HairStylesDetails::class);
    }
}
