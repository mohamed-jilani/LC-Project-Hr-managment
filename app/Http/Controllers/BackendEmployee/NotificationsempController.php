<?php

namespace App\Http\Controllers\BackendEmployee;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Tache ;
use Illuminate\Http\Request;

class NotificationsempController extends Controller
{
    public function notifications(){
        $userId = Auth::id();

    
    $tache = Tache::whereIn('etat_id', [4, 5])
                   ->where('user_id', $userId)
                   ->get();

        return view('BackendEmloyee.notifications', compact('tache'));
    }
    public function supp_tache(){
        session()->push('hiddenTaskIds', $id);

        
    }

}
