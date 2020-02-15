@extends('layouts.main')

@section('content')
	@if(session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $item)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$item->name}}</td>
			<td>
				<a href="/category/{{$item->id}}/edit">Edit</a>
				<form action="/category/{{$item->id}}" method='POST'">
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