<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;



class PorfileController extends Controller
{
         public function __construct(){


         // this for auth op
        $this->middleware('auth');
    }

public function GetUserInfo(){



return view('profile');




}
}
