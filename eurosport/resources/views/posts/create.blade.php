@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>

            <textarea class="form-control" id="summary-ckeditor" name="body" cols="30" rows="10" placeholder="Body Text"></textarea>
            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <script>
                CKEDITOR.replace( 'summary-ckeditor' );
            </script>
        </div>
        <div class="form-group">
            <div class="form-group">
                <td width="30"><input type="file" name="cover_image" /></td>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
