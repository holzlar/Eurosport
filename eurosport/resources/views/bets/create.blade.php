@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    <form method="post" action="{{route('bets.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label for="body1">Body</label>
            <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <div class="form-group">
            <label for="body2">Body</label>
            <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
