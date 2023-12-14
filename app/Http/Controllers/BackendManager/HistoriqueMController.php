<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HistoriqueMController extends Controller
{
    //
    public function historique(){
        $userId = Auth::id();
    
        $conges = DB::table('DemandeDeConges as T')
            
        ->where('T.user_id', '=', $userId)
            
            ->select( 'T.subject as tache_description','T.created_at as tache_dateCreation', 'T.finished_at as tache_datefinish')
            ->get();
    
        return view("BackendManager.historique", ['taches' => $conges]);
    }
}
