<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class HairStylesDetails extends Model implements HasMedia
{
    protected $table = 'hair_styles_details';
    use InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'contact_number',
        'experience',
        'photo',
        'status',
        'description',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
