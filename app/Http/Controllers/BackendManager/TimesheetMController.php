<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimesheetMController extends Controller
{
    //
    public function timesheet(){
        return view("BackendManager.timesheet");
    }
}
