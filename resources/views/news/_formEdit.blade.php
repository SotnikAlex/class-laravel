
@csrf
<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$news->title}}">

		@error('title')
    		<div class="text-danger">{{ $message }}</div>
		@enderror
</div>
	
<div class="form-group">
		<label for="content">Content:</label>
			<textarea class="form-control @error('content') is-invalid @enderror" name="content">
				{{$news->content}}
			</textarea>

		@error('content')
    		<div class="text-danger">{{ $message }}</div>
		@enderror
</div>

<div class="form-group">
		<label for="category">Category:</label>
			<select class="form-control @error('category') is-invalid @enderror" name="category">
				@foreach($categories as $category)
				   
				        <option value="{{$category->id}}" {{$news->category_id == $category->id ? "selected" : ""}} 
				        >{{$category->name}}</option>
				     
				@endforeach
			</select>

		@error('category')
    		<div class="text-danger">{{ $message }}</div>
		@enderror
</div>

<div class="form-group">
		<label for="img">Image:</label>
		<input type="file" class="form-control @error('img') is-invalid @enderror" name="img" value="{{$news->img}}">

		@error('img')
    		<div class="text-danger">{{ $message }}</div>
		@enderror
</div>








	<button type="submit" class="btn btn-primary">Send</button>