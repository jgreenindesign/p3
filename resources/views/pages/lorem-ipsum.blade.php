@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Lorem Ipsum Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')
	<h1>Lorem Ipsum Generator</h1>

	<div class="col-sm-8" id="formContainer">
		<form class="form-horizontal" action="/lorem-ipsum" method="POST">

			{{ csrf_field() }}	

			<div class="form-group">
				
				@if ($errors->has('paragraphs'))
					<div class='col-sm-4'>
						<p class='bg-danger'>{{ $errors->first('paragraphs') }}</p>
					</div>
					<div class="clearfix"></div>
				@endif

				<label for="paragraphs" class="col-sm-4 control-label">Number of Paragraphs to Generate [Max: 9]?</label>
				
				<div class="col-sm-2">
			  		<input type="text" 
			  		class="form-control {{ $errors->has('paragraphs') ? 'has-error' :'' }}" 
			  		id="paragraphs" 
			  		name="paragraphs" 
			  		value="1" 
			  		maxlength="1">
				</div>
			</div>

			<button type="submit" class="btn btn-primary" >Generate!</button>

		</form>

		{{-- Begin output if input was valid --}}
		@if (isset($paragraphs))
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Your Lorem Ipsum Generated Text</h3>
				</div>
				
				<div class="panel-body">
					{{-- @foreach ($paragraphs as $paragraph)
						<p>{{ $paragraph }}</p>
					@endforeach --}}

					<?php echo $paragraphs; ?>
				</div>
			</div>
		@endif
	</div>

@stop