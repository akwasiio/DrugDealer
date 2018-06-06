<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrugsController extends Controller
{
    public function home(){
        return view('home') ;
    }
}
