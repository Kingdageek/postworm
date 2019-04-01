@extends('layouts.app')
@section('content')
    <a href="{{ url('/posts') }}" class="btn btn-light"><i class= "fa fa-backward"></i> Back to all posts</a>
    <div class="card card-body bg-light mt-5">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <span class="text-danger">{{ $error }}</span><br>
            @endforeach
        @endif
        @yield('form')
    </div>
@endsection
