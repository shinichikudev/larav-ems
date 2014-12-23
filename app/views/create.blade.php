@extends('layout')
@section('content')
<div class="page-header" style="border: 1px solid #0077b3;">
<h1>Add New Employee </h1>
</div>
@if ($errors->count() > 0 )
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $message)</p>
<li>{{$message}}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ action('EmployeesController@handleCreate') }}" method="post" role="form">
<div class="form-group">
	<label for="first_name">First Name</label>
	<input type="text" class="form-control" name="first_name"/>
</div>
<div class="form-group">
	<label for="last_name">Last Name</label><br />
	<input type="text" class="form-control" name="last_name" />
</div>
<div class="form-group">
	<label for="email">Email</label><br />
	<input type="text" class="form-control" name="email" />
</div>
<input type="submit" value="Add" class="btn btn-primary" />
<a href="{{ action('EmployeesController@index') }}" class="btn btn-link">Cancel</a>
</form>
@stop
