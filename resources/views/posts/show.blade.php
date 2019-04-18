@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-info">Go Back</a>
    <hr>
    <h1>{{$post->title}}</h1>
    <img style="width:30%" src="/storage/cover_image/{{$post->cover_image}}">
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'button_a btn btn-danger'])}}
    {!! Form::close() !!}
        @endif
    @endif
@endsection