<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DemandeDeConges ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    //
    public function historique(){
        $userId = Auth::id();
    
        $conges = DB::table('DemandeDeConges as T')
            
        ->where('T.user_id', '=', $userId)
            
            ->select( 'T.subject as tache_description','T.created_at as tache_dateCreation', 'T.finished_at as tache_datefinish')
            ->get();
    
        return view("Backend.historique", ['taches' => $conges]);
      
    }
}
