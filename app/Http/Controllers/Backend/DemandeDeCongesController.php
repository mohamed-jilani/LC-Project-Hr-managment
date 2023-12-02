<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemandeDeCongesController extends Controller
{
    //
    public function demandeDeConges(){
        return view("Backend.demandeDeConges");
    }
}
