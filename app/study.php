<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $table = 'studys';

    protected $fillable = [
        'student_id', 'cycle_id', 'deleted',
    ];
}
