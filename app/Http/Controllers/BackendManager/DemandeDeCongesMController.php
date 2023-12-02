<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemandeDeCongesMController extends Controller
{
    //
    public function demandeDeConges(){
        return view("BackendManager.demandeDeConges");
    }
}
