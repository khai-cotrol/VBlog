<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>My Profile</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('css/main.min.cs')}}s">
    <link rel="stylesheet" href="{{asset('css/style.cs')}}s">
    <link rel="stylesheet" href="{{asset('css/color.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


</head>
<body>
<div class="gap2 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row merged20" id="page-contents">
                    <div class="user-profile">
                        <figure>
                            <div class="edit-pp">
                                <label class="fileContainer">
                                    <i class="fa fa-camera"></i>
                                    <input type="file">
                                </label>
                            </div>
                            <img src="{{asset('images/profile-image.jpg')}}"  alt="">
                        </figure>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col-lg-2 col-md-3">
                                    <div class="profile-author">
                                        <div class="profile-author-thumb">
                                            <img alt="author" src="{{asset('storage/'.$user->img)}}" style="width: 50px; height: 150px">
                                            <div class="edit-dp">
                                                <label class="fileContainer">
                                                    <i class="fa fa-camera"></i>
                                                    <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="author-content">
                                            <a class="h4 author-name" href="about.html">{{$user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- user profile banner  -->
                    <div class="col-lg-4 col-md-4">
                        <aside class="sidebar">
                            <div class="central-meta stick-widget">
                                <span class="create-post">Personal Info</span>
                                <div class="personal-head">

                                    <span class="f-title"><i class="fa fa-birthday-cake"></i> Birthday:</span>
                                    <p>
                                        December 17, 1985
                                    </p>
                                    <span class="f-title"><i class="fa fa-phone"></i> Phone Number:</span>
                                    <p>
                                        0{{$user->phone}}
                                    </p>

                                    <span class="f-title"><i class="fa fa-globe"></i> Country:</span>
                                    <p>
                                        {{$user->address}}
                                    </p>
                                    <span class="f-title"><i class="fa fa-envelope"></i> Email & Website:</span>
                                    <p>
                                        {{$user->email}}
                                    </p>
                                    <span class="f-title"> <a class="h4 author-name"  href="{{route('post.list')}}">back</a></span>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="central-meta">
                            <span class="create-post">My Post</span>
                            <div class="row">
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            @foreach($allPost as $posts)
                                                <div class="friend-info">
                                                    <figure>
                                                        <img src="{{asset('storage/'.$user->img)}}" style="width: 30px; height: 30px" alt="">
                                                    </figure>
                                                    <div class="friend-name">
                                                        <div class="more">
                                                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                                                                    <ul>
                                                                        <li><a class="fa fa-pencil-square-o" href="{{route('post.edit',$posts->id)}}">Edit Post</a></li>
                                                                        <li><a class="fa fa-trash-o" href="{{route('post.delete',$posts->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Post</a></li>
                                                                    </ul>
                                                            </div>
                                                        </div>
                                                        <ins><a href="time-line.html" title="">{{$user->name}}</a></ins>

                                                    </div>
                                                    <div class="post-meta">
                                                        <span><h4>{{$posts->title}}</h4> </span>
                                                        <p>
                                                            {{$posts->content}}
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
                                                                {{--                                @foreach($comments as $comment)--}}
                                                                {{--                                <div class="comet-avatar" id="{{$comment->id}}">--}}
                                                                {{--                                    <img src="images/resources/nearly3.jpg" alt="">--}}
                                                                {{--                                </div>--}}
                                                                {{--                                <div class="we-comment">--}}
                                                                {{--                                    <h5><a href="time-line.html" title="">{{$comment->user->name}}</a></h5>--}}
                                                                {{--                                    <p>{{$comment->content}}</p>--}}
                                                                {{--                                    <div class="inline-itms">--}}
                                                                {{--                                        <span>{{$comment->create_at}}</span>--}}
                                                                {{--                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
                                                                {{--                                        <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>--}}
                                                                {{--                                    </div>--}}
                                                                {{--                                </div>--}}
                                                                {{--                                @endforeach--}}
                                                            </li>
                                                            <li class="post-comment">
                                                                <div class="comet-avatar">
                                                                    <img src="images/resources/nearly1.jpg" alt="">
                                                                </div>
                                                                <div class="post-comt-box">
                                                                    <form method="post" action="{{route('comment')}}">
                                                                        @csrf
                                                                        <textarea placeholder="Post your comment" name="contents" style="width: 650px"></textarea>
                                                                        <input type="text" hidden name="user_id"
                                                                               value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                                                        <input type="text" hidden name="post_id" value="{{$posts->id}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>

</body>

</html>
