@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Lorem Ipsum Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')
	<h1>Lorem Ipsum Generator</h1>

	<p>How many paragraphs do you want?</p>


	<form class="form-horizontal" action="">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			
			<div class="col-sm-10">
		  		<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			
			<div class="col-sm-10">
		  		<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  	<div class="checkbox">
				    <label>
			      		<input type="checkbox" disabled="disabled" checked> User Name
			      		<br><input type="checkbox"> Profile
			      		<br><input type="checkbox"> Email
			      		<br><input type="checkbox"> Password
				    </label>
		  		</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
	  			<button type="submit" class="btn btn-default">Generate!</button>
			</div>
		</div>
	</form>
@stop