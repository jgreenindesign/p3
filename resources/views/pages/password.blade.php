@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Random Password Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')

	<h1>xkcd Password Generator</h1>

	<!-- BEGIN .container -->
		<div class="container">

			<!-- BEGIN .formcontainer -->
			<div class="col-sm-8" id="formContainer">

				<form action="/password" method="POST">
				{{ csrf_field() }}	
	    			<fieldset>
	    				<!-- BEGIN Required Options -->
						
						@if ($errors->has('passwordSize'))
							<div class='col-sm-6'>
								<p class='bg-danger'>{{ $errors->first('passwordSize') }}</p>
							</div>
							<div class="clearfix"></div>
						@endif

	    				<p class="col-sm-12">
	    					<label for="passwordSize"># of Words (2 - 9):
	    						<input type="text" name="passwordSize" id="passwordSize" class="paddedLeft  {{ $errors->has('passwordSize') ? 'has-error' :'' }}" maxlength="1" value="2">
	    					</label>
	    				</p>

	    				<p class="col-sm-12">
	    					<label for="passwordNumber">Include a Number:
	    						<input type="checkbox" name="passwordNumber" id="passwordNumber" class="paddedLeft">
	    					</label>
	    				</p>

	    				<p class="col-sm-12">
	    					<label for="passwordSpecial">Include a Special Character:
	    						<input type="checkbox" name="passwordSpecial" id="passwordSpecial" class="paddedLeft">
	    					</label>
	    				</p>
	    				<!-- END Required Options -->

						<!-- BEGIN Word Seperator Section -->
						<p class="col-sm-12">
							<label><b>Word Seperator :</b><br> dash-dash
								<input type="radio" value="dash" name="passwordSeperator" id="passwordRadio1" class="paddedLeft" checked="checked">
							</label>

							<label>camelCase
								<input class="paddedLeft" id="passwordRadio2" name="passwordSeperator" value="camel" type="radio">
							</label>

							<label>Spaces Spaces
								<input type="radio" value="space" name="passwordSeperator" id="passwordRadio3" class="paddedLeft">
							</label>
						</p>
						<!-- END Word Seperator Selector -->

	    				<p>
  							<button type="submit" class="btn btn-primary">Generate</button>
						</p>
	    			</fieldset>
	    		</form>

				{{-- Content area for the password output --}}
				@if (isset($generatedPassword))
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Your Randomly Generated Password</h3>
						</div>

						<div class="panel-body">
							<?php echo $generatedPassword; ?>
						</div>
					</div>
				@endif

				<img src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd style passwords" style="width: 100%;">
			</div>
			<!-- END .formcontainer -->

		</div>
		<!-- END .container -->

@stop