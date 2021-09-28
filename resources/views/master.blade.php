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
</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><img src="" alt=""></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight">
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="{{route('post.list')}}">Home</a></li>
                <li><a href="{{route('post.creat')}}">Create Post</a></li>
{{--                <li><a href="travel.html">Travel</a></li>--}}
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
                <h3>Blog du lịch</h3>
            </div>

        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-8 py-5 px-md-5">
                        <div class="row pt-md-4">
                            @foreach($posts as $post)
                                <div class="col-md-12">
                                    <div class="blog-entry ftco-animate d-md-flex">
                                        <a href="{{route('commentByPost',$post->id)}}" class="img img-2"
                                           style="background-image: url({{asset('storage/'.$post->image)}});"></a>
                                        <div class="text text-2 pl-md-4">
                                            <h3 class="mb-2"><a
                                                    href="{{route('commentByPost',$post->id)}}">{{$post->title}}</a>
                                            </h3>
                                            <div class="meta-wrap">
                                                <p class="meta">
                                                    <span><i class="icon-calendar mr-2"></i>{{$post->created_at}}</span>
                                                    <span><a href="{{route('user.profile',$post->user->id)}}"><i
                                                                class=""></i>by {{$post->user->name}}</a></span>
                                                </p>
                                            </div>
                                            <p><a href="{{route('commentByPost',$post->id)}}" class="btn-custom">Read
                                                    More <span class="ion-ios-arrow-forward"></span></a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- END-->
                    </div>
                    <div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
                        <a class="dropdown-item"  href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        <div class="sidebar-box pt-md-4">
                            <form action="{{route('post.search')}}" method="get" class="search-form">
                                <div class="form-group">
                                    @csrf
                                    <span class="icon icon-search"></span>
                                    <input type="text" name="title" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">List User</h3>
                            @foreach($users as $user )
                            <ul class="categories">
                                <li><a href="{{route('user.profile',$user->id)}}">{{$user->name}} </a></li>

                            </ul>
                            @endforeach
                        </div>
                        <div class="sidebar-box subs-wrap img py-4"
                             style="background-image: url({{asset('master/images/bg_1.jpg')}});">
                            <div class="overlay"></div>
                            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                            <p class="mb-4"></p>


                            <div class="sidebar-box ftco-animate">
                                <h3 class="sidebar-heading">Paragraph</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                                    necessitatibus voluptate quod mollitia delectus aut..</p>
                            </div>
                        </div><!-- END COL -->
                    </div>
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
