@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
        <h1 class="display-3">{{ $title }}</h1>
        <p class="lead">{{ $description }}</p>
        </div>
    </div>
@endsection
