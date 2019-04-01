@extends('layouts.app')
@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-light"><i class= "fa fa-backward"></i> Back To All Posts</a>
	<div class="row mb-3">
		<div class="col-md-6">
			<h1>{{ ($user->id==auth()->id())?"Your":$user->firstName.' '.$user->lastName."'s" }} Posts</h1>
		</div>
	</div>
	@foreach ($user->posts as $post)
		<div class="card-body mb-3 p-2">
			<h4 class="card-title"> {{ $post->title }}</h4>
			<div class="bg-light mb-3">Written By
				<a href="{{ route('users.index', ['user' => $user->username]) }}">
                    {{ $user->firstName.' '. $user->lastName }}
                </a> On {{ $post->created_at->toFormattedDateString() }}</div>
			<p class="card-text">{{ $post->body }}</p>
			<a class="btn btn-primary pull-right" href="{{ $post->id }}">
  				Likes <span class="badge badge-light">4</span>
			</a>
			<a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-dark">More</a>
		</div>
	@endforeach
@endsection
