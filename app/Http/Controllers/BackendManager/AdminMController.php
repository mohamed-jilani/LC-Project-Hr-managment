<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Tache ;
use App\Models\User;
use App\Models\Etat;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminMController extends Controller
{
    //
    public function dashboard(){
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


        $nb_Emp = User::where('group_id', $group_id)
        ->whereNotIn('id', function ($query) {
            $query->select('user_id')
                ->from('manager');
        })
        ->count();


        $tache_enA = Tache::where('etat_id', 2)
        ->whereIn('user_id', function ($query) use ($group_id){
            $query->select('id')
                ->from('users')
                ->where('group_id', $group_id);
        })
        ->whereNotIn('id', function ($query) {
            $query->select('user_id')
                ->from('manager');
        })
        ->count();


        $tache_enC = Tache::where('etat_id', 1)
        ->whereIn('user_id', function ($query) use ($group_id) {
            $query->select('id')
                ->from('users')
                ->where('group_id', $group_id);
        })
        ->whereNotIn('id', function ($query) {
            $query->select('user_id')
                ->from('manager');
        })
        ->count();


        $tache_t = Tache::where('etat_id', 3)
        ->whereIn('user_id', function ($query) use ($group_id){
            $query->select('id')
                ->from('users')
                ->where('group_id', $group_id);
        })
        ->whereNotIn('id', function ($query) {
            $query->select('user_id')
                ->from('manager');
        })
        ->count();



        return view("BackendManager.dashboard",['taches'=>$notif,'nb_Emp'=>$nb_Emp,'tache_t'=>$tache_t,'tache_enA'=>$tache_enA,'tache_enC'=>$tache_enC]);
        
    }
}
