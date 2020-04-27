@extends('layouts.app')
@section('content')

<div class="col-lg-4">
        <div class="card-body">
            <h3 class="card-title">{{$bet->body1}} vs {{$bet->body2}}</h3>
            <h4>{{$bet->first}}</h4>
            <h4>{{$bet->draw}}</h4>
            <h4>{{$bet->second}}</h4>
            <form action="/cart" method="POST">
            {{csrf_field()}}
                <input type="hidden" name="id" value="{{$bet->id}}">
                <input type="hidden" name="body1" value="{{$bet->body1}}">
                <input type="hidden" name="body2" value="{{$bet->body2}}">
                <button class="btn btn-secondary">Add to Cart</button>

            </form>
    </div>
</div>
@endsection
