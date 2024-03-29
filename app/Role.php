<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role_name', 'display_name', 'description',
    ];

    /**
     * The users that belong to the role.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
