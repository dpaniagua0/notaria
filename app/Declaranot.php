<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Declaranot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_number', 'upload_date','sign_date', 'type', 'street', 'colony', 'state',
        'zip_code', 'description', 'exception', 'iva_quote', 'isr_quote', 'price',
        'concepto_id', 'user_id'
    ];


}
