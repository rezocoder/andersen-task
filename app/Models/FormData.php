<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
