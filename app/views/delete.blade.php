@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;" >
<h1>Delete {{ $employee->title }} <small>Do you really want to delete employee?</small></h1>
</div>
<form action="{{ action('EmployeesController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="employee" value="{{ $employee->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('EmployeesController@index') }}" class="btn btn-default">No</a>
    </form>
  @stop