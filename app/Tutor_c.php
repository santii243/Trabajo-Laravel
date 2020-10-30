<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor_c extends Model
{
    protected $table = 'tutor_cs';

    protected $fillable = [
        'name', 'firstname', 'email', 'phone', 'cycle_id', 'deleted',
    ];
    
}
