<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tache ;

class TimesheetempController extends Controller
{public function timesheet()
    {   
        return view('BackendEmployee.timesheet');
    }
    
    
    
      /* public function  ajouter_tache(){
        return view('Backend.timesheetAjouter');
       }
       public function ajouter_tache_traitement(Request $request){
        $request->validate([
            'description' => 'required',
            
            ]);
            $tache = new Tache ();
            $tache->description = $request->description;
            
            $tache->save();
            return redirect('/ajouter')->with('status', 'ajout avec succés.');
       }
       public function update_tache( $id)
       {
        $tache=Tache::find($id);
        return view('Backend.timesheetupdate', compact ('tache'));
       }
       public function update_tache_traitement(Request $request){
        $request->validate([
            'description' => 'required',
            
            ]);
            $tache = Tache::find($request->id);
            $tache->description = $request->description;
            
            $tache->update();
            return redirect('/timesheet')->with('status', 'modification avec succés.');
       }
       public function delete_tache( $id)
       {
        $tache=Tache::find($id);
        $tache->delete();
        return redirect('/timesheet')->with('status', 'suppression avec succés.');
       }*/
}

    
