@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    <div class="col-md-2">
                        <img style="width: 150px;height:150px;float:left;border-radius:50%;margin-right:25px" src="/storage/cover_image/{{$user->avatar}}">
                    </div>
                    <div class="col-md-6">
                            <h2>{{$user->name}}'s Profile</h2>
                    </div>
                            <form enctype="multipart/form-data" action="/profile" method="POST">
                                <label>Update Profile Image</label>
                                <br />
                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="submit" class="pull-right btn btn-sm btn-dark" value="Submit">
                            </form>
                        </div>
            </div>
    </div>
@endsection
