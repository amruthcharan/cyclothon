<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cyclothon extends Model
{
    protected $fillable = [
        'name', 'class', 'category', 'cycle_type', 'status', 'price'
    ];
}
