<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzas extends Model
{
    //
    protected  $primaryKey = 'p_id';
    protected $fillable = [
        'p_name', 'type', 'crust', 'cheese', 'mrp', 'qty_avail',
    ];
}
