<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;
use App\Category;
use App\Status;
use App\WaysOfPayment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->_id;
        $costsArray = [];
        $costs=Cost::where('users', $id)->get();
       
        foreach(json_decode($costs) as $cost) {
            $costsArray[] = Array(
                "id" => $cost->_id,
                "date" => $cost->date,
                "description" => $cost->description,
                "price" => $cost->price,
                "status" => Status::where('slug', $cost->status)->value('name'),
                "waysOfPayment" => WaysOfPayment::where('slug', $cost->waysOfPayment)->value('name'),
                "category" => Category::where('slug', $cost->category)->value('name')
            );     
        }  

        return view('home',compact('costsArray'));
    }
}
