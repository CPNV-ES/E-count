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
        

        $costs=Cost::where('users', $id)->where('status', 'paye')->get();   
        $arrayCosts=array();
        $maximum=array();

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
                    $maximum[$annee[1]][] = $cost->price;

                    uksort($arrayCosts[$annee[1]], function($a1, $a2) {
                        $time1 = strtotime($a1);
                        $time2 = strtotime($a2);
                
                        return $time1 - $time2;
                    });

                }
                
            } 
        }
        

        return view('home',compact('arrayCosts','maximum'));
    }
}
