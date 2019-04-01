@extends('layouts.app')
@section('title', "$post->title")
@section('content')
    <a href="{{ url('/posts') }}" class="btn btn-light"><i class= "fa fa-backward"></i> Back To All Posts</a>
	<h1>{{ $post->title }}</h1>
	<div class="bg-secondary text-white p-2 mb-3">
		Written By <a href="{{ url('/'. $post->user->username) }}">
            {{ $post->user->firstName.' '. $post->user->lastName }}</a> on {{ $post->created_at }}

	</div>
	<p>{!! $post->body !!}</p>

	@if (auth()->id() === $post->userId)
		<a class="btn btn-dark" href="{{ url('/posts/'. $post->id . '/edit') }}" type="button">Edit</a>

        <form method="post" action="{{ url('/posts/'. $post->id) }}" class="pull-right" id="delete-form" onclick="
            if (! confirm('Sure to delete this post? This cannot be undone')) {
                event.preventDefault();
            }
            ">
            @method('delete')
            @csrf
			<input type="submit" class="btn btn-danger" id= "delete" value="Delete"></input>
		</form>
    @endif
@endsection
