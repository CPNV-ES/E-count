<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostsController extends Controller
{
    
    public function show()
    {
        return view('costs.show');
    }

    public function create()
    {
        return view('costs.create');
    }
}
