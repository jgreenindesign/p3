@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Random User Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')

	<h1>Random User Generator</h1>
	
	<form action="">

		<div class="form-group row">
			<label for="numberUsers" class="col-sm-2 control-label">Number of Users?</label>
			
			<div class="col-sm-1">
		  		<input type="email" class="form-control" id="numberUsers" value="1" maxlength="2">
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-sm-3">
				<p><b>Include...</b></p>
			  	<div class="checkbox">
				    <label>
			      		<input type="checkbox" disabled="disabled" checked> User Name
			      		<br><input type="checkbox"> Full Name
			      		<br><input type="checkbox"> Profile
			      		<br><input type="checkbox"> Email
			      		<br><input type="checkbox"> Password
				    </label>
		  		</div>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-3">
	  			<button type="submit" class="btn btn-default">Generate!</button>
			</div>
		</div>
	</form>
@stop