@extends('layouts.app')

@section('content')

    <h1>Modify Customer</h1>
    <hr>
    {!! Form::open(['action' => ['App\Http\Controllers\CustomersController@update', $customer->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('firstname', 'First Name: ') }}
        {{ Form::text('firstname', $customer->Firstname, ['class' => 'form-control', 'placeholder' => 'Enter Firstname']) }}
    </div>
    <div class="form-group">
        {{ Form::label('lastname', 'Last Name: ') }}
        {{ Form::text('lastname', $customer->Lastname, ['class' => 'form-control', 'placeholder' => 'Enter Lastname']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email: ') }}
        {{ Form::text('email', $customer->Email, ['class' => 'form-control', 'placeholder' => 'Enter Email']) }}
    </div>
    <div class="form-group">
        {{ Form::label('emp_id', 'Office Code: ') }}
        {{ Form::text('emp_id', $customer->emp_id, ['class' => 'form-control', 'placeholder' => 'Enter OfficeCode']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    <a class="btn btn-danger" href="/customers">Cancel </a>
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}

@endsection
