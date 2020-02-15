@extends('layouts.main')

@section('content')
	<h1>Create news</h1>
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	
	<form action="/news" method="POST" enctype="multipart/form-data">
		@include('news._form')
	</form>
@endsection

@section('css')
<style>
	h1{
		text-align: center;
	}
</style>
@endsection