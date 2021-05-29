@extends('layouts.app')

@section('content')

    <h1> Employees Without Offices </h1>
    <hr>
    @if (count($employees) > 0)
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
                        <th scope="col">Assign Office</th>
                        <th scope="col">Remove</th>
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
                            <td>
                                {!! Form::open(['action' => ['App\Http\Controllers\EmployeesController@updateOffice', $employee->id], 'method' => 'POST']) !!}
                                    <select class="form-control" name="updateoffice">
                                        @foreach ($offices as $office)
                                            <option value="{{ $office->officeCode }}"> {{ $office->officeCode }}
                                            </option>
                                        @endforeach
                                        {{ Form::hidden('_method', 'PUT') }}
                                        {{ Form::submit('Add to office', ['class' => 'btn btn-success']) }}
                                        {!! Form::close() !!}
                                    </select>
                                </div>
                            </td>
                            <td>
                                {!! Form::open(['action' => ['App\Http\Controllers\EmployeesController@destroy', $employee->id], 'method' => 'POST']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                                {!! Form::close() !!}
                            </td>
                        @endif
                    </tr>
                </tbody>

            @endforeach

        </table>
    @else
        <p> All Employees Belong To Thier Offices
        </p>

    @endif
    <a class="btn btn-dark" href="/employees"> Back </a>
    @if (Auth::user()->id == 1)

    @endif

@endsection
