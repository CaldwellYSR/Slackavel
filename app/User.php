<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'team_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team() {
        return $this->belongsTo();
    }

    public function channels() {
        return $this->belongsToMany('App\Channel', 'user_channels');
    }

    public function messages() {
        return $this->hasMany('App\Message');
    }

}
