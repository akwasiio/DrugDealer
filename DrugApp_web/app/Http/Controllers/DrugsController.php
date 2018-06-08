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
        $drug->QR_name = '_'.$drug->name.'.png';
        $drug->save();

        #todo: QR code generation.

        QrCode::format('png')->size(400)->generate($drug->id, '../public/QrCodes/'.$drug->QR_name);

        return redirect('/list');
    }

    public function api(Request $request){
        $id = $request->id;
        $drug = drugs::find($id);
        if ($drug) {
            return array("drug_request" => $drug, "message" => "Success");
        }
        else{
            return array("drug_request" => $drug, "message" => "Failure");
        }

    }

    public function details(Request $request){
        $id = $request->id;
        $drug = drugs::find($id);

        return view('details',compact('drug'));
    }


    public function list(){
        return view('list');
    }

    public function home(){
        return view('home') ;
    }

}
