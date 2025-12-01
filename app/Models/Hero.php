<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'cv_file',
        'profile_image',
        'open_to_work',
    ];
}
