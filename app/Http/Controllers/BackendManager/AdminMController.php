<?php

namespace App\Http\ControllerscongesValidationController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMController extends Controller
{
    //
    public function dashboard(){
        return view("BackendManager.dashboard");
        
    }
}
