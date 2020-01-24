<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class WaysOfPayment extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'waysOfPayments';
    
    protected $fillable = [
        'name'
    ];


}