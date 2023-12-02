<?php

namespace App\Http\Controllers\BackendManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriqueMController extends Controller
{
    //
    public function historique(){
        return view("BackendManager.historique");
    }
}
