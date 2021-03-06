
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('resources/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{url('resources/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('resources/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('resources/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('resources/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{url('resources/assets/js/modernizr.min.js')}}"></script>

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
                                    <div class="text-center account-logo-box">
                                        <h2 class="text-uppercase">
                                            <a href="index.html" class="text-success">
                                                <span><img src="{{url('resources/assets/images/logo_dark.png')}}" alt="" height="30"></span>
                                            </a>
                                        </h2>
                                        <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                    </div>
                                    <div class="account-content">
                                        <div class="text-center m-b-20">
                                            <p class="text-muted m-b-0">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                                        </div>
                                        <form method="post" class="form-horizontal" action="{{url('sendMail')}}" id="form">
                                            {{csrf_field()}}

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" name="emailTo" parsley-trigger="change" required placeholder="john@deo.com">
                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Reset Password</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="clearfix"></div>

                                        <div class="row m-t-40">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Back to <a href="{{ url('register') }}" class="text-dark m-l-5"><b>Sign In</b></a></p>
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
        <script src="{{url('/')}}/{{url('/')}}/resources/assets/js/jquery.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="{{url('/')}}/resources/assets/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/metisMenu.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/waves.js"></script>
        <script src="{{url('/')}}/resources/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="{{url('/')}}/resources/assets/js/jquery.core.js"></script>
        <script src="{{url('/')}}/resources/assets/js/jquery.app.js"></script>

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