@extends('layouts.app')

@section('content')

    <h1> Offices </h1>
    <hr>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">officeCode</th>
                <th scope="col">City</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                @if (Auth::user()->id == 1)
                    <th scope="col">Modify</th>
                    <th scope="col">Remove</th>
                <th scope="col">Related Employees</th>
                @endif
            </tr>
        </thead>
        @foreach ($offices as $office)

            <tbody>
                <tr>
                    <th scope="row">{{ $office->officeCode }}</th>
                    <td>{{ $office->city }}</td>
                    <td>{{ $office->phone }}</td>
                    <td>{{ $office->address }}</td>
                    <td>{{ $office->country }}</td>
                    @if (Auth::user()->id == 1)
                        <td><a class="btn btn-outline-primary" href="/offices/{{ $office->officeCode }}/edit">Edit</a></td>
                        <td>
                            {!! Form::open(['action' => ['App\Http\Controllers\OfficesController@destroy', $office->officeCode], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger']) }}
                            {!! Form::close() !!}
                        </td>
                        <td>
                            <a class="btn btn-outline-success" href="/offices/{{ $office->officeCode }}/employees">Show
                                Employees</a>
                        </td>
                    @endif
                </tr>
            </tbody>

        @endforeach

    </table>

    {{ $offices->links() }}
    <a class="btn btn-dark" href="/index"> Back </a>
    @if (Auth::user()->id == 1)


        <a class="btn btn-primary" href="/offices/create">Create Office</a>

    @endif
@endsection
