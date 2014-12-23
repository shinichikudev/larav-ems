@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3; text-align: center">
<h1>EMS <small>Better Employee Management </small> </h1>
</p></div>
<div class="panel panel-default">
<div class="panel-body">
            <a href="{{ action('EmployeesController@create') }}" class="btn btn-info">Add New Employee</a>
        </div>
</div>
    @if ($employees->isEmpty())
There are no employees! :(
    @else
<table class="table table-striped">
<thead>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
                @foreach($employees as $employee)
<tr>
<td>{{ $employee->first_name }}</td>
<td>{{ $employee->last_name }}</td>
<td>{{ $employee->email }}</td>
<td>
                        <a href="{{ action('EmployeesController@edit', $employee->id) }}" class="btn btn-default">Edit</a>

                        <a href="{{ action('EmployeesController@delete', $employee->id) }}" class="btn btn-danger">Delete</a>
                    </td>
</tr>
                @endforeach
            </tbody>
</table>
    @endif
@stop