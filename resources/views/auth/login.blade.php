<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::asset('main/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="f{{ URL::asset('main/fonts/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ URL::asset('main/css/custom.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/tscstyle.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('main/css/icheck/flat/green.css') }}" rel="stylesheet">


    <script src="{{ URL::asset('main/js/jquery.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

<div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                @include('messages')
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('auth/login') }}">
                        {!! csrf_field() !!}

                        <img src="{{ URL::asset('main/images/mrhe_logo.png') }}" alt="" class="tsc_logo">


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}"/>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            </div>
                        </div>
                        </div>
                        <div class="login_btn">
                            <button type="submit" name="button" class="btn btn-default submit"> Login </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>©2015 All Rights Reserved.<br/>Mohammed Bin Rashid Housing Est.</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

    </body>
