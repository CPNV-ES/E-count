<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Categories extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'categories';
    
    protected $fillable = [
        'name'
    ];
}
