@extends('template')

@section('content')
    <h1>Listado</h1>
    @foreach($posts as $post)
    <p>
        <b>{{$post->id}}</b>
        <a href="{{ route('post', $post->slug)}}">{{ $post->titulo}}</a>
        <br>
        <span>{{ $post->user->name }}</span>
    </p>
    @endforeach

    {{ $posts->links()}}

@endsection

