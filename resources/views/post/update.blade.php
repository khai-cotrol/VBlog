@extends('layout.master')
@section('content')
    <div class="central-meta postbox">
        <span class="create-post">Update Post</span>
        <div class="new-postbox">
            <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="newpst-input">
                    <input type="text" style="width: 1125px" name="title" value="{{$post->title}}" placeholder="title">
                    <input rows="2" name="contents" value="{{$post->content}}" style="background-color: lightgrey;width: 1125px; height: 100px" >
                </div>
                <div class="attachments">
                    <div class="form-group">
                        <label for="inputDescription">Image</label>
                        <input type="file" value="" name="image" id="image"
                               class="form-control">
                    </div>
                    <img src="{{asset('storage/'.$post->image)}}"style="width: 100px;height: 100px" alt="">
                    <div class="form-group">
                        <input hidden type="number" id="inputUser_id" name="user_id" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    </div>
                    <button class="post-btn" type="submit" data-ripple="" style="margin-left: 10px">Accset</button>
                    <a href="{{route('post.list')}}" class="btn btn-danger" style="width: 1125px; height: 30px">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
