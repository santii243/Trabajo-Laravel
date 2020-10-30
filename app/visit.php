<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'tutor_c_id', 'enterpise_id', 'date', 'kms', 'accepted', 'deleted',
    ];
}
