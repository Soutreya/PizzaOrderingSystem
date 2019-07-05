<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable = [
        'b_id', 'id', 'name', 'p_id', 'qty', 'cost',
    ];
}
