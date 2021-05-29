<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Office;
use Illuminate\Http\Request;

class EmployeesController extends Controller
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
    public function index()
    {
        $employees = Employee::orderBy('id', 'asc')->Paginate(10);
        return view('employees.employees')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee = new Employee;
        $employee->Firstname = $request->input('firstname');
        $employee->Lastname = $request->input('lastname');
        $employee->Email = $request->input('email');
        $employee->officeCode = $request->input('officecode');
        $employee->jobTitle = $request->input('jobtitle');
        $employee->save();

        return redirect('/employees')->with('success', 'Employee has been created!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.employees')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->Firstname = $request->input('firstname');
        $employee->Lastname = $request->input('lastname');
        $employee->Email = $request->input('email');
        $employee->officeCode = $request->input('officecode');
        $employee->jobTitle = $request->input('jobtitle');
        $employee->save();
        return redirect('/employees')->with('success', 'Employee has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back()->with('error', 'Employee has been deleted!');
    }

    public function getEmployeesNoOffices()
    {
        $offices = Office::all();
        $employees = Employee::whereDoesntHave('office')->get();
        return view('employees.employeeswithoutoffice', compact('offices', 'employees'));
    }
    public function updateOffice(Request $request, $officeCode)
    {

        $employee = Employee::find($officeCode);
        $employee->officeCode = $request->input('updateoffice');
        $employee->save();
        return back()->with('success', 'Employee has been updated!');
    }
    public function moveEmployeeToOffice(Request $request, $officeCode)
    {

        $employee = Employee::find($officeCode);
        $employee->officeCode = $request->input('moveEmployeeToOffice');
        $employee->save();
        return back()->with('success', 'Employee has been moved!');
    }
}
