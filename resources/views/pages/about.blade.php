@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <div class="center-italic">
            <h2 class="welcomeAbout"> About System</h2>
        <hr>

        <ol class="features" type="I"> This system has many features provided as following:
        <li> Demonstrating all employees, Customers and Offices in this company with having the ability to modify them. </li>
        <li> Showing all employees that belong to particular office and move them across offices. </li>
        <li> Making a list for customers that served by specific employee. </li>
        <li> Create, Edit and delete each field content from employee,customers and offices. </li>
        <li> There is an admin for this system can edit and delete employees and offices, also can move employees over offices. </li>
        <li> Employees privilages is to make changes on their information such as changing password and customers information while they are not allowed to change other employees information. </li>
    </ol>
    <hr>
    </div>
    <a class="btn btn-success" href="{{route('home')}}">Main Page </a>
@endsection
