<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardPostulantController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }
     
        return view('dashboardpostulant')->with(['user' => $user, ]);
       
    }
    
    //Page Vos Offres
       
    public function vosoffres()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }
    
        $postulant = User::with(['postulers' => function ($query) {
            $query->where('visible', true);
        }, 'postulers.offre'])
            ->where('id', Auth::id())
            ->firstOrFail();
        
        $offres = $postulant->postulers->map(function ($postuler) {
            $offre = $postuler->offre;
            $statut = $postuler->statut;
        
            if (!$offre) {
                return null;
            }
        
            if ($offre->datfin < now()) {
                $statut = 'expirée';
            }
        
            return [
                'user' => $offre->user ?? null,
                'statut' => $statut,
                'id' => $offre->id ?? null,
            ];
        })->filter();
        
     
        return view('vosoffres')->with(['user' => $user, 'offres' => $offres]);
       
    }
    
    //Page ProfilPost
    public function profilpostulant()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }

        return view('profilpostulant')->with(['user' => $user]);

    
    }

    //M A J Des donnés de la Db

    public function update(Request $request, $id)
    { 
         $user = auth()->user();
   
        $user->name = $request->input('name');
        $user->email = $request->input('email');
          // Pour enregistrer les informations complèter par l'utilisateur
        $user->villeP = $request->input('villeP');
        $user->secteurP= $request->input('secteurP');
        $user->diplomeP = $request->input('diplomeP');
        
   
        $user->save();
    
        return redirect()->route('profilpostulant')->with('success', 'Informations mises à jour avec succès');
   
    }


    public function supprimerOffre($id) {
        $offre = Offre::find($id);
    
        DB::table('postulers')
            ->where('id_offre', $offre->id)
            ->update(['visible' => 0]);

        return redirect()->back()->with('success', 'Offre rendue non visible avec succès.');
    }

     public function recommandations()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->intended('connexion');
        }
    
        $offres = Offre::where(function ($query) use ($user) {
            $query->where(function ($query) use ($user) {
                $query->whereHas('user', function ($query) use ($user) {
                    $query->where('villeR', '=', $user->villeP);
                })->orWhere('secteurO', '=', $user->secteurP);
            })->orWhere(function ($query) use ($user) {
                $query->whereHas('user', function ($query) use ($user) {
                    $query->where('villeR', '=', $user->villeP);
                })->where('secteurO', '=', $user->secteurP);
            });
        })->get();
    
        return view('recommandation')->with(['user' => $user, 'offres' => $offres]);
}



       
}
    
    
    
    
    



