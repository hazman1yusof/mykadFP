<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use stdClass;

class HomeController extends Controller
{   
    
    public function __construct(){
    }

    public function index(){
        return view('mykadFP');
    }

    public function store(Request $request){

        if($request->type == 'mykad'){
            $myfile = fopen("C:\cmas\mykad\mykadfp\mykad.txt", "w");

            $txt = $_POST['icnum']."|".
                    $_POST['dob']."|".
                    $_POST['name']."|".
                    $_POST['religion']."|".
                    $_POST['gender']."|".
                    $_POST['race']."|".
                    $_POST['address1']."|".
                    $_POST['address2']."|".
                    $_POST['address3']."|".
                    $_POST['postcode']."|".
                    $_POST['city']."|".
                    $_POST['state']."|".
                    $_POST['citizenship']."|".
                    $_POST['birthplace']."|";

            fwrite($myfile, $txt);
            fclose($myfile);

            $data = base64_decode($_POST['base64']);

            file_put_contents('C:\cmas\mykad\mykadfp\myphotov1.jpg', $data);
        }
    }

    public function getpatlist(Request $request){
        $responce = new stdClass();

        $responce->data = [];
        $pat_mast = DB::table('mykadfp.pat_mast')
                    ->select('mrn','newic','fptemplate','lastuser')
                    ->get();

        $responce->data = $pat_mast;
        return json_encode($pat_mast);
    }
}
