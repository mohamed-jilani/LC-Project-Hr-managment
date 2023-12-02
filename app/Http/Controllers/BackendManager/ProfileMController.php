<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileMController extends Controller
{
    //
    public function profile(){
        return view("BackendManager.profile");
    }
}
