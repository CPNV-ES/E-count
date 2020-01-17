<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostsController extends Controller
{
    
    public function edit()
    {
        return view('costs.costsmanage');
    }
}
