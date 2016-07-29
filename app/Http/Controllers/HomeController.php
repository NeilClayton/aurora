<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Redirect user on login depending on their access level
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if(Auth::user()->accesslevel == 1){
          echo 'you are logged in as Admin';
        }
        elseif (Auth::user()->accesslevel == 2) {
            echo 'you are logged in a Staff member';
        }
        elseif (Auth::user()->accesslevel == 3){
            return view('client.medhistory');
        }

        //return view('/');
    }
}
