<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adquiriente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'rfc','curp', 'declaranot_id'
    ];
}
