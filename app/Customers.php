<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $fillable = [
        'c_name', 'email', 'phone', 'password',
    ];
}
