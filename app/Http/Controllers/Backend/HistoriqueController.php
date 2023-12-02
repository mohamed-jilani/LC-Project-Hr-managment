<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    //
    public function historique(){
        return view("Backend.historique");
    }
}
