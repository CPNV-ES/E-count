<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;
use App\Category;
use App\Status;
use App\WaysOfPayment;

class CostsController extends Controller
{
    public function create(){
        $categories = Category::all();
        $status = Status::all();
        $waysOfPayment = WaysOfPayment::all();
        return view('costs.create')->with(compact('categories', 'status', 'waysOfPayment'));
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
        return redirect(route('costs.create'))->with('create', 'Dépense créée !');
    }
}
    