<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function view(){
        $data['employee']=EmployeeModel::paginate(10);
        return view('employee',$data);
    }
    function getData(){

    //;    return view
    }
}
