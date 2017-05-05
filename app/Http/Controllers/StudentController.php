<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;
use App\user as userModle;




class StudentController extends Controller
{
    public function index(Request $req){


// this fecth data form view
        $path_image = 'image';

        $search_image = rand(11111111111111, 99999999999999) . '.' . $req->image->getClientOriginalExtension();

        $req->image->move($path_image, $search_image);
$name=$req->input('name');
$age=$req->input('age');
$adress=$req->input('adress');
$number=$req->input('number');
        $code=$req->input('code');
        $user=userModle::find(Auth::user()->id);
        $user->code=$code;
        $user->image=$search_image;
        $user->save();





$_std=new Student();
$_std->name=$name;
$_std->age=$age;
$_std->addres=$adress;
$_std->mobile=$number;
$_std->userid=Auth::user()->id;
$_std->save();
return redirect()->back();




}
}
