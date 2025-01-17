<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tache ;
use App\Models\Etat;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TimesheetempController extends Controller
{


    public function timesheet()
    {   
        $user_id = Auth::id();
   
        $currentDate = Carbon::now();
        $startOfWeek = $currentDate->startOfWeek();         
        $day = $startOfWeek;
        $daysOfWeek[0] = $day->format('Y-m-d');    

        $res[0] = ($taches = DB::table('tache')
                ->join('etat', 'tache.etat_id', '=', 'etat.id')
                ->select('tache.id', 'description', 'dateCreation', 'dateRealisationFinal', 'etat.nom as etat_nom','tache.created_at as tache_created_at','tache.updated_at as tache_updated_at')
                ->where('user_id', '=', $user_id)
                ->Where('dateCreation','=',$daysOfWeek[0])
                ->get());

        for ($i = 1; $i < 7; $i++) {
            $d = $day->addDay();
            $daysOfWeek[] = $day->format('Y-m-d');
            $res[] = ($taches = DB::table('tache')
                    ->join('etat', 'tache.etat_id', '=', 'etat.id')
                    ->select('tache.id', 'description', 'dateCreation', 'dateRealisationFinal', 'etat.nom as etat_nom','tache.created_at as tache_created_at','tache.updated_at as tache_updated_at')
                    ->where('user_id', '=', $user_id)
                    ->Where('dateCreation','=',$d)
                    ->get());
        }    

        return view('BackendEmployee.timesheet', [
            'tache' => $res,
            'semaine' => $daysOfWeek
        ]);
    }


    public function  ajouter_tache(){
        $etats = Etat::all();
        return view('BackendEmployee.timesheetAjouter', compact('etats'));
    }


    public function  ajouter_tache_jour($dateCreation){
        $etats = Etat::all();
        return view('BackendEmployee.timesheetAjouter', ['etats' => $etats, 'dateCreation' => $dateCreation]);
    }
    

    public function ajouter_tache_traitement(Request $request)
    {
        //dd("emp ",$request);

        $request->validate([
            'description' => 'required',
            'etat_id' => 'required',
        ]);
        
        $request['user_id'] = Auth::id();
        $request['dateCreation'] = now()->format('Y-m-d');
        Tache::create($request->all());
        
        return redirect('/user/ajouter')->with('status', 'ajout avec succés.');  
    }

    /*
    public function update_tache( $id)
    {
        $tache=Tache::find($id);
        $etats = Etat::all();
        return view('BackendEmployee.timesheetupdate', ['tache' => $tache, 'etats' => $etats ]);
    }
    */
    public function update_tache(Request $request)
    {
        $request->validate([
            'id' => 'required',
            ]);
        //dd(Tache::find($request->id));
        $tache=Tache::find($request->id);
        //dd($tache);
        $etats = Etat::all();
        return view('BackendManager.timesheetupdate', ['tache' => $tache, 'etats' => $etats ]);
        //return view('BackendManager.timesheetUpdateView', ['tache' => $tache, 'etats' => $etats ]);
    }

    public function update_tache_traitement(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'etat_id' => 'required',
            ]);

        $tache = Tache::find($request->id);
    
        if ($tache->user_id == Auth::id()) {
            $tache->update($request->all());
            return redirect('/timesheet')->with('status', 'modification avec succés.');
        } 
        else 
        {
            return redirect('/timesheet')->with('error', 'Vous n\'êtes pas autorisé à mettre à jour cette tâche.');
        }
    }

    public function delete_tache( $id)
    {
        $tache=Tache::find($id);
        $tache->delete();
        return redirect('/timesheet')->with('status', 'suppression avec succés.');
    }


}
