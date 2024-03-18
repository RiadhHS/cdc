<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    //
    function index(){
        return view('visiteurs');
    }
}
