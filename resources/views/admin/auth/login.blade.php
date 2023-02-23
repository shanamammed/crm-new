<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="#" name="description" />
        <meta content="Dofody" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="icon" type="image/png" href="{{ asset('/images/logo_sm.png') }}">
        <!-- App css -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="plugins/toaster/toaster.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('/js/modernizr.min.js') }}"></script>
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
                                            <a href="#" class="text-success">
                                                <span><img src="{{ asset('/images/logo.png') }}" alt="" height="40"></span>
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">admin login</h6>
                                    </div>
                                    <div class="account-content">
                                        <form id="Myform" class="form-horizontal" method="post" action="{{ route('adminLoginPost') }}">
                                         @csrf
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">Username</label>
                                                    <input class="form-control" type="text" name="email" id="email" required="" placeholder="Enter your username">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20 text-center">
                                                <div class="col-12">
                                                  
                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-success waves-effect waves-light" type="submit">Sign In</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <p class="text-center" style="color: #fff;"><span id="copyright">&copy;</span> SAYG</p>
                            </div>                            <!-- end card-box-->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/waves.js') }}"></script>
        <script src="{{ asset('/js/jquery.slimscroll.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('/js/jquery.core.js') }}"></script>
        <!--<script src="{{ asset('/js/jquery.app.js') }}"></script>-->
        <script src="plugins/toaster/toaster.min.js') }}"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js') }}/latest/js/toastr.min.js') }}"></script> 
        
<!--  -->
        <script type="">
        $('#Myform').on('submit', function(e){
         e.preventDefault();    
          email      = $('#email').val();
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          
          if(!regex.test(email)) 
          {
                toastr.error('Please enter a valid email');
          }
          else
          {
              document.getElementById("Myform").submit();
              return true;
                     
          }
          
          
      });
      
      $('#copyright').click(function(e){
              e.preventDefault();
              window.open('https://www.sigosoft.com/');
          });
    </script>
    </body>
</html>