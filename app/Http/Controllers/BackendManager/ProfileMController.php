<?php

namespace App\Http\Controllers\BackendManager;
use Illuminate\Support\Facades\Auth;
use App\Models\Education ;
use App\Models\User;
use App\Models\Departement ;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class ProfileMController extends Controller
{
    //
    public function profile(){
        $userId = Auth::id();
    
    $users = DB::table('users as U')
        ->join('education as T', 'U.id', '=', 'T.user_id')
        ->join('departement as D', 'U.departement_id', '=', 'D.id')
        ->join('group as G', 'U.group_id', '=', 'G.id') 
        ->join('jobs as J', 'U.job_id', '=', 'J.id') 
        ->where('T.user_id', '=', $userId)
        
        ->select(
            'U.id as user_id',
            'U.name as user_name',
            'U.email as user_email',
            'U.phone as user_phone',
            'U.adresse as user_adresse',
            'U.hireDate as user_hireDate',
            'T.niveau as niveau',
            'T.certification as certif',
            'T.graduationYear as graduationYear',
            'D.nom as departementname', 
            'J.titre as statut',
            'J.salary as salary',
             'G.nom as groupname' 
        )
        ->get();

    return view('BackendManager.profile', ['users' => $users]);
}
public function update_profil($id)
{
    $tache=User::find($id);
    return view('BackendManager.Profilupdate', ['tache' => $tache]);
}

public function updateProfile(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'adresse' => 'required|string',
        'phone' => 'required|string',
    ]);

    // Get authenticated user
    $authUser = Auth::user();

    if ($authUser !== null) {
        // User is found, and the authenticated user is the owner of the profile
        // Proceed with updating the user's information
        $authUser->adresse = $request->input('adresse');
        $authUser->phone = $request->input('phone');
        $authUser->save();

        return redirect('/profile_manager')->with('status', 'Modification réussie.');
    } else {
        // Authenticated user not found
        return redirect('/profile_manager')->with('error', 'Utilisateur introuvable.');
    }
}


    
}
