@extends('layouts.post')
@section('content')
<div class="row mb-3">
		<div class="col-md-6">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-6">
			<a href="{{ url('posts/create') }}" class="btn btn-primary pull-right">
				<i class="fa fa-pencil"></i> Add Post
			</a>
		</div>
	</div>
    @foreach($posts as $post)
	<div class = "card bg-light mb-3">
		<div class="card-body mb-3 pl-5 pr-5 p-2">
			<h4 class="card-title">{{ $post->title }}</h4>
			<div class="bg-light mb-3">Written By <a href="{{ url('/'. $post->user->username) }}">
				{{ $post->user->firstName.' '. $post->user->lastName }}</a> On {{ $post->created_at->toFormattedDateString() }}</div>
			<p class="card-text">{!! $post->body !!}</p>

			<div>
				<a href="{{ url('/posts/'.$post->id) }}" class="btn btn-dark pull-right ml-2">More</a>
				<a class="btn btn-primary pull-right ml-2" href="#!" id= "likebtn{{ $post->id }}" onclick="add_like({{ $post->id }})">
                    Like
				</a>
				<a href="#!" data-toggle="modal" data-target="#likesModal" class="pull-right" onclick="show_likes({{ $post->id }})">
					<small {{ ($post->likes > 0) ? 'data-toggle="tooltip" title="View likes" data-placement="top"' : '' }}>
						<span id="post_{{ $post->id }}_likes">
						</span> like this
					</small>
				</a>
			</div>
		</div>
	</div>
	@endforeach
@endsection
