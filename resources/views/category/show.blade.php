@extends('layouts.main')


@section('content')
		<h1>{{$category->name}}</h1>
		{{--dd($category->news)--}}
		{{--
			получаем новости через связи моделей 
		@foreach($category->news as $item)
			<article>
				<h3>
					<a href="">{{$item->title}}</a>
				</h3>
			</article>
		@endforeach

--}}
@foreach($news as $item)
			<article>
				<h3><a href="">{{$item->title}}</a></h3>
					{!! Str::words(strip_tags($item->content),2,
						'<a href="/news/' .$item->id.'"> Read more</a>')
						!!}
				
			</article>
		@endforeach

		{{$news->links()}}
@endsection

@section('title', 'Create category')