<?php

namespace App\Http\Controllers\BackendManager;
use App\Models\Tache ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationsMController extends Controller
{
    //
    public function notifications(){
        $tache = Tache::where('etat_id', 3)->get();
       
        return view("BackendManager.notifications",compact ('tache'));
    }
    
    public function  valider_tache($id){
       
        $tache = Tache::findOrFail($id);

        // Update the etat_id to 4
        $tache->update(['etat_id' => 4]);

        // Redirect back or to another page
        session()->flash('success', 'Task validated successfully');

        // Redirect back or to another page
        return redirect()->back();

    }
    public function  refuser_tache($id){
        $tache = Tache::findOrFail($id);

        // Update the etat_id to 4
        $tache->update(['etat_id' => 5]);

        session()->flash('success', 'Task refused successfully');

        // Redirect back or to another page
        return redirect()->back();
     
    }
}
