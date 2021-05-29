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
                @endif
                <th scope="col">Served Customers</th>
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
                    @endif
                    <td>
                        <a class="btn btn-outline-success" href="/servedcustomers/{{ $employee->id }}">Show Customers</a>
                    </td>
                </tr>
            </tbody>

        @endforeach

    </table>


    {{ $employees->links() }}
    <a class="btn btn-dark" href="/index"> Back </a>
    <a class="link-info float-right" href="{{route('employeesnooffice')}}"> Show Employees Without Offices </a>
    @if (Auth::user()->id == 1)
        <a class="btn btn-primary" href="/employees/create">Create Employee</a>

    @endif

@endsection
