<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternationalController extends Controller
{
    //

    public function accord_doubl_diplome(){
        
        return view('international.accord_doubl_diplome');
    }

    public function france(){
        
        return view('international.france');
    }
    
    public function Gabon(){
        
        return view('international.Gabon');
    }

    public function USA(){
        
        return view('international.USA');
    }

    public function Canada(){
        
        return view('international.Canada');
    }   

    public function contacts(){
        
        return view('international.contacts');
    }  
    
    public function stage_emploi(){
        
        return view('international.stage_emploi');
    }

    public function noscampus(){
        
        return view('international.noscampus');
    }

    public function accord_triple_diplome(){
        
        return view('international.accord_triple_diplome');
    }
    
    
    
    
    
}
