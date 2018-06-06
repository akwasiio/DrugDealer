<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drugs;

class DrugsController extends Controller
{

    public function add(){
        return view('register');
    }
    public function register(Request $request){

    }

    public function list(){
        return view('list');
    }

    public function home(){
        return view('home') ;
    }
}
