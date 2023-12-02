<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminEmpController extends Controller
{
    //
    public function dashboard(){
        return view("BackendEmployee.dashboard");
    }
}
