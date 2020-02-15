@extends('layouts.main')


@section('content')

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($news as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$item->title}}</td>
			<td> {{$item->content}}</td>
			<td> {{$item->category_id}}</td>
			<td> <img src="{{$item->img}}" alt=""></td>
			<td>
				<a href="/news/{{$item->id}}/edit">Edit</a>
				<form action="/news/{{$item->id}}" method='POST'>
					@method('DELETE')
					@csrf
					<button class="btn btn-danger">Delete</button>
				</form>
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection


@section('css')
<style>
	h1{
		text-align: center;
	}
	img{
	width: 100px;
	}
</style>
@endsection