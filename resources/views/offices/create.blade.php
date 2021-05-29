@extends('layouts.app')

@section('content')

    @if (Auth::user()->id == 1)
        <h1>Create New Office</h1>
        <hr>
        {!! Form::open(['action' => 'App\Http\Controllers\OfficesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('city', 'City: ') }}
            {{ Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Enter City']) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Phone: ') }}
            {{ Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']) }}
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Address: ') }}
            {{ Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter Address']) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', ' Country: ') }}
            {{ Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Enter Country']) }}
        </div>
        <a class="btn btn-danger" href="/offices">Cancel </a>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}
    @else
        <p> You are not authorized to create office</p>
    @endif
@endsection
