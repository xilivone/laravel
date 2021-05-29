@extends('layouts.app')

@section('content')

    @if (Auth::user()->id == 1)
        <h1>Create New Employee</h1>
        <hr>
        {!! Form::open(['action' => 'App\Http\Controllers\EmployeesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('firstname', 'First Name: ') }}
            {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter Firstname']) }}
        </div>
        <div class="form-group">
            {{ Form::label('lastname', 'Last Name: ') }}
            {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter Lastname']) }}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email']) }}
        </div>
        <div class="form-group">
            {{ Form::label('officecode', 'Office Code: ') }}
            {{ Form::text('officecode', '', ['class' => 'form-control', 'placeholder' => 'Enter OfficeCode']) }}
        </div>
        <div class="form-group">
            {{ Form::label('jobtitle', 'Job Title: ') }}
            {{ Form::text('jobtitle', '', ['class' => 'form-control', 'placeholder' => 'Enter Job Title']) }}
        </div>
        <a class="btn btn-danger" href="/employees">Cancel </a>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}
    @else
        <p> You are not authorized to create employee</p>
    @endif
@endsection
