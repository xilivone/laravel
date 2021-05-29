<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Http\Controllers\EmployeesController;
use DB;
use Illuminate\Http\Request;

class ServedcustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmployeeCustomers($id)
    {

        $employee = Employee::find($id);
        $customers = $employee->customer;
        return view('employees.servedcustomers', compact('customers'));
    }
}
