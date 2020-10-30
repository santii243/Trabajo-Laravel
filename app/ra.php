<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ra extends Model
{
    protected $table = 'ras';

    protected $fillable = [
        'number', 'description', 'module_id', 'deleted',
    ];
}
