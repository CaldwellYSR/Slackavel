<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model {

    protected $fillable = ['name', 'slug', 'description'];

    public function users() {
        $this->belongsToMany('App\User', 'user_channels');
    }

    public function messages() {
        $this->hasMany('App\Message');
    }

}
