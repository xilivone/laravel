<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EmployeesController;
use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile($id)
    {
        $employee = Employee::find($id);
        return view('pages.dashboard',compact('employee'));
    }
    public function index($id)
    {
        $employee = Employee::find($id);
        return view('pages.dashboard', compact('employee'));
    }
}
