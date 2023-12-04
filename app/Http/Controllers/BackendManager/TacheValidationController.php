<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use App\Models\TacheHistory;
use Illuminate\Http\Request;
use App\Models\Tache ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TacheValidationController extends Controller
{
    
    public function index(){
        //$tache = Tache::where('etat_id', 3)->get();
        //$user_id = Auth::id();

        $group_id = Auth::user()->group_id;
        
        $taches = DB::table('users as U')
        ->join('tache as T', 'U.id', '=', 'T.user_id')
        ->join('etat as E', 'T.etat_id', '=', 'E.id')
        ->where('U.group_id', '=', $group_id)
        ->whereNotIn('U.id', function ($query) {
            $query->select('user_id')->from('manager');
        })
        ->whereDate('T.dateCreation', now()->toDateString())
        ->select('U.name as tache_user_name', 'T.description as tache_description','T.id as tache_id', 'T.dateCreation as tache_dateCreation', 'E.nom as etat_name')
        ->get();

        //dd($notif);
       
        return view("BackendManager.Validation",['taches'=>$taches]);
    }

    public function validateTache($tacheId)
    {

        $tache = Tache::findOrFail($tacheId);
        
        TacheHistory::create([
            'description' => $tache->description,
            'dateCreation' => $tache->dateCreation,
            'dateRealisationFinal' => $tache->dateRealisationFinal,
            'user_id' => $tache->user_id,
            'etat_id' => $tache->etat_id,
        ]);


        $tache->delete();

        return redirect()->route('validationp')->with('success', 'La tâche a été validée avec succès.');
    }

}