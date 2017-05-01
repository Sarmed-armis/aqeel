<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;



class StudentController extends Controller
{
    public function index(Request $req){


// this fecth data form view

$name=$req->input('name');
$age=$req->input('age');
$adress=$req->input('adress');
$number=$req->input('number');

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
