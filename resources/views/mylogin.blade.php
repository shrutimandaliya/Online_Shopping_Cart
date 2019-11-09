<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="resources/assets/images/favicon.ico"/>

        <!-- App css -->
        <link href="resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="resources/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="resources/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="resources/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="resources/assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="resources/assets/images/logo_dark.png" alt="" height="30"></span>
                                            </a>
                                        </h2>
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Login</h5>
                                        <p class="m-b-0">Login to your Admin account</p>
                                    </div>
                                    <div class="account-content">
                        <form class="form-horizontal" action="{{ route('login') }}" method="post" id="form">
                                {{csrf_field()}}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">E-Mail address</label>
                                                    <input class="form-control" type="email" id="emailaddress" name="email" value="{{ old('email') }}" placeholder="john@deo.com" required>
                                                </div>
                                            </div>
                                             @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                             @endif
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <a href="{{ url('password/reset') }}" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required />
                                                </div>
                                            </div>

                                              @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                            {{-- <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                </div>
                                            </div> --}}

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Login</button>
                                                </div>
                                            </div>

                                        </form>

                                     {{--    <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-center">
                                                    <button type="button" class="btn m-r-5 btn-facebook waves-effect waves-light">
                                                        <i class="fa fa-facebook"></i>
                                                    </button>
                                                    <button type="button" class="btn m-r-5 btn-googleplus waves-effect waves-light">
                                                        <i class="fa fa-google"></i>
                                                    </button>
                                                    <button type="button" class="btn m-r-5 btn-twitter waves-effect waves-light">
                                                        <i class="fa fa-twitter"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="resources/assets/js/jquery.min.js"></script>
        <script src="resources/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="resources/assets/js/bootstrap.min.js"></script>
        <script src="resources/assets/js/metisMenu.min.js"></script>
        <script src="resources/assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="resources/assets/js/jquery.core.js"></script>
        <script src="resources/assets/js/jquery.app.js"></script>
        <!-- Parsley js -->
        <script type="text/javascript" src="{{url('/')}}/resources/assets/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function()
                {
                
                  $('#form').parsley();

              });
</script>

    </body>
</html>
{{-- @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="btn btn-danger">
        {{$error}}
    </div>
    @endforeach
@endif
 --}}


 