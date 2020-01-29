<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;
use App\Category;
use App\Status;
use App\WaysOfPayment;
use DateTime;


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
<<<<<<< HEAD
=======

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
>>>>>>> Stats_Mongodb_JS
        

        $costs=Cost::where('users', $id)->where('status', 'paye')->get();   
        $arrayCosts=array();

        foreach(json_decode($costs) as $cost) {

            preg_match('~(.*?)-~', $cost->date, $annee);
            preg_match('~-(.*?)-~', $cost->date, $mois);
            for( $i = 1; $i <= 12 ; $i++  )
            {
                if((int)$mois[1] == $i)
                {
                    $dateObj   = DateTime::createFromFormat('!m', $i);
                    $monthName = $dateObj->format('F');

                    $arrayCosts[$annee[1]][$monthName][] = $cost->price; 
                    
                    uksort($arrayCosts[$annee[1]], function($a1, $a2) {
                        $time1 = strtotime($a1);
                        $time2 = strtotime($a2);
                
                        return $time1 - $time2;
                    });

                }
                
            } 
        }

<<<<<<< HEAD
        return view('home',compact('arrayCosts'));
=======
        $max= max($countJan, $countFev, $countMar, $countAvr, $countMai, $countJui, $countJuil, $countAou, $countSep, $countOct, $countNov, $countDec);

        return view('home',compact('max','countJan', 'countFev', 'countMar', 'countAvr', 'countMai', 'countJui', 'countJuil', 'countAou', 'countSep', 'countOct', 'countNov', 'countDec'));
>>>>>>> Stats_Mongodb_JS
    }
}
