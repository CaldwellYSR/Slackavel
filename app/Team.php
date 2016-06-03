<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable = ['name', 'slug'];

    public function users() {
        return $this->hasMany(User);
    }
    
}
