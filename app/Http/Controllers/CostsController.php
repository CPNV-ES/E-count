<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;

class CostsController extends Controller
{
    public function create(){
        return view('costs.create');
    }

    public function store(Request $request){
        $cost = new Cost();
        $cost->date =           $request->get('date');
        $cost->description =    $request->get('description');
        $cost->categories =     $request->get('categories');
        $cost->price =          $request->get('price');
        $cost->waysOfPayment =  $request->get('waysOfPayment');
        $cost->status =         $request->get('status');
        $cost->users =          $request->get('users');
        $cost->save();
        return view('costs.create');
    }
}
    