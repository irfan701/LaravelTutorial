<?php

namespace App\Http\Controllers;

use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function view()
    {
        $data['employee'] = EmployeeModel::paginate(10);
        return view('employee', $data);
    }

    function onInsert(Request $request)
    {
      //  dd($request->all());

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        EmployeeModel::insert([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
            ]);

        return redirect()->back();
    }
}
