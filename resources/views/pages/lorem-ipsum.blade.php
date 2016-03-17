@extends('layouts.master')

{{-- Begin title for index page --}}
@section('title')
	Lorem Ipsum Generator - Developer's Best Friend
@stop

{{-- Begin content for index page --}}
@section('content')
	<h1>Lorem Ipsum Generator</h1>

	<form class="form-horizontal" action="/lorem-ipsum" method="POST">

		{{ csrf_field() }}	

		<div class="form-group">
			<label for="liParagraphs" class="col-sm-3 control-label">Number of Paragraphs to Generate?</label>
			
			<div class="col-sm-1">
		  		<input type="text" class="form-control" id="liParagraphs" name="liParagraphs" placeholder="1" maxlength="1">
			</div>
		</div>

		<button type="submit" class="btn btn-default" >Generate!</button>
	</form>

	@if (isset($paragraphs))
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Your Lorem Ipsum Generated Text</h3>
			</div>
			
			<div class="panel-body">
				@foreach ($paragraphs as $paragraph)
					<p>{{ $paragraph }}</p>
				@endforeach
			</div>
		</div>
	@endif

@stop