<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Declaranot extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file_number', 'upload_date','sign_date', 'type', 'street', 'colony', 'state','district',
        'zip_code', 'description', 'exception', 'iva_quote', 'isr_quote', 'price',
        'concepto_id', 'user_id',
        'street2','colony2','district2','state2','zip_code2'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'sign_date', 'upload_date'];


    public function enajenantes()
    {
        return $this->hasMany('App\Enajenante');
    }

    public function adquirientes()
    {
        return $this->hasMany('App\Adquiriente');
    }

    public function getUploadDateAttribute($date){
        $new_date = date('Y-m-d',strtotime($date));
        return Carbon::createFromFormat('Y-m-d', $new_date)->toDateString();
    }

    public function getSignDateAttribute($date){
        $new_date = date('Y-m-d',strtotime($date));
        return Carbon::createFromFormat('Y-m-d', $new_date)->toDateString();
    }

}
