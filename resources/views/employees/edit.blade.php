@extends('layouts.app')

@section('content')
    @if (Auth::user()->id == 1)
        <h1>Modify Employee</h1>
        <hr>
        {!! Form::open(['action' => ['App\Http\Controllers\EmployeesController@update', $employee->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('firstname', 'First Name: ') }}
            {{ Form::text('firstname', $employee->Firstname, ['class' => 'form-control', 'placeholder' => 'Enter Firstname']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastname', 'Last Name: ') }}
            {{ Form::text('lastname', $employee->Lastname, ['class' => 'form-control', 'placeholder' => 'Enter Lastname']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::text('email', $employee->Email, ['class' => 'form-control', 'placeholder' => 'Enter Email']) }}
        </div>
        <div class="form-group">
            {{ Form::label('officecode', 'Office Code: ') }}
            {{ Form::text('officecode', $employee->officeCode, ['class' => 'form-control', 'placeholder' => 'Enter OfficeCode']) }}
        </div>
        <div class="form-group">
            {{ Form::label('jobtitle', 'Job Title: ') }}
            {{ Form::text('jobtitle', $employee->jobTitle, ['class' => 'form-control', 'placeholder' => 'Enter Job Title']) }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        <a class="btn btn-danger" href="/employees">Cancel </a>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}

    @else
        <p> You are Not authorized to edit employee</p>
    @endif
@endsection
