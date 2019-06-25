<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'address'
    ];
}
