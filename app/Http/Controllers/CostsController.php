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

    public function deletepay($id){
        $costtodelete=Cost::find($id);

        $costtodelete->delete();
        return redirect(route('costs.show'))->with('delete', 'Le coût a été supprimé');
    }

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
        $cost->category =     $request->get('categories');
        $cost->price =          $request->get('price');
        $cost->waysOfPayment =  $request->get('waysOfPayment');
        $cost->status =         $request->get('status');
        $cost->users =          $request->get('users');
        $cost->save();
        return redirect(route('costs.create'))->with('create', 'Dépense créée !');
    }

}

