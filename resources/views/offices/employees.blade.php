@extends('layouts.app')

@section('content')

    <h1> Employees </h1>
    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Office Code</th>
                <th scope="col">Job Title</th>
                @if (Auth::user()->id == 1)
                    <th scope="col">Modify</th>
                    <th scope="col">Remove</th>
                    <th scope="col">Move</th>
                @endif
            </tr>
        </thead>
        @foreach ($employees as $employee)

            <tbody>
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->Firstname }}</td>
                    <td>{{ $employee->Lastname }}</td>
                    <td>{{ $employee->Email }}</td>
                    <td>{{ $employee->officeCode }}</td>
                    <td>{{ $employee->jobTitle }}</td>
                    @if (Auth::user()->id == 1)
                        <td><a class="btn btn-outline-primary" href="/employees/{{ $employee->id }}/edit">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['App\Http\Controllers\EmployeesController@destroy', $employee->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                            {!! Form::close() !!}
                        </td>
                        <td>{!! Form::open(['action' => ['App\Http\Controllers\EmployeesController@moveEmployeeToOffice', $employee->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                                <select class="form-control" name="moveEmployeeToOffice">
                                    @foreach ($offices as $office)
                                        <option value="{{ $office->officeCode }}"> {{ $office->officeCode }}
                                        </option>
                                    @endforeach
                                    {{ Form::hidden('_method', 'PUT') }}
                                    {{ Form::submit('Change Office', ['class' => 'btn btn-success']) }}
                                    {!! Form::close() !!}
                                </select>
                            </div>
                        </td>
                    @endif
                </tr>
            </tbody>

        @endforeach

    </table>


    <a class="btn btn-dark" href="/offices"> Back </a>
    @if (Auth::user()->id == 1)
        <a class="btn btn-primary" href="/employees/create">Create Employee</a>

    @endif

@endsection
