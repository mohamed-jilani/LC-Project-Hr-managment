<?php

namespace App\Http\Controllers\BackendManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DemandeDeConges ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CongesHistory ;

class congesValidationController extends Controller
{
    public function validationConges(){
        $group_id = Auth::user()->group_id;
    
        $conges = DB::table('users as U')
            ->join('DemandeDeConges as T', 'U.id', '=', 'T.user_id')
            ->where('U.group_id', '=', $group_id)
            ->whereNotIn('U.id', function ($query) {
                $query->select('user_id')->from('manager');
            })
            ->where('U.id', '!=', Auth::user()->id) // Exclude the current user's request
            //->whereDate('T.dateCreation', now()->toDateString())
            ->select('U.name as tache_user_name', 'T.subject as tache_description', 'T.id as tache_id', 'T.created_at as tache_dateCreation', 'T.finished_at as tache_datefinish')
            ->get();
    
        return view("BackendManager.validationConges", ['taches' => $conges]);
    }
    public function validateConges($tacheId)
    {

        $tache = DemandeDeConges::findOrFail($tacheId);
        
        CongesHistory::create([
            'subject' => $tache->subject,
            'created_at' => $tache->created_at,
            'finished_at' => $tache->finished_at,
            'user_id' => $tache->user_id,
            'etat' => 1
            
        ]);


        $tache->delete();

        return redirect()->route('validationc')->with('success', 'La tâche a été validée avec succès.');
    }
    public function refuserConges($tacheId)
    {

        $tache = DemandeDeConges::findOrFail($tacheId);
        
        CongesHistory::create([
            'subject' => $tache->subject,
            'created_at' => $tache->created_at,
            'finished_at' => $tache->finished_at,
            'user_id' => $tache->user_id,
            'etat' => 2
            
        ]);


        $tache->delete();

        return redirect()->route('validationc')->with('success', 'La tâche a été validée avec succès.');
    }
 
        
    }

