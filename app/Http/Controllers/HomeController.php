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

        $countJan=0;
        $countFev=0;
        $countMar=0;
        $countAvr=0;
        $countMai=0;
        $countJui=0;
        $countJuil=0;
        $countAou=0;
        $countSep=0;
        $countOct=0;
        $countNov=0;
        $countDec=0;
        $id = auth()->user()->_id;

        //janvier
        $costsJan=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-01-01')
                        ->where('date', '<=', '2020-01-31')
                        ->get();       
        foreach(json_decode($costsJan) as $cost) {
            $countJan += $cost->price;                
        }
        //février
        $costsFev=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-02-01')
                        ->where('date', '<=', '2020-02-29')
                        ->get();       
        foreach(json_decode($costsFev) as $cost) {
            $countFev += $cost->price;                
        }
        //mars
        $costsMar=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-03-01')
                        ->where('date', '<=', '2020-03-31')
                        ->get();       
        foreach(json_decode($costsMar) as $cost) {
            $countMar += $cost->price;                
        }
        //avris
        $costsAvr=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-04-01')
                        ->where('date', '<=', '2020-04-30')
                        ->get();       
        foreach(json_decode($costsAvr) as $cost) {
            $countAvr += $cost->price;                
        }
        //mai
        $costsMai=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-05-01')
                        ->where('date', '<=', '2020-05-31')
                        ->get();       
        foreach(json_decode($costsMai) as $cost) {
            $countMai += $cost->price;                
        }
        //juin
        $costsJui=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-06-01')
                        ->where('date', '<=', '2020-06-31')
                        ->get();       
        foreach(json_decode($costsJui) as $cost) {
            $countJui += $cost->price;                
        }
        //juillet
        $costsJuil=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-07-01')
                        ->where('date', '<=', '2020-07-31')
                        ->get();       
        foreach(json_decode($costsJuil) as $cost) {
            $countJuil += $cost->price;                
        }
        //aout
        $costsMar=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-08-01')
                        ->where('date', '<=', '2020-08-31')
                        ->get();       
        foreach(json_decode($costsMar) as $cost) {
            $countAou += $cost->price;                
        }
        //septembre
        $costsSep=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-09-01')
                        ->where('date', '<=', '2020-09-31')
                        ->get();       
        foreach(json_decode($costsSep) as $cost) {
            $countSep += $cost->price;                
        }
        //octobre
        $costsOct=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-10-01')
                        ->where('date', '<=', '2020-10-31')
                        ->get();       
        foreach(json_decode($costsOct) as $cost) {
            $countOct += $cost->price;                
        }
        
        //novembre
        $costsNov=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-11-01')
                        ->where('date', '<=', '2020-11-31')
                        ->get();       
        foreach(json_decode($costsNov) as $cost) {
            $countNov += $cost->price;                
        }
        //décembre
        $costsDec=Cost::where('users', $id)
                        ->where('status', 'paye')
                        ->where('date', '>=', '2020-12-01')
                        ->where('date', '<=', '2020-12-31')
                        ->get();       
        foreach(json_decode($costsDec) as $cost) {
            $countDec += $cost->price;                
        }

        $max= max($countJan, $countFev, $countMar, $countAvr, $countMai, $countJui, $countJuil, $countAou, $countSep, $countOct, $countNov, $countDec);

        return view('home',compact('max','countJan', 'countFev', 'countMar', 'countAvr', 'countMai', 'countJui', 'countJuil', 'countAou', 'countSep', 'countOct', 'countNov', 'countDec'));
    }
}
