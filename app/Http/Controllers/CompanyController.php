<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Job as jobModel;
use App\Company as companyModel;

class CompanyController extends Controller
{


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lectname' => 'required|max:255',
            'comapnyname' => 'required|max:255|unique:companys',
            'numbers' => 'required',
        ]);
    }


    public function index()
    {

        return view('companyname');
    }

    public function storeJob(Request $request)
    {
        $check = jobModel::where('user_id', Auth::user()->id)->count();

        if ($check == 0 && companyModel::find($request->input('id'))->numbers>0 ) {

            jobModel::create([
                'user_id' => Auth::user()->id,
                'company_id' => $request->input('id')
            ]);
           $company= companyModel::find($request->input('id'));
           $company->numbers= $company->numbers-1;
            $company->save();

            return 'success';

        } else {

            return "the user have job";
        }

    }
}
