<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ce extends Model
{
    protected $table = 'ces';

    protected $fillable = [
        'ra_id', 'task_id', 'word', 'description', 'mark', 'deleted',
    ];
}
