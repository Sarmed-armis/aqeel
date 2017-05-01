<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class CompanystoreController extends Controller
{
    public function index(Request $req){

if($req!=null){
 $copmany_name= $req->input('comapnyname');
$lect_name=  $req->input('lectname');
$numbers= $req->input('numbers');
// insert to database

$_COMPANY=new Company();

$_COMPANY->companyname=$copmany_name;
$_COMPANY->lectname=$lect_name;
$_COMPANY->companyname=$copmany_name;
$_COMPANY->numbers=$numbers;
$_COMPANY->save();
  return redirect()->back();





}
else {

  return redirect()->back();
}

    }
}
