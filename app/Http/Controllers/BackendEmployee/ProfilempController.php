<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilempController extends Controller
{
    public function profile(){
        return view("BackendEmployee.profile");
    }
}
