@include('layouts.header')

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				@section('sidebar')
					<h3>Категории Новостей</h3>
				@show
			</div>
			<div class="col-md-8">
				@yield('content')
			</div>
		</div>
	</div>
	
@include('layouts.footer')	
