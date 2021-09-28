<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form class="mx-1 mx-md-4" action="{{route('Register')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" id="form3Example1c" class="@error('name')is-invalid @enderror  form-control"/>
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>
                                    @error('address')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" name="address" id="form3Example1c" class="@error('address')is-invalid @enderror  form-control"/>
                                            <label class="form-label" for="form3Example1c">Address</label>
                                        </div>
                                    </div>
                                    @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" name="phone" id="form3Example3c" class="@error('phone')is-invalid @enderror form-control"/>
                                            <label class="form-label" for="form3Example3c">phone</label>
                                        </div>
                                    </div>
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" id="form3Example3c" class="@error('email')is-invalid @enderror form-control"/>
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>
                                    @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="form3Example4c"
                                                   class="form-control"/>
                                            <label class="@error('password')is-invalid @enderror form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

{{--                                    <div class="d-flex flex-row align-items-center mb-4">--}}
{{--                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>--}}
{{--                                        <div class="form-outline flex-fill mb-0">--}}
{{--                                            <input type="password" id="form3Example4cd" class="form-control"/>--}}
{{--                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                </form>
                                <div class="form-check d-flex justify-content-center mb-5">
                                    <label class="form-check-label" for="form2Example3">
                                        <a href="{{route('formLogin')}}">Login now</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img
                                    src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png"
                                    class="img-fluid" alt="Sample image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>


