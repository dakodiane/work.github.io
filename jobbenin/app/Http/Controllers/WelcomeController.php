<?php

namespace App\Http\Controllers;

use index;
use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Récupération des offres
        $offres = Offre::with('user')
        ->whereHas('user', function ($query) {
            $query->where('active', '=', 1);
        })
        ->get();

        // Récupération des freelancers avec leur photo
        $freelancers = User::where('role', 'freelancer')
                            ->select('id', 'name','service_freelancer', 'photo_freelancer')
                            ->where('active',1)
                            ->get();
    
        //dd($freelancers);
                
        // Affichage de la vue avec les données récupérées
        return view('welcome', [
            'freelancers' => $freelancers,
            'offres'=>$offres,
        ]);
    }
    
   
  
   
}


