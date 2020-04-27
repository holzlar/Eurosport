@extends('layouts.app')
@section('content')
    <h1>Bets</h1>
    @if (count($bets)>0)
            <div class="well">
                <div class="row">
                    @foreach($bets as $bet)
                        <div class="col-4">
                            <h2>{{$bet->body1}} -  {{$bet->body2}} </h2>
                            <p>{{$bet->body1}} wins <strong> {{$bet->first}}</strong>&ensp;Draw <strong>{{$bet->draw}} </strong> &ensp;{{$bet->body2}} wins <strong>{{$bet->second}}</strong> &ensp;</p>
                            <p><a class="btn btn-secondary" href="/betting/{{$bet->id}}" role="button">Add to cart</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        {{$bets->links()}}
    @else<p>No Posts</p>
    @endif
@endsection

