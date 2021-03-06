<!DOCTYPE html>
<!-- saved from url=(0052)http://quomodosoft.com/html/asaas/asaas/index3.html# -->
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths gr__quomodosoft_com"
      lang="zxx" style="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="keywords" content="{{ env('APP_NAME') }},Sales Funnel, Funnel Builder, Funnel">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>{{ env('APP_NAME') }}</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="http://quomodosoft.com/html/asaas/asaas/images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('images/favicon.png') }}">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/normalize.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/magnific-popup.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/animate.css') }}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/asaas/responsive.css') }}">

    @yield('styles')

    <style>
        footer {
            background-image: none !important;
            background-color: #2a3f54;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-gr-c-s-loaded="true">
<div class="slicknav_menu">

    <a href="{{ route('index') }}"><img
                src="{{ asset('images/logo_cartumo_trans.png') }}" alt=""></a>
    <a href="{{ route('login') }}" class="bttn-1s">Sign
        In</a>
    <a href="javascript:void(0)" aria-haspopup="true" role="button" tabindex="0"
            class="slicknav_btn slicknav_collapsed" style=""><span class="slicknav_menutxt"></span><span
                class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span
                    class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
    <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
        <li class="active"><a href="{{ route('index') . '#home-page' }}" role="menuitem"
                              tabindex="-1">Home</a></li>
        <li><a href="{{ route('index') . '#service-page' }}" role="menuitem" tabindex="-1">Services</a>
        </li>
        <li><a href="{{ route('index') . '#feature-page' }}" role="menuitem" tabindex="-1">Features</a>
        </li>
        <li><a href="{{ route('index') . '#price-page' }}" role="menuitem" tabindex="-1">Pricing</a>
        </li>
        <li><a href="{{ route('index') . '#team-page' }}" role="menuitem"
               tabindex="-1">Team</a></li>
        <li><a href="{{ route('index') . '#contact-page' }}" role="menuitem" tabindex="-1">Contact</a>
        </li>
    </ul>
</div>
<!-- Prealoader-->
<div class="preloader" style="display: none;">
    <div class="waves-block">
        <div class="icon">
            <i class="fa fa-hourglass-half"></i>
        </div>
        <div class="waves wave-1"></div>
        <div class="waves wave-2"></div>
        <div class="waves wave-3"></div>
    </div>
</div>
<nav class="navbar mainmenu-area affix-top" data-spy="affix" data-offset-top="200">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}"><img
                        src="{{ asset('images/logo_cartumo_trans.png') }}" alt="" style="width: 64%;margin-top: -6px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="mainmenu">
            <div class="navbar-header navbar-right hidden visible-lg padding-left-50">
                <!--<a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal" class="bttn-1">Sign
                    In</a>-->
                <a href="{{ route('login') }}" class="bttn-1">Sign
                    In</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ route('index') . '#home-page' }}">Home</a></li>
                <li class=""><a href="{{ route('index') . '#service-page' }}">Services</a>
                </li>
                <li class=""><a href="{{ route('index') . '#feature-page' }}">Features</a>
                </li>
                </li>
                <li class=""><a href="{{ route('index') . '#price-page' }}">Pricing</a></li>
                <li class=""><a href="{{ route('index') . '#team-page' }}">Team</a></li>
                <li class=""><a href="{{ route('index') . '#contact-page' }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main-Menu-Area / -->

<!-- Header-Area / -->
@yield('content')
<!--<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title" title="Trusted By">Trusted By</h4>
                    <p>Notifications keep you informed of all updates. Customize them to receive as many, or as few, as
                        you want.</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            <div class="sponsors owl-carousel owl-theme owl-responsive-1000 owl-center owl-loaded">


                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transition: all 1s ease 0s; width: 3510px; transform: translate3d(-1170px, 0px, 0px);">
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-1.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-2.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-3.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-4.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-5.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-1.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-2.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item active center" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-3.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-4.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-5.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-1.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-2.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-3.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-4.png" alt="sponsor">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 234px; margin-right: 0px;">
                            <div class="item">
                                <img src="./aSaas _ HTML OnePage Template_files/sponsor-5.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div class="owl-dots" style="">
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot active"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                        <div class="owl-dot"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<footer class="footer-area v3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center text-white">
                <h3 class="heading-3 text-white" title="Join our community of 250.000+ users">Join our community of
                    250+ users</h3>
                <form id="frm_subscription" class="subscrie-form v2" action="" method="post" novalidate="true">
                    <label class="mt10" for="mc-email"></label>
                    <input type="email" class="control" id="subscribe_email" name="subscribe_email"
                           placeholder="Enter email address here" required>
                    <button type="submit" class="submit">Subscribe</button>
                    {{ csrf_field() }}
                </form>
                <div class="space-60"></div>
                <div class="copyright">&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</div>
            </div>
        </div>
    </div>
</footer>


