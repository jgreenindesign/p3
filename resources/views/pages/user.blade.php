@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Random User Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')

	<h1>Random User Generator</h1>
	
	<form action="/user" method="POST">

		{{ csrf_field() }}	

		<div class="form-group row">

			@if ($errors->has('numberUsers'))
				<div class='col-sm-4'>
					<p class='bg-danger'>{{ $errors->first('numberUsers') }}</p>
				</div>
				<div class="clearfix"></div>
			@endif
		
			<label for="numberUsers" class="col-sm-2 control-label">Number of Users?</label>
			
			<div class="col-sm-1">
		  		<input type="text"
		  		class="form-control"
		  		id="numberUsers"
		  		name="numberUsers"
		  		value="1"
		  		maxlength="2">
			</div>
		</div>
		
		<div class="form-group row">
			<div class="col-sm-3">
				<p><b>Include...</b></p>
			  	<div class="checkbox">
				    <label>
				    	<input type="checkbox" disabled="disabled" checked> Profile Image
			      		<br><input type="checkbox" disabled="disabled" checked> Full Name
			      		<br><input type="checkbox" name="uName" id="uName"> User Name
			      		<br><input type="checkbox" name="uEmail" id="uEmail"> Email
			      		<br><input type="checkbox" name="uPassword" id="uPassword"> Password
			      		<br><input type="checkbox" name="uProfile" id="uProfile"> Profile
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

	{{-- Begin output if input was valid --}}
	@if (isset($usersOutput))
		<div  id="userCarousel" class="carousel slide col-sm-6" data-ride="carousel">
			<div class='carousel-inner' role='listbox'>
				<?php echo $usersOutput; ?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#userCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#userCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	@endif	

@stop


{{-- Begin js content --}}
@section('js-footer')
<script>
	$('.carousel').carousel({
	  interval: false
	});
</script>
@stop