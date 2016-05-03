<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];
}
