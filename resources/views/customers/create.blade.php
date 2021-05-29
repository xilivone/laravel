@extends('layouts.app')

@section('content')

    <h1>Create New Customer</h1>
    <hr>
    {!! Form::open(['action' => 'App\Http\Controllers\CustomersController@store', 'method' => 'POST']) !!}
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
        {{ Form::label('emp_id', 'Employee ID: ') }}
        {{ Form::text('emp_id', '', ['class' => 'form-control', 'placeholder' => 'Enter Employee ID who served this customer']) }}
    </div>

    <a class="btn btn-danger" href="/customers">Cancel </a>
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}

@endsection
