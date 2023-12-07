<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Education ;
use App\Models\User;
class ProfilempController extends Controller
{
   

    public function profile()
    { 
        

        return view('BackendEmployee.profile');

       
        
      
        
        
    }
    
  
}

