<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cost;
use App\Categories;
use App\Status;
use App\WaysOfPayment;

class CostsController extends Controller
{
    
    public function show()
    {
        $id = auth()->user()->_id;
        $costsArray = [];
        $costs=Cost::where('users', $id)->get();

 
        foreach(json_decode($costs) as $cost) {
            
            $costsArray = Array(
                "id" => $cost->_id,
                "date" => $cost->date,
                "description" => $cost->description,
                "price" => $cost->price,
                "status" => Status::where('_id', $cost->status)->value('name'),
                "waysOfPayment" => WaysOfPayment::where('_id', $cost->waysOfPayment)->value('name'),
                "categories" => Categories::where('_id', $cost->categories)->value('name')
            );     
        }  
        return view('costs.show',compact('costsArray'));
    }

    public function create()
    {
        return view('costs.create');
    }
}
