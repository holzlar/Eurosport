@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    @if(count($errors)>0)
        <div class="alert alert-danger">
        </div>
    @endif
    <form method="post" action="{{action('PostController@update',$id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PATCH"/>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text"  class="form-control" name="title"  value="{{$post->title}}" />
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea  class="form-control" id="summary-ckeditor" name="body" cols="30" rows="10" >{!!$post->body!!}</textarea>

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
        <input type="submit" class="btn btn-primary" value="Edit" />
    </form>
@endsection
