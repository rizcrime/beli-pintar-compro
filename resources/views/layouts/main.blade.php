<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="home" class="flexslider">
        <ul class="slides">
            <li style="background-image: url(img/slider_3.jpg)" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading">Where you meet your IT needs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(img/slider_1.jpg)" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading">Our MISSION To be the leader in IT Solution Company delivering the highest quality, innovation, and customer services.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(img/slider_2.jpg)" class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading">Our VISION To provide compelling value by delivering managed services and end-to-end hardware to software and to enhance operational efficiency and cost benefit.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Fixed navbar -->
    @include('partials.navbar')

    @yield('main_content')

    <!-- Footer -->
    @include('contact')
    {{-- @include('partials.footer') --}}

    <!-- Modal login -->
    <div class="modal fadeInUp probootstrap-animated" id="loginModal" tabindex="-1" role="dialog"
        aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog modal-md vertical-align-center">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="icon-cross"></i></button>
                    <div class="probootstrap-modal-flex">
                        <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
                        <div class="probootstrap-modal-content">
                            <form action="#" class="probootstrap-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group clearfix mb40">
                                    <label for="remember" class="probootstrap-remember"><input type="checkbox"
                                            id="remember"> Remember
                                        Me</label>
                                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                                </div>
                                <div class="form-group text-left">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-primary btn-block" value="Sign In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group probootstrap-or">
                                    <span><em>or</em></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect
                                                    with</span>
                                                Facebook</button>
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect
                                                    with</span>
                                                Google</button>
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect
                                                    with</span>
                                                Twitter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal login -->

    <!-- Modal signup -->
    <div class="modal fadeInUp probootstrap-animated" id="signupModal" tabindex="-1" role="dialog"
        aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog modal-md vertical-align-center">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="icon-cross"></i></button>
                    <div class="probootstrap-modal-flex">
                        <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
                        <div class="probootstrap-modal-content">
                            <form action="#" class="probootstrap-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Re-type Password">
                                </div>
                                <div class="form-group clearfix mb40">
                                    <label for="remember" class="probootstrap-remember"><input type="checkbox"
                                            id="remember"> Remember
                                        Me</label>
                                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                                </div>
                                <div class="form-group text-left">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group probootstrap-or">
                                    <span><em>or</em></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect
                                                    with</span>
                                                Facebook</button>
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect
                                                    with</span>
                                                Google</button>
                                            <button
                                                class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect
                                                    with</span>
                                                Twitter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal signup -->

    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>

</body>

</html>