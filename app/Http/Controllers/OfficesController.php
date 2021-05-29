<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Employee;
use Illuminate\Http\Request;

class OfficesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offices = Office::orderBy('officeCode', 'asc')->Paginate(10);
        return view('offices.offices')->with('offices', $offices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $office = new Office;
        $office->city = $request->input('city');
        $office->phone = $request->input('phone');
        $office->address = $request->input('address');
        $office->country = $request->input('country');
        $office->save();
        return redirect('/offices')->with('success', 'Office has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $office = Office::find($id);
        return view('offices.edit')->with('office', $office);
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
        $office = Office::find($id);
        $office->city = $request->input('city');
        $office->phone = $request->input('phone');
        $office->address = $request->input('address');
        $office->country = $request->input('country');
        $office->save();
        return redirect('/offices')->with('success', 'Office has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $office = Office::find($id);
        $office->delete();
        return redirect('/offices')->with('error', 'Office has been deleted!');
    }
}
