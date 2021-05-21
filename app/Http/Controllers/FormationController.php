<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    //
    public function offre_formation(){
        
        return view('formation.offre_formation');
    }

    public function doublediplom(){
        
        return view('formation.doublediplom');
    }

    public function formation_continue(){
        
        return view('formation.formation_continue');
    }

    public function diplome_français(){
        
        return view('formation.diplome_français');
    }

    public function diplomeivoirien(){
        
        return view('formation.diplomeivoirien');
    }
    
    public function echange_etudiant(){
        
        return view('formation.echange_etudiant');
    }

    public function formationenseignant(){
        
        return view('formation.formationenseignant');
    }

    public function parten_inter(){
        
        return view('formation.parten_inter');
    }

    public function faculte_science_eco(){
        
        return view('formation.faculte_science_eco');
    }

    public function faculte_science_juridique(){
        
        return view('formation.faculte_science_juridique');
    }

    public function licence(){
        
        return view('formation.licence');
    }
    
    public function master(){
        
        return view('formation.master');
    }

    public function mba_ispa(){
        
        return view('formation.mba_ispa');
    }

    public function recrut_inter(){
        
        return view('formation.recrut_inter');
    }

    
    
    
}
