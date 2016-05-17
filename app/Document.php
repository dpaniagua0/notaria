<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Document extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'file_number', 'user_id', 'arrive_date', 'upload_date',
      'promoter_id', 'price','service_id','status','observations', 'client_name',
      'clg_archive', 'clg_register'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'arrive_date', 'upload_date'];

    public function getUploadDateAttribute($date){
        $new_date = date('Y-m-d',strtotime($date));
        return Carbon::createFromFormat('Y-m-d', $new_date)->toDateString();
    }

    public function getArriveDateAttribute($date){
        $new_date = date('Y-m-d',strtotime($date));
        return Carbon::createFromFormat('Y-m-d', $new_date)->toDateString();
    }
}

