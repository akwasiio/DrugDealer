<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\drugs;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $drug->save();

        #todo: QR code generation.

        QrCode::generate($drug->id, '../public/QrCodes/_'.$drug->name.'.svg');

        return redirect('/list');
    }

    public function list(){
        return view('list');
    }

    public function home(){
        return view('home') ;
    }
}
