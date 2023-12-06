<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DemandeDeConges ;
use Illuminate\Support\Facades\Auth;

class DemandeDeCongesController extends Controller
{
    //
    public function demandeDeConges(){
        return view("Backend.demandeDeConges");
    }
    public function ajouter_congés_traitement(Request $request){
        $request->validate([
            'subject' => 'required',
            'created_at' => 'required',
            'finished_at' => 'required',
            ]);
            $conges = new DemandeDeConges ();
            $conges->user_id = Auth::id();
            $conges->subject = $request->subject;
            $conges->created_at = $request->created_at;
            $conges->finished_at = $request->finished_at;
            $conges->save();
            return redirect('/demandeDeConges_hr')->with('status', 'ajout avec succés.');
       }
}
