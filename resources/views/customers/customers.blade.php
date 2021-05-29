@extends('layouts.app')

@section('content')

    <h1> Customers </h1>
    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Emp ID</th>
                <th scope="col">Modify</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        @foreach ($customers as $customer)

            <tbody>
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->Firstname }}</td>
                    <td>{{ $customer->Lastname }}</td>
                    <td>{{ $customer->Email }}</td>
                    <td>{{ $customer->emp_id }}</td>
                    <td><a class="btn btn-outline-primary" href="/customers/{{ $customer->id }}/edit">Edit</a></td>
                    <td>
                        {!! Form::open(['action' => ['App\Http\Controllers\CustomersController@destroy', $customer->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </tbody>

        @endforeach

    </table>
    {{ $customers->links() }}
    <a class="btn btn-dark" href="/index"> Back </a>
    <a class="btn btn-primary" href="/customers/create">Create Customer</a>


@endsection
