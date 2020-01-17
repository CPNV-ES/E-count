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
        $costs=Cost::where('users.id', $id)->get();

        foreach(json_decode($costs) as $cost) {
            
            $costsArray[] = Array(
                "id" => $cost->_id,
                "date" => $cost->date,
                "description" => $cost->description,
                "price" => $cost->price,
                "status" => Status::where('_id', $cost->status->id)->value('name'),
                "waysOfPayment" => WaysOfPayment::where('_id', $cost->waysOfPayment->id)->value('name'),
                "categories" => Categories::where('_id', $cost->categories->id)->value('name')
            );
            
        }
       
        return view('costs.show',compact('costsArray'));
    }

    public function create()
    {
        return view('costs.create');
    }
}
