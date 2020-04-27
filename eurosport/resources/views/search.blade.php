@extends('layouts.app')
@section('content')
    <div class="container">
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <table class="table table-striped">
                <tbody>
                @foreach($details as $post)
                    <div class="well">
                        <div class="row">
                            <div class="col-4">
                                <img style="width: 100%"src="/storage/cover_image/{{$post->cover_image}}">
                            </div>
                            <div class="col-8">
                                <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
