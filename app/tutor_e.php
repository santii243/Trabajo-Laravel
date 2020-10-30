<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutor_e extends Model
{
    protected $table = 'tutor_es';

    protected $fillable = [
        'name', 'firstname', 'email', 'phone', 'enterprise_id', 'deleted',
    ];
}
