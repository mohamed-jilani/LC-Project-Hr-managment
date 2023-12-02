<?php

namespace App\Http\Controllers\Backend;
use App\Models\Etat;
use App\Models\Tache ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TimesheetController extends Controller
{



    //
  /*  public function timesheet()
{   
    $currentDate = now();
    $startOfWeek = $currentDate->startOfWeek(); 
    
    $day = $startOfWeek;
    $daysOfWeek[0] = $day->format('Y-m-d');    

    for ($i = 1; $i < 8; $i++) {
        $day->addDay();
        $daysOfWeek[] = $day->format('Y-m-d');    
    }    

    $taches = Tache::with('etat') // Charger la relation etat pour éviter les requêtes supplémentaires
        ->whereBetween('dateRealisationFinal', [$startOfWeek, $day]) // Changer pour utiliser la colonne correcte
        ->get();

    return view('Backend.timesheet', [
        'tache' => $taches,
        'semaine' => $daysOfWeek
    ]);
}*/
    public function timesheet()
    {   
        $user_id = Auth::id();
        $res = [];

        
/*
        $taches2 = DB::table('tache')
        ->join('etat', 'tache.etat_id', '=', 'etat.id')
        ->select('tache.*', 'etat.nom as etat_nom')
        ->groupBy(DB::raw("DATE(tache.dateCreation)")) // Group by Y-m-d
        ->get();
 */       
   
        $currentDate = Carbon::now();
        $startOfWeek = $currentDate->startOfWeek(); 
        
        $day = $startOfWeek;
        $daysOfWeek[0] = $day->format('Y-m-d');    

        for ($i = 1; $i < 8; $i++) {
            $day->addDay();
            $daysOfWeek[] = $day->format('Y-m-d');
            $res = ($taches = DB::table('tache')->join('etat', 'tache.etat_id', '=', 'etat.id')->where('tache.user_id', '=', $user_id)->where('tache.dateCreation', '=', $day)->select('tache.*', 'etat.nom as etat_nom')->get());    
        }    
        //dd($res);
        return view('Backend.timesheet', [
            'tache' => $taches,
            'semaine' => $daysOfWeek

        ]);
    }
    
    public function timesheet2()
    {   
        $taches = DB::table('tache')
        ->join('etat', 'tache.etat_id', '=', 'etat.id')
        ->select('tache.*', 'etat.nom as etat_nom')
        ->groupBy(DB::raw("DATE(tache.dateCreation)")) // Group by Y-m-d
        ->get();

        $currentDate = Carbon::now();
        $startOfWeek = $currentDate->startOfWeek(); 
        
        $day = $startOfWeek;
        $daysOfWeek[0] = $day->format('Y-m-d');    

        for ($i = 1; $i < 8; $i++) {
            $day->addDay();
            $daysOfWeek[] = $day->format('Y-m-d');    
        }    

        return view('Backend.timesheet', [
            'tache' => $taches,
            'semaine' => $daysOfWeek

        ]);
    }

    public function  ajouter_tache(){
        $etats = Etat::all();
        //dd($etats);
        return view('Backend.timesheetAjouter', compact('etats'));
    }

    public function  ajouter_tache_jour($dateCreation){
        $etats = Etat::all();
        //dd($etats);
        return view('Backend.timesheetAjouter', ['etats' => $etats, 'dateCreation' => $dateCreation]);
    }
    


       public function ajouter_tache_traitement(Request $request){

        $request->validate([
            'description' => 'required',
            'etat_id' => 'required',
        ]);

        $dateCreation = $request->dateCreation;
        $request['user_id'] = Auth::id();

        Tache::create($request->all());

        return redirect('/ajouter')->with('status', 'ajout avec succés.');
       
    }


       public function update_tache( $id)
       {
        $tache=Tache::find($id);
        $etats = Etat::all();
        return view('Backend.timesheetupdate', ['tache' => $tache, 'etats' => $etats ]);
       }
       public function update_tache_traitement(Request $request){
        $request->validate([
            'description' => 'required',
            'etat_id' => 'required',
            ]);

            $tache = Tache::find($request->id);
            //dd($tache);

            if ($tache->user_id == Auth::id()) {
                $tache->update($request->all());
                return redirect('/backend/timesheet')->with('status', 'modification avec succés.');

            } else {
                // Gérer l'erreur si l'utilisateur n'est pas autorisé à mettre à jour cette tâche
                return redirect('/backend/timesheet')->with('error', 'Vous n\'êtes pas autorisé à mettre à jour cette tâche.');

            }

       }
       public function delete_tache( $id)
       {
        $tache=Tache::find($id);
        $tache->delete();
        return redirect('/backend/timesheet')->with('status', 'suppression avec succés.');
       }
}
