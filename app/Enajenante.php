<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enajenante extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'rfc','curp','declaranot_id'
    ];

    public function declaranot()
    {
        return $this->belongsTo('App\Declaranot');
    }
}
