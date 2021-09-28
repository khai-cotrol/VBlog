@extends('layout.master')
@section('content')
    <div class="container">
        <div class="central-meta item">
            <div class="user-post">
                <div class="friend-info">
                    <figure>
                        <img src="{{asset('storage/'.$post->user->img)}}" style="width: 30px; height: 30px" alt="">
                    </figure>
                    <div class="friend-name">
                        <ins><a href="{{route('user.profile',$post->user->id)}}" title="">{{$post->user->name}}</a>
                        </ins>

                    </div>
                    <div class="post-meta">
                        <span><h4>{{$post->title}}</h4> </span>
                        <p>
                            {{$post->content}}
                        </p>
                        <figure>
                            <div class="img-bunch">
                                <div class="row">
                                    <figure>
                                        <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                            <img src="{{asset('/storage'.$post->image)}} width: 300px height: 300px" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </figure>
                        <div class="we-video-info">

                    </div>
                    <div class="coment-area" style="display: block;">
                        <ul class="we-comet">
                            @foreach($comments as $comment)
                            <li>
                                    <div class="comet-avatar" id="{{$comment->id}}">
                                        <img src="{{asset('/storage/'.$comment->user->img)}}" style="height: 20px;width: 20px" alt="">
                                    </div>
                                <div class="friend-name">
                                    <div class="more">
                                        @if(\Illuminate\Support\Facades\Auth::user()->name==$comment->user->name)
                                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                <ul>
                                                    <li><a class="fa fa-trash-o" href="{{route('deleteComment',$comment->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Comment</a></li>
                                                </ul>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="we-comment">
                                        <h5><a href="time-line.html" title="">{{$comment->user->name}}</a></h5>
                                        <br>
                                        <p>{{$comment->contents}}</p>
                                        <div class="inline-itms">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <li class="post-comment">
                                <div class="comet-avatar">
                                    <img src="images/resources/nearly1.jpg" alt="">
                                </div>
                                <div class="post-comt-box">
                                    <form method="post" action="{{route('comment')}}">
                                        @csrf
                                        <textarea placeholder="Post your comment" name="contents"
                                                  style="width: 1050px"></textarea>
                                        <input type="text" hidden name="user_id"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        <input type="text" hidden name="post_id" value="{{$post->id}}">
                                        <button type="submit" style="background-color:black">comment</button>
                                    </form>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div><!-- album post -->
    </div>
@endsection
