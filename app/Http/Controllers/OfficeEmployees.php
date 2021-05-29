<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Customer;
use App\Models\Employee;
use App\Http\Controllers\EmployeesController;
use DB;
use Illuminate\Http\Request;

class OfficeEmployees extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getOfficeEmployees($officeCode)
    {
        $offices = Office::All();
        $office = Office::find($officeCode);
        $employees = $office->employee;
        return view('offices.employees', compact('employees','offices'));
    }
}
