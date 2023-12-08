<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMController extends Controller
{
    //
    public function dashboard(){
        return view("BackendManager.dashboard");
        
    }
}
