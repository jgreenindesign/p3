@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Random User Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')

	<h1>Random User Generator</h1>
	
	<div class="col-sm-8" id="formContainer">

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
				
				<div class="col-sm-2">
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

				    	<p class="col-sm-12">
	    					<label for="passwordNumber">Profile Image: 
	    						<input type="checkbox" name="pImage" id="pImage" disabled="disabled" checked class="paddedLeft">
	    					</label>

	    					<br>
	    					
	    					<label for="passwordNumber">Full Name: 
	    						<input type="checkbox" name="fName" id="fName" disabled="disabled" checked class="paddedLeft">
	    					</label>

	    					<br>
	    					
	    					<label for="passwordNumber">User Name: 
	    						<input type="checkbox" name="uName" id="uName" class="paddedLeft">
	    					</label>

	    					<br>
	    					
	    					<label for="passwordNumber">Email: 
	    						<input type="checkbox" name="uEmail" id="uEmail" class="paddedLeft">
	    					</label>

	    					<br>
	    					
	    					<label for="passwordNumber">Password: 
	    						<input type="checkbox" name="uPassword" id="uPassword" class="paddedLeft">
	    					</label>

	    					<br>
	    					
	    					<label for="passwordNumber">Profile: 
	    						<input type="checkbox" name="uProfile" id="uProfile" class="paddedLeft">
	    					</label>

	    				</p>

			  		</div>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-3">
		  			<button type="submit" class="btn btn-primary">Generate!</button>
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

	</div>

@stop


{{-- Begin js content --}}
@section('js-footer')
<script>
	$('.carousel').carousel({
	  interval: false
	});
</script>
@stop