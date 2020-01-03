<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
