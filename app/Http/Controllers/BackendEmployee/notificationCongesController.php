<?php
namespace App\Http\Controllers\BackendEmployee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CongesHistory;

class notificationCongesController extends Controller
{
    public function notifconges(){
        
        $user_id = Auth::user()->id;

        $congesHistory = DB::table('history_conges')
            ->where('user_id', $user_id)
            ->get();
    
        return view("BackendEmployee.notifconges", ['congesHistory' => $congesHistory]);

        
}
       
        
    }
    

    

