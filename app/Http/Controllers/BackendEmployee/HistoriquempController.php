<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriquempController extends Controller
{
    public function historique(){
        return view("BackendEmployee.historique");
    }
}
