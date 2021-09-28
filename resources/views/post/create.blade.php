@extends('layout.master')
@section('content')
    <div class="central-meta postbox">
        <span class="create-post">Create post</span>
        <div class="new-postbox">
            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="newpst-input">
                    <input type="text" style="width: 1125px" name="title" placeholder="title">
                    <textarea rows="2" style="background-color: lightgrey;width: 1125px" name="contents" placeholder="Share some what you are thinking?"></textarea>
                </div>
                <div class="attachments">
                    <div class="form-group">
                        <label for="inputDescription">Image</label>
                        <input type="file" value="" name="image" id="image"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <input hidden type="number" id="inputUser_id" name="user_id" class="form-control" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    </div>
                    <button class="post-btn" type="submit" data-ripple="">Post</button>
                    <a href="{{route('post.list')}}" class="btn btn-danger" style="width: 1125px; height: 30px; ">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