<div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

        <div class="modal-content" id="login-modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
            </div>

            <div class="modal-body">
                <form id="frm_login" class="form-horizontal clearfix" method="POST"
                      action="{{ route('admin.login.submit') }}">
                    {{ csrf_field() }}
                    <fieldset class="col-md-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="rows">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="rows">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="rows">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                    </fieldset>
                </form>
            </div>

            <div class="modal-footer">
                <p>
                    <a id="FPModal" href="javascript:void(0)">Forgot Password?</a> |
                    <a id="signupModal" href="javascript:void(0)">Register Here!</a>
                </p>
            </div>

        </div>

        <div class="modal-content" id="signup-modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Signup Now!</h4>
            </div>

            <div class="modal-body">
                <form class="form-signin" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    @if( !empty($_GET['plan']) )
                        <input type="hidden" name="hid_plan_type" value="{{ $_GET['plan'] }}">
                    @endif
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>

                        <div class="">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="Full Name" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label">E-Mail Address</label>

                        <div class="">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="Email Address" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Confirm Password</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Retype Password" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 0px">
                        <div class="col-md-6s">
                            <label for="secret_code" class="control-label" style="text-align:left">
                                <input type="checkbox" name="secret_code" id="secret_code"/>
                                Have a Secret Code?
                            </label>

                            <input id="secret_code_text" type="text" class="form-control" name="secret_code_text"
                                   placeholder="Enter the secret code" style="display: none">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4s"></div>
                        <label for="agree_terms" class="control-label" style="text-align:left">
                            <input type="checkbox" name="agree_terms" id="agree_terms" required/>
                            I Agree to the Terms and Conditions
                        </label>
                    </div>

                    <div class="form-group clearfix">
                        <div class="col-md-6s col-md-offset-4s">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                Register
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <p>Already a Member ? <a id="loginModal" href="javascript:void(0)">Login Here!</a></p>
            </div>
        </div>

        <div class="modal-content" id="forgot-password-modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
            </div>

            <div class="modal-body">
                <form method="post" id="Forgot-Password-Form" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input name="email" type="email" class="form-control input-lg" placeholder="Enter Email"
                                   required data-parsley-type="email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block btn-lg">
                        <span class="glyphicon glyphicon-send"></span> SUBMIT
                    </button>
                </form>
            </div>

            <div class="modal-footer">
                <p>Remember Password ? <a id="loginModal1" href="javascript:void(0)">Login Here!</a></p>
            </div>

        </div>

    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Vendor-JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<!--Plugin-JS-->
<script src="{{ asset('frontend/js/asaas/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/ajaxchimp.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/contact-form.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/slicknav.min.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/asaas/wow.min.js') }}"></script>
<!--Main-active-JS-->
<script src="{{ asset('frontend/js/asaas/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>

<script>
    $(document).ready(function () {

        $("#frm_login").submit(function (e) {

            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    if (response.success) {
                        location.reload();
                    }
                },
                error: function (jqXHR) {
                    console.log(jqXHR.responseText);
                }
            });
        });

        $("#contactForm").parsley();

        $("#contactForm").submit(function (e) {

            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();

            // get values from FORM
            var name = $("input#form-name").val();
            var email = $("input#form-email").val();
            var phone = $("input#form-phone").val();
            var message = $("textarea#form-message").val();
            var firstName = name; // For Success/Failure Message
            var button_text = $("#btnSubmit").html();
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "{{ route('site.contactus') }}",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message,
                    _token: "{{ csrf_token() }}"
                },
                cache: false,
                beforeSend: function () {
                    $("#btnSubmit").html('<i class="fa fa-circle-o-notch fa-spin"></i>');
                    $("#btnSubmit").attr('diabaled', 'disabled');
                },
                success: function () {
                    // Enable button & show success message
                    $("#btnSubmit").attr("disabled", false);
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    $("#btnSubmit").html(button_text);
                    $("#btnSubmit").attr('diabaled', false);

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function (a, b) {
                    console.log(a.responseText);
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields

                    $("#btnSubmit").html(button_text);
                    $("#btnSubmit").attr('diabaled', false);

                    $('#contactForm').trigger("reset");
                },
            });
        });

        $("#video_icon_animated").click(function (e) {

            e.preventDefault();

            $(this).parent().hide();
            $(this).parent().next().show();

            //play the video
            //$(this).parent().next().find('iframe').attr("src", $(this).parent().next().find('iframe').attr("src").replace("autoplay=0", "autoplay=1"));

            $(this).parent().next().find('iframe').attr("src", $(this).parent().next().find('iframe').attr("src") + "&autoplay=1");
            e.preventDefault();
        });

        $("#frm_subscription").submit(function(e) {

            e.preventDefault();

            var email = $(this).find("input[name='subscribe_email']");
            var button = $("#btn-subcribe");

            if ( email.val().length > 0 ) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('site.subscription') }}",
                    data: $(this).serialize(),
                    beforeSend: function () {
                        $(button).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
                    },
                    success: function (response) {
                        console.log(response);

                        var json = JSON.parse(response);

                        if (json.status == 'success') {

                            $(button).html('Subscribe');
                            $(email).val('');

                            alert(json.message);
                        }
                    },
                    error: function (a, b) {
                        console.log(a.responseText);
                    }
                });
            } else {
                alert("Please enter email address to continue.");
                $(email).focus();
            }
        });
    });

</script>

<!--<a id="scrollUp" href="#top"
   style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>-->
</body>
</html>