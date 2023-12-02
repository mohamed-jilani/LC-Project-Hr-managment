<?php

namespace App\Http\Controllers\BackendEmployee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemandeDeCongesempController extends Controller
{
    public function demandeDeConges(){
        return view("BackendEmployee.demandeDeConges");
    }
}
