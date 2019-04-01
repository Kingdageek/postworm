@extends('layouts.errors')
@section('title', 'Create Post')
@section('content')
    <h2>Add Post</h2>
    <p>Create a post below</p>
    <form class="" action="{{ url('/posts') }}" method="post">
        @csrf
        <div class="form-group">
        <label for="title">Post Title:<sup> *</sup></label>
        <input type="text" name="title" class="form-control form-control-lg
        {{ ($errors->has('title') ? 'is_invalid' : '') }}" value= "{{ old('title') }}">
        </div>

        <div class="form-group">
        <label for="body">Body:<sup> *</sup></label>
        <textarea name="body" class="form-control form-control-lg
        {{ ($errors->has('body') ? 'is_invalid' : '') }}">
            {{ old('body') }}
        </textarea>
        <span class="invalid-feedback">{{ $errors->body }}</span>
        </div>
        <input type="submit" class="btn btn-success" value="Create Post"></input>
    </form>
@endsection
