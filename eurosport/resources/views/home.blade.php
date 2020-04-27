@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->isOnline())
                                        <li class="text-muted">Online</li>
                                        @else
                                        <li class="text-muted">Offline</li>
                                        @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <hr>
                        <div class="row justify-content-md-center">
                            <div class="col">
                                <a class="btn btn-dark" class="nav-link" href="/posts/">View Posts</a>

                            </div>
                            <div class="col-md-auto">
                                <a class="btn btn-dark" class="nav-link" href="/posts/create">Create Post</a>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
