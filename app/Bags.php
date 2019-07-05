<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bags extends Model
{
    //
    protected  $primaryKey = 'b_id';
    protected $fillable = [
        'c_id', 'address', 'tot_cost', 'status',
    ];
}
