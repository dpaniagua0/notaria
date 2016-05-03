<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escritura extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'file_number', 'user_id', 'arrive_date', 'upload_date',
      'promoter_id', 'price','service_id','status','observations', 'owner'
    ];
}
