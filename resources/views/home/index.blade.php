@extends('layouts.full-width')


@section('content')
<h1>{{$title}}</h1>

<h2>{!!$subTitle!!}</h2>
{{-- @foreach($users as $user)
	{{$loop->iteration}} {{$user}} <br>
@endforeach
--}}
@endsection

@section('title', $title)

@section('css')
<style>
	h1{
		text-align: center;
	}
</style>
@endsection
