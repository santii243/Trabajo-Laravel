<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task_done extends Model
{
    protected $table = 'task_done';

    protected $fillable = [
        'student_id', 'task_id', 'mark', 'deleted',
    ];
}
