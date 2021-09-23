@extends('layout.master')
@section('content')
    <div class="container">
        <div class="central-meta item">
            <div class="user-post">
                @foreach($posts as $post)
                <div class="friend-info">
                    <figure>
                        <img src="" alt="">
                    </figure>
                    <div class="friend-name">
                        <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                                <ul>
                                    <li><a class="fa fa-pencil-square-o" href="{{route('post.edit',$post->id)}}">Edit Post</a></li>
                                    <li><a class="fa fa-trash-o" href="{{route('post.delete',$post->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                        <ins><a href="time-line.html" title="">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></ins>

                    </div>
                    <div class="post-meta">
                        <span><h4>{{$post->title}}</h4> </span>
                        <p>
                            {{$post->content}}
                        </p>
                        <figure>
                            <div class="img-bunch">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <figure>
                                            <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                                <img src="images/resources/album1.jpg" alt="">
                                            </a>
                                        </figure>
                                        <figure>
                                            <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                                <img src="images/resources/album2.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <figure>
                                            <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                                <img src="images/resources/album6.jpg" alt="">
                                            </a>
                                        </figure>
                                        <figure>
                                            <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                                <img src="images/resources/album5.jpg" alt="">
                                            </a>
                                        </figure>
                                        <figure>
                                            <a href="#" title="" data-toggle="modal" data-target="#img-comt">
                                                <img src="images/resources/album4.jpg" alt="">
                                            </a>
                                            <div class="more-photos">
                                                <span>+15</span>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <ul class="like-dislike">
                                <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                                <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                                <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                        </figure>
                        <div class="we-video-info">
                            <ul>
                                <li>
                                    <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                                </li>
                                <li>
																<span class="comment" title="Comments">
																	<i class="fa fa-commenting"></i>
																	<ins>52</ins>
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
                                <div class="comet-avatar">
                                    <img src="images/resources/nearly3.jpg" alt="">
                                </div>
                                <div class="we-comment">
                                    <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                    <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                    <div class="inline-itms">
                                        <span>1 year ago</span>
                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                        <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                    </div>
                                </div>

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
                @endforeach
            </div>
        </div><!-- album post -->
    </div>
@endsection
