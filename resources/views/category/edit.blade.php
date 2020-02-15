@extends('layouts.main')


@section('content')
<h1>Edit Category</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="/category/{{$category->id}}" method="POST">
	{{--<input type="hidden" name="_method" value="PUT">--}}
	@method('PUT')
	@csrf
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$category->name}}">

		@error('title')
    		<div class="text-danger">{{ $message }}</div>
		@enderror
	</div>
	
	
	<button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection

@section('title', 'Create category')

@section('css')
<style>
	h1{
		text-align: center;
	}
</style>
@endsection

