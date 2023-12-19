@extends('template')

@section('content')
    <h1>{{ $post->titulo }}</h1>
    <p> {{ $post->body }} </p>
@endsection

