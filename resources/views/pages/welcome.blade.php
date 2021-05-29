@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/employees.png') }}" class="card-img-top" alt="employees">
            <div class="card-body">
                <h5 class="card-title">Employees</h5>
                <p class="card-text">Show all the employees in this company and their information.</p>
                <a class="btn btn-outline-success" href="/employees">Employees</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/customers.png') }}" class="card-img-top" alt="customers">
            <div class="card-body">
                <h5 class="card-title">Customers</h5>
                <p class="card-text">Show all the customers in this company been served.</p>
                <a class="btn btn-outline-primary" href="/customers">Customers</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/offices.jpg') }}" class="card-img-top" alt="offices">
            <div class="card-body">
                <h5 class="card-title">Offices</h5>
                <p class="card-text">Show all the offices in this company and their employees who are included.</p>
                <a class="btn btn-outline-danger" href="/offices">Offices</a>
            </div>
        </div>
    </div>

@endsection
