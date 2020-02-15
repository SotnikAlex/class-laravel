@extends('layouts.main')


@section('content')
	<h1>Edit news</h1>
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	
	
	<form action="/news/{{$news->id}}" method="POST" enctype="multipart/form-data">
	{{--<input type="hidden" name="_method" value="PUT">--}}
	@method('PUT')
		@include('news._formEdit')
	</form>
@endsection

@section('css')
<style>
	h1{
		text-align: center;
	}
</style>
@endsection