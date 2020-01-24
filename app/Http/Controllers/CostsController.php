<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cost;
use App\Category;
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
    
        return view('costs.show',compact('costsArray'));
    }
    
    public function updatepay($id)
    {
        $costs=Cost::find($id);
        $costs->status = 'paye';
        $costs->save();
        return redirect(route('costs.show'))->with('paye', 'Vous avez changé le statut à "Payé"');
    }

    public function updatetopay($id)
    {
        $costs=Cost::find($id);
        $costs->status = 'a_payer';
        $costs->save();
        return redirect(route('costs.show'))->with('a_payer', 'Vous avez changé le statut à "À payer"');
    }
   

    public function create()
    {
        return view('costs.create');
    }
}
