@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-4">
            <img style="width: 100%"src="/storage/cover_image/{{$post->cover_image}}">
        </div>
        <div class="col-8">
            {!! $post->body !!}

        </div>
    </div>
    <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <a href="/posts" class="btn btn-dark">Go Back</a>
            </div>
            <div class="col-md-auto">
                    @if(!Auth::guest())
                    @if((Auth::user()->id==$post->user_id)||Auth::user()->id==2)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col col-lg-2">
                            <form method="post" class="delete_form" action="{{action('PostController@destroy',$post->id)}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                        </form>
                    </div>
    </div>
    @endif
    @endif
@endsection
