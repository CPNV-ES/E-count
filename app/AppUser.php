<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AppUser extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';

    protected $fillable = [
        'name', 'lastname'
    ];

    public function car(){
        return $this->hasMany('App\Car', null, 'iduser');
    }
}
