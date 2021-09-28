@extends('layout.master')
@section('content')
    <div class="container">
        <div class="central-meta item">
            <div class="user-post">
                @foreach($posts as $post)
                <div class="friend-info">
                    <figure>
                        <img src="{{asset('storage/'.$post->user->img)}}" style="width: 30px; height: 30px" alt="">
                    </figure>
                    <div class="friend-name">
                        <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                                    @if(\Illuminate\Support\Facades\Auth::user()->id==$post->user->id)
                                <ul>
                                    <li><a class="fa fa-pencil-square-o" href="{{route('post.edit',$post->id)}}">Edit Post</a></li>
                                    <li><a class="fa fa-trash-o" href="{{route('post.delete',$post->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Post</a></li>
                                </ul>
                                    @endif
                            </div>
                        </div>
                        <ins><a href="{{route('user.profile',$post->user->id)}}" title="">{{$post->user->name}}</a></ins>

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
                                                <img src="{{asset('storage/'.$post->image)}}  " style="width:300px; height:300px"   alt="">
                                            </a>
                                        </figure>
                                </div>
                            </div>
                        </figure>
                        <div class="we-video-info">
                            <ul>

                                <li>
																<span class="comment" title="Comments">
                                                                    <a href="{{route('commentByPost',$post->id)}}" title="" class="showmore underline"><i class="fa fa-commenting"></i></a>


																</span>
                                </li>
                            </ul>
                            <div class="users-thumb-list">
                                <a data-toggle="tooltip" title="Anderw" href="#">
                                    <img alt="" src="images/resources/userlist-1.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="coment-area" style="display: block;">
                        <ul class="we-comet">
                            <li>
                                <a href="{{route('commentByPost',$post->id)}}" title="" class="showmore underline"> Comments</a>
                            </li>
                            <li class="post-comment">
                                <div class="comet-avatar">
                                    <img src="images/resources/nearly1.jpg" alt="">
                                </div>
                                <div class="post-comt-box">
                                    <form method="post" action="{{route('comment')}}">
                                        @csrf
                                        <textarea placeholder="Post your comment" name="contents" style="width: 1050px"></textarea>
                                        <input type="text" hidden name="user_id"
                                               value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                        <input type="text" hidden name="post_id" value="{{$post->id}}">
                                        <button type="submit" style="background-color:black" >comment</button>
                                    </form>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                    <br>
                    <br>
                    <br>
                @endforeach
            </div>
        </div><!-- album post -->
    </div>
@endsection
