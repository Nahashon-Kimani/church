


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main-semidark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 10:16:47 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/eduadmin-template/images/favicon.ico">

    <title>EduAdmin - Log in </title>
  
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('../eduadmin/assets/css/vendors_css.css ') }}">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{ asset('../eduadmin/assets/css/style.css ') }}">
    <link rel="stylesheet" href="{{ asset('../eduadmin/assets/css/skin_color.css ') }}">   

</head>
    
<body class="hold-transition theme-primary bg-img" style="background-image: url(../eduadmin/assets/images/auth-bg/bg-1.jpg)">
    
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">   
            
            <div class="col-12">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded30 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0">Sign in to continue to PCEA Admin.</p>                         
                            </div>
                            <div class="p-40">
                               <form method="POST" action="{{ route('login') }}">
                                 @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            </div>
                                              
                                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror pl-15 bg-transparent" name="email" placeholder="Enter Email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            </div>
                                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror pl-15 bg-transparent" placeholder="Enter Password" name="password" required autocomplete="current-password">

                                            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="checkbox">
                                            <input name="remember" type="checkbox" id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }} >
                                            <label for="basic_checkbox_1">Remember Me</label>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                         <div class="fog-pwd text-right">
                                            <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                          <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                </form> 
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? <a href="{{ route('register') }}" class="text-warning ml-5">Sign Up</a></p>
                                </div>  
                            </div>                      
                        </div>
                        <div class="text-center">
                          <p class="mt-20 text-white">- Sign With -</p>
                          <p class="gap-items-2 mb-20">
                              <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
                              <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
                              <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
                            </p>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{ asset('../eduadmin/assets/js/vendors.min.js ' ) }}"></script>
    <script src="{{ asset('../eduadmin/assets/js/pages/chat-popup.js ' ) }}"></script>
    <script src="{{ asset('../eduadmin/assets/icons/feather-icons/feather.min.js ' ) }}"></script>    

</body>

<!-- Mirrored from www.multipurposethemes.com/admin/eduadmin-template/main-semidark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Dec 2020 10:16:47 GMT -->
</html>

