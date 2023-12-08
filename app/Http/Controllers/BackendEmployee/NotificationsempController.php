<?php

namespace App\Http\Controllers\BackendEmployee;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Tache ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NotificationsempController extends Controller
{
    public function notifications(){
        $userId = Auth::id();

    
    
        $notif = DB::table('tache_history as th')
        ->whereIn('th.etat_id', [1,2,3])
        ->where('th.user_id', '=', $userId)
        ->whereNotIn('th.user_id', function ($query) {
            $query->select('user_id')->from('manager');
        })
        ->whereDate('th.dateCreation', now()->toDateString())
        ->select('description','dateCreation','dateRealisationFinal','user_id','etat_id','created_at','updated_at')
        ->get();
        //dd($notif);

        /*
        $tache = Tache::whereIn('etat_id', [1, 3])
                    ->where('user_id', $userId)
                    ->get();
        */


        return view('BackendEmployee.notifications', ['notifications'=>$notif]);
    }
    
    /*
    public function supp_tache(){
        session()->push('hiddenTaskIds', $id);
        
    }
    */

}
