<?php

namespace App\Http\Controllers\api;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apiemployee extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }
    public function store(Request $request)
    {

        $employee = new Employee;
        $employee->Firstname = $request->input('firstname');
        $employee->Lastname = $request->input('lastname');
        $employee->Email = $request->input('email');
        $employee->officeCode = $request->input('officecode');
        $employee->jobTitle = $request->input('jobtitle');
        $employee->save();

        return 'Employee has been created';
    }
}
