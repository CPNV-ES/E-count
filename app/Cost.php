<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cost extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'costs';
    
    protected $fillable = [
        'date', 'description','categories', 'price', 'waysOfPayment', 'status', 'users'
    ];

    public function users()
    {
        return $this->hasOne('App\User', 'users', 'id');
    }

    public function status()
    {
        return $this->hasMany('App\Status');
    }

    public function waysOfPayment()
    {
        return $this->hasMany('App\WaysOfPayment');
    }

    public function categories()
    {
        return $this->hasMany('App\Categories');
    }
}