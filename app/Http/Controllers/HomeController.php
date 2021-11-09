<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{   
    
    public function __construct(){
    }

    public function index(){
        return view('mykadFP');
    }
}
