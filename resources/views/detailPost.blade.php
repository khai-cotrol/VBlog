<!DOCTYPE html>
<html lang="en">
<head>
    <title>Andrea - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('master/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('master/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('master/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('master/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('master/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('master/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('master/css/style.css')}}">
    <style>
        .ti-more-alts:before {
            content: "\e6e2";
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
        .more-post-optns:hover > ul {
            opacity: 1;
            right: -1px;
            top: 100%;
            transform: scale(1);
            visibility: visible;
        }
        .more-post-optns > ul {
            background: #fff none repeat scroll 0 0;
            border-radius: 5px;
            display: inline-block;
            list-style: outside none none;
            margin: 0;
            opacity: 0;
            padding: 15px;
            position: absolute;
            left: 100%;
            top: -100%;
            transform: scale(0);
            transition: all 0.2s linear 0s;
            visibility: hidden;
            width: 175px;
            z-index: 9;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }

        .more-post-optns {
            cursor: pointer;
            display: inline-block;
            position: relative;
        }

        *, ::after, ::before {
            box-sizing: border-box;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<div id="colorlib-page">
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">
        <nav id="colorlib-main-menu" role="navigation">
            <figure>
                <a href="{{route('user.profile',$post->user->id)}}" title="">
                    <img src="{{asset('storage/'.$post->user->img)}}"
                         style="width: 50px; height: 50px; margin-left: 125px" alt="">
                    <br>
                    <h6 class="mb-5" style="text-align: center;margin-top: 10px">{{$post->user->name}}</h6>
                </a>
            </figure>
            <ul>
                <li><a href="{{route('post.list')}}">Home</a></li>
                <li><a href="{{route('post.creat')}}">Create Post</a></li>
{{--                <li class="colorlib-active"><a href="travel.html">Travel</a></li>--}}
                <li><a href="{{route('myProfile',\Illuminate\Support\Facades\Auth::id())}}">Profile</a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->role=='admin')
                    <li><a href="{{route('user.list')}}">list User</a></li>
                @endif
            </ul>
        </nav>

        <div class="colorlib-footer">
            <h1 id="colorlib-logo" class="mb-4"><a href="index.html"
                                                   style="background-image: url({{asset('master/images/bg_1.jpg')}});">Andrea
                    <span>Moore</span></a></h1>
            <div class="mb-4">
                <h3>Blog</h3>
            </div>
        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-8 px-md-5 py-5">
                        <p>
                        <h1 class="mb-3">{{$post->title}}</h1></p>
                        <div class="row pt-md-4">
                            <br>
                            <img src="{{asset('storage/'.$post->image)}}" style="width: 100%" alt="" class="img-fluid">
                            <div>
                            <p style="margin-top: 20px">{{$post->content}}</p>

                            <img src="{{asset('mages/image_2.jpg')}}i" alt="" class="img-fluid">
                            </div>
                            <div class="pt-5 mt-5">
                                <h3 class="mb-5 font-weight-bold"> Comments</h3>
                                <ul class="comment-list">
                                    @foreach($comments as $comment)
                                        <li class="comment" {{$comment->id}}>
                                            <div class="vcard bio">
                                                <img src="{{asset('storage/'.$comment->user->img)}}"
                                                     alt="Image placeholder">

                                            </div>
                                            <div class="comment-body">
                                                @if(\Illuminate\Support\Facades\Auth::user()->name==$comment->user->name)
                                                    <div class="more-post-optns"><i class="ti-more-alts"></i>
                                                        <ul>
                                                            <li><a class="fa fa-trash-o" href="{{route('deleteComment',$comment->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete Comment</a></li>
                                                        </ul>
                                                    </div>
                                                @endif
                                                <h3>{{$comment->user->name}}</h3>
                                                <div class="meta">{{$comment->create_at}}</div>
                                                <p>{{$comment->contents}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- END comment-list -->

                                <div class="comment-form-wrap pt-5">
                                    <h3 class="mb-5">Leave a comment</h3>
                                    <form action="{{route('comment')}}" method="post" class="p-3 p-md-5 bg-light">
                                        @csrf
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" name="contents" cols="30" rows="10"
                                                      style="width: 560px" class="form-control"></textarea>
                                            <input type="text" hidden name="user_id"
                                                   value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                            <input type="text" hidden name="post_id" value="{{$post->id}}">
                                            <div class="form-group">
                                            </div>

                                            <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- END-->
                    </div>
                    <div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
                        <div class="sidebar-box pt-md-4">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Popular Articles</h3>
                            <div class="block-21 mb-4 d-flex">
{{--                                @foreach( $allPost as $posts)--}}
                                <div class="text">
                                    <h3 class="heading"><a href="#"></a>
                                    </h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> June 28, 2019</a></div>
                                        <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                                        <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
{{--                                @endforeach--}}
                            </div>

                        </div>


                        <div class="sidebar-box subs-wrap img"
                             style="background-image: url({{asset('master/images/bg_1.jpg')}});">
                            <div class="overlay"></div>
                            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                            <form action="#" class="subscribe-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Paragraph</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                necessitatibus voluptate quod mollitia delectus aut.</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </section>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{asset('master/js/jquery.min.js')}}"></script>
<script src="{{asset('master/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('master/js/popper.min.js')}}"></script>
<script src="{{asset('master/js/bootstrap.min.js')}}"></script>
<script src="{{asset('master/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('master/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('master/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('master/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('master/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('master/js/aos.js')}}"></script>
<script src="{{asset('master/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('master/js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('master/js/google-map.js')}}"></script>
<script src="{{asset('master/js/main.js')}}"></script>

</body>
</html>
