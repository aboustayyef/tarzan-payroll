@extends('employees.layout')

@section('title')
	Employees
@stop

@section('content')	
<div class="large-container">
	<table class="table table-striped" style="width:2000px">
	  <thead>
	    <tr>
	      <th>Name</th>
	      <th>Date of Birth</th>
	      <th>Location</th>
	      <th>Designation</th>
	      <th>Date Joined</th>
	      <th>Basic Pay</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach ($employees as $employee)
			<tr>
			  <td>{{$employee->name}}</td>
			  <td>@if($employee->date_of_birth){{$employee->date_of_birth->toFormattedDateString()}}@endif</td>
			  <td>{{$employee->location}}</td>
			  <td>{{$employee->designation}}</td>
			  <td>{{$employee->date_joined->toFormattedDateString()}}</td>
			  <td>{{$employee->basic_pay}}</td>
			</tr>
		@endforeach
	  </tbody>
	</table>
</div>

@stop