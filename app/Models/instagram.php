<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class instagram extends Model
{
    protected $table = 'instagrams';

    protected $fillable = [
        'instagram_link'
    ];
}
