<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Status extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'status';
    
    protected $fillable = [
        'name'
    ];

    public function cost()
    {
        return $this->belongsToMany('App\Cost');
    }
}