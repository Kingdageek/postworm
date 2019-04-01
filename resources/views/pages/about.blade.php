@extends('layouts.app');
@section('title', 'Postworm | About')
@section('content')
    <h1>{{ $title }}</h1>
    <p>{!! $description !!}</p>
    <p>Version: <strong>{{ $version }}</strong></p>
@endsection
