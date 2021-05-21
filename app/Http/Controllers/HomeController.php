<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        
        return view('client.home');
    }

    public function presentation(){
        
        return view('client.presentation');
    }

    public function gouvernance(){
        
        return view('client.gouvernance');
    }

    public function communaute(){
        
        return view('client.communaute');
    }

    public function presentation_ecole(){
        
        return view('client.presentation_ecole');
    }

    public function businesschool(){
        
        return view('client.businesschool');
    }
    
    public function esiit(){
        
        return view('client.esiit');
    }

    public function ispd(){
        
        return view('client.ispd');
    }

    public function isbtp(){
        
        return view('client.isbtp');
    }

    public function eda(){
        
        return view('client.eda');
    }

    public function ivpci(){
        
        return view('client.ivpci');
    }

    public function nosfacultés(){
        
        return view('client.nosfacultés');
    }
    



    


}
