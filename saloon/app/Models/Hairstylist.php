<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairstylist extends Model
{
    protected $table = 'hairstylists';


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
