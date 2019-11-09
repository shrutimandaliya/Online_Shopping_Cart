

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

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
                                        <h5 class="text-uppercase font-bold m-b-5 m-t-50">Register</h5>
                                        <p class="m-b-0">Get access to User panel</p>
                                    </div>
                                    <div class="account-content">
                                        <form class="form-horizontal" action="{{ route('register') }}" method="post" id="form">


                                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                                             <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="firstname"><b>First Name</b></label>
                                                    <input class="form-control" type="text" id="firstname" name="first_name" placeholder="john" required data-parsley-pattern="/^[A-Za-z]/">
                                                </div>
                                            </div>
                                              @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                             @endif


                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                                             <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="lastname"><b>Last Name</b></label>
                                                    <input class="form-control" type="text" id="lastname" name="last_name" placeholder="Michael" required data-parsley-pattern="/^[A-Za-z]/">
                                                </div>
                                            </div>
                                              @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                             @endif

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="username"><b>Username</b></label>
                                                    <input class="form-control" type="text" id="username" name="username"  placeholder="Michael Zenaty" required data-parsley-pattern="/^[A-Za-z]/">
                                                </div>
                                            </div>
                                              @if ($errors->has('username'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                             @endif


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="password"><b>Password</b></label>
                                                    <input class="form-control" type="password" name="password"  id="password" placeholder="Enter your password" required>
                                                </div>
                                            </div>
                                              @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                             @endif


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress"><b>Email address</b></label>
                                                    <input class="form-control" type="email" id="emailaddress" name="email" value="{{ old('email') }}"  placeholder="john@deo.com" required>
                                                </div>
                                            </div>
                                              @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                             @endif


                            <div class="form-group{{ $errors->has('phone_num') ? ' has-error' : '' }}">

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="phone_num"><b>Contact Number</b></label>
                                                    <input class="form-control" type="text"  id="phone_num" name="phone_num" placeholder="9843791078" required>
                                                </div>
                                            </div>
                                              @if ($errors->has('phone_num'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('phone_num') }}</strong>
                                                </span>
                                             @endif
                                            

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            I accept <a href="#">Terms and Conditions</a>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign Up Free</button>
                                                </div>
                                            </div>

                                        </form>

                                       {{--  <div class="row">
                                            <div class="col-12">
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
                                            <div class="col-12 text-center">
                                                <p class="text-muted">Already have an account?  <a href="{{route('login')}}" class="text-dark m-l-5"><b>Login</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end card-box-->
                            </div>


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
        <script src="resources/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="resources/assets/js/jquery.core.js"></script>
        <script src="resources/assets/js/jquery.app.js"></script>

         <script type="text/javascript" src="{{url('/')}}/resources/assets/plugins/parsleyjs/parsley.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function()
                {
                
                  $('#form').parsley();

              });
</script>

    </body>
</html>