<?php

namespace App\Http\Controllers;

use App\Client;
use App\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class RegisterClientController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    public function process(){
        //get all inputs from medical history form into an array
        $input = Input::all();
        //sanitise inputs
        $input = $this->sanitiseArrayInputs($input);

        //seperate the array into personal details and history arrays
        $personal_details = array_slice($input, 1, 12);
        $client = new Client();
        $client_id = $client->insertClient($personal_details);
        $medical_record = array_slice($input, 13 , 63);
        $medRecToInsert = array("client_id" => $client_id) + $medical_record;
       

        $medRec = new MedicalRecord();
        $medRec->insertMedicalRecord($medRecToInsert);
        return view('client.thankyou')->with('client_id', $client_id);

    }


    private function sanitiseArrayInputs(array $array){
        foreach ($array as $key=>$value){
            if(is_array($value)) $array[$key] = clean_all($value);
            else $array[$key] = strip_tags($value);
            return $array;
        }
    }

    
}
