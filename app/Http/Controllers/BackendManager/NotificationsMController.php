<?php

namespace App\Http\Controllers\BackendManager;
use App\Models\Tache ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class NotificationsMController extends Controller
{
    //
    public function notifications(){
        //$tache = Tache::where('etat_id', 3)->get();
        //$user_id = Auth::id();
        $group_id = Auth::user()->group_id;

        //dd(now()->toDateString());
        
        $notif = DB::table('users as U')
        ->join('tache as T', 'U.id', '=', 'T.user_id')
        ->join('etat as E', 'T.etat_id', '=', 'E.id')
        ->where('U.group_id', '=', $group_id)
        ->whereNotIn('U.id', function ($query) {
            $query->select('user_id')->from('manager');
        })
        ->whereDate('T.dateCreation', now()->toDateString())
        ->select('U.name as tache_user_name', 'T.description as tache_description', 'T.dateCreation as tache_dateCreation', 'E.nom as etat_name')
        ->get();

        //dd($notif);
       
        return view("BackendManager.notifications",['notifications'=>$notif]);
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
