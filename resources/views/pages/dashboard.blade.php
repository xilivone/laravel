@extends('layouts.app')

@section('content')

    <h1> [ {{ $employee->Firstname }} {{ $employee->Lastname }} ] - Dashboard</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Office Code</th>
                <th scope="col">Job Title</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $employee->id }}</th>
                <td>{{ $employee->Firstname }}</td>
                <td>{{ $employee->Lastname }}</td>
                <td>{{ $employee->Email }}</td>
                <td>{{ $employee->officeCode }}</td>
                <td>{{ $employee->jobTitle }}</td>
            </tr>
            </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('change.password')}}"> Change Password </a>
            @endsection
