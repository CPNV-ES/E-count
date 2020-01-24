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

}