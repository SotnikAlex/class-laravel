@extends('layouts.main')


@section('content')
<h1>{{$title}}</h1>
<form action="/contacts" method="POST">
	@csrf
	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name">
	</div>
	
	<div class="form-group">
		<label for="message">Message:</label>
		<textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
	</div>
	
	<button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection

@section('title', $title)

@section('css')
<style>
	h1{
		text-align: center;
	}
</style>
@endsection

@section('sidebar')
@parent
ADV
@endsection