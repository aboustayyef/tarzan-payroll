@extends('employees.layout')

@section('title')
New Employee
@stop

@section('content')
<div class="container">
	<h1>New Employees <small class="pull-right">Fill Employee Details</small></h1>
	<hr>

{{-- 
	$table->decimal('advance')->nullable();
	$table->tinyInteger('days_absent')->nullable();
 --}}

		<form method="post" action="/employees" >
			
			{{ csrf_field() }}

			<fieldset>
				<legend>Personal Information</legend>
				<div class="row">

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('name', 'Name:') !!}
					    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('name') }}</small>
					</div>

					<div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('date_of_birth', 'Date of Birth') !!}
					    {!! Form::date('date_of_birth', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
					</div>

					<div class="form-group{{ $errors->has('married') ? ' has-error' : '' }} col-sm-2">
					    {!! Form::label('married', 'Married?') !!}
					    {!! Form::select('married', [1=>'Yes', 0=>'No'], 0, ['id' => 'married', 'class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('married') }}</small>
					</div>

					<div class="form-group{{ $errors->has('children') ? ' has-error' : '' }} col-sm-2">
					    {!! Form::label('children', 'Children') !!}
					    {!! Form::number('children',0, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('children') }}</small>
					</div>

				</div>
				<div class="row">
					
					<div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('home_address', 'Home Address') !!}
					    {!! Form::text('home_address', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('home_address') }}</small>
					</div>
					<div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('contact_number', 'Contact Number') !!}
					    {!! Form::text('contact_number', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('contact_number') }}</small>
					</div>
					<div class="form-group{{ $errors->has('house_number') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('house_number', 'House Number') !!}
					    {!! Form::text('house_number', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('house_number') }}</small>
					</div>

				</div>
				
			</fieldset>

			<fieldset>
				<legend>Work Information</legend>
				<div class="row">
					
					<div class="form-group{{ $errors->has('tarzan_id') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('tarzan_id', 'Tarzan ID (NN000)') !!}
					    {!! Form::text('tarzan_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('tarzan_id') }}</small>
					</div>

					<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('location', 'Location') !!}
					    {!! Form::select('location',['Directors'=>'Directors', 'Management'=>'Management', 'Tema Permanent' => 'Tema Permanent', 'Container Depot (Tema)'=>'Container Depot (Tema)', 'Blue Gallery Permanent'=>'Blue Galery Permanent', 'Accra Head Office'=>'Accra Head Office'], 'Tema Permanent' , ['id' => 'location', 'class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('location') }}</small>
					</div>

					<div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('designation', 'Designation') !!}
					    {!! Form::text('designation', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('designation') }}</small>
					</div>

					<div class="form-group{{ $errors->has('date_joined') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('date_joined', 'Date Joined') !!}
					    {!! Form::date('date_joined', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('date_joined') }}</small>
					</div>

				</div>
			</fieldset>	

			<fieldset>
				<legend>Salary Information</legend>

				<div class="row">
					<div class="form-group{{ $errors->has('basic_pay') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('basic_pay', 'Basic Pay') !!}
					    {!! Form::text('basic_pay', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('basic_pay') }}</small>
					</div>
					<div class="form-group{{ $errors->has('element_car') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('element_car', 'Elements: Car') !!}
					    {!! Form::text('element_car', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('element_car') }}</small>
					</div>
					<div class="form-group{{ $errors->has('element_rent') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('element_rent', 'Elements: Rent') !!}
					    {!! Form::text('element_rent', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('element_rent') }}</small>
					</div>
					<div class="form-group{{ $errors->has('element_other') ? ' has-error' : '' }} col-sm-3">
					    {!! Form::label('element_other', 'Elements: Other') !!}
					    {!! Form::text('element_other', null, ['class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('element_other') }}</small>
					</div>

				</div>

			<div class="row">
				
				<div class="form-group{{ $errors->has('union') ? ' has-error' : '' }} col-sm-3">
				    {!! Form::label('union', 'Contributes to Union?') !!}
				    {!! Form::select('union', [1 => "Yes" , 0 => 'No'], 1, ['id' => 'union', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('union') }}</small>
				</div>

				<div class="form-group{{ $errors->has('contributes_to_ssf') ? ' has-error' : '' }} col-sm-3">
				    {!! Form::label('contributes_to_ssf', 'Contributes to SSF') !!}
				    {!! Form::select('contributes_to_ssf', [1 => "Yes" , 0 => 'No'], 1, ['id' => 'contributes_to_ssf', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('contributes_to_ssf') }}</small>
				</div>
				
				<div class="form-group{{ $errors->has('disabled') ? ' has-error' : '' }} col-sm-3">
				    {!! Form::label('disabled', 'Has Disability') !!}
				    {!! Form::select('disabled',[1 => "Yes" , 0 => 'No'],0, ['id' => 'disabled', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('disabled') }}</small>
				</div>

				<div class="form-group{{ $errors->has('soap') ? ' has-error' : '' }} col-sm-3">
				    {!! Form::label('soap', 'Gets Soap') !!}
				    {!! Form::select('soap',[1 => "Yes" , 0 => 'No'], 1, ['id' => 'soap', 'class' => 'form-control', 'required' => 'required']) !!}
				    <small class="text-danger">{{ $errors->first('soap') }}</small>
				</div>

			</div>
			</fieldset>
			
			<fieldset>
				<legend>Payment Information</legend>

				<div class="row">
					<div class="form-group{{ $errors->has('mode_of_payment') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('mode_of_payment', 'Mode Of Payment') !!}
					    {!! Form::select('mode_of_payment',['cash'=>'Cash','cheque'=>'Cheque'], 'cheque', ['id' => 'mode_of_payment', 'class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('mode_of_payment') }}</small>
					</div>
					<div class="form-group{{ $errors->has('bank_account') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('bank_account', 'Bank Account') !!}
					    {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
					    <small class="text-danger">{{ $errors->first('bank_account') }}</small>
					</div>
					<div class="form-group{{ $errors->has('kind_of_cheque') ? ' has-error' : '' }} col-sm-4">
					    {!! Form::label('kind_of_cheque', 'Kind Of Cheque') !!}
					    {!! Form::select('kind_of_cheque', ['null'=>' - ', 'Individual'=>'Individual','UT Bank' => 'UT Bank', 'CAL Bank' => 'CAL Bank'], 'Individual', ['id' => 'kind_of_cheque', 'class' => 'form-control', 'required' => 'required']) !!}
					    <small class="text-danger">{{ $errors->first('kind_of_cheque') }}</small>
					</div>
				</div>
			</fieldset>

			<div class="row">
			    <div class="btn-group pull-right">
			        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
			    </div>
			</div>

		

		</form>

		<script>
			// Deactivate bank related fields when payment method is cash
			var select = document.getElementById('mode_of_payment');
			var bank = document.getElementById('bank_account');
			var kof = document.getElementById('kind_of_cheque');

			select.addEventListener('change', function(){
				var selected = select.options[select.selectedIndex].value;
				if (selected == 'cash') {
					bank.disabled = true;
					kof.selectedIndex=0;
					kof.disabled = true;
				} else {
					bank.disabled = false;
					kof.disabled = false;
				}
			});
		</script>

</div>
@stop