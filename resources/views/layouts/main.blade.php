@include('layouts.header')



	<div class="container">
		<div class="row">
			<div class="col-md-4">
				@section('sidebar')
					<h3>Категории Новостей</h3>
					<div class="list-group">
						@foreach($categoriesSidebar as $item)
						<a href="/category/{{$item->id}}" class="list-group-item  {{Request::is('category/'.$item->id) ? 'active' : ''}}">
							{{$item->name}}

							<span class="badge badge-secondary">{{$item->news->count()}}</span>
						</a>
						@endforeach
					</div>
				@show
			</div>
			<div class="col-md-8">
				@yield('content')
			</div>
		</div>
	</div>
	
@include('layouts.footer')	
