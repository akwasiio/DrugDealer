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
        $drug = new drugs();
        $drug->name = $request->name;
        $drug->company_name = $request->company_name;
        $drug->email = $request->email;
        $drug->phone = $request->phone;
        $drug->dosage = $request->dosage;
        $drug->description = $request->description;
        $drug->side_effects = $request->side_effects;

        #todo: QR coe generation.
        return redirect('/');
    }

    public function list(){
        return view('list');
    }

    public function home(){
        return view('home') ;
    }
}
