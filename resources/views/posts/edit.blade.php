@extends('layouts.errors')
@section('title', $post->title.' - Edit')
@section('form')
        <h2>Edit Post</h2>
        <p>Create a post below</p>
        <form class="" action="{{ url('/posts/'. $post->id) }}" method="post">
            @method('PATCH')
            @csrf
          <div class="form-group">
          	<label for="title">Post Title:<sup> *</sup></label>
          	<input type="text" name="title" class="form-control form-control-lg
          	{{ ($errors->has('title') ? 'is_invalid' : '') }}" value= "{{ $post->title }}">
          </div>

          <div class="form-group">
          	<label for="body">Body:<sup> *</sup></label>
          	<textarea name="body" class="form-control form-control-lg
          	{{ ($errors->has('body') ? 'is_invalid' : '') }}">
              {{ $post->body }}
            </textarea>
          	<span class="invalid-feedback">{{ $errors->body }}</span>
          </div>
          <input type="submit" class="btn btn-success" value="Update Post"></input>
        </form>
@endsection
