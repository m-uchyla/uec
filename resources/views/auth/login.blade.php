<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!--favicon-->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('resources/main/img/favicon.png', true) }}">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('resources/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('resources/admin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('resources/admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('resources/admin/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme4">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper" style="margin-top:150px"> 

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('resources/admin/images/logo-icon_UEC.png') }}" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Logowanie</div>
      <form method="POST" action="{{ route('login') }}">
      @csrf
			  <div class="form-group">
			  <label for="email" class="sr-only">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="email" name="email" class="form-control input-shadow @error('email') is-invalid @enderror" placeholder="Podaj adres email" autocomplete="email" autofocus required>
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="password" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="password" class="form-control input-shadow @error('password') is-invalid @enderror" placeholder="Wprowadź hasło" required>
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<!-- <div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <div class="form-group col-6 text-right">
			  <a href="reset-password.html">Reset Password</a>
			 </div>
			</div> -->
			 <button type="submit" class="btn btn-light btn-block">Zaloguj</button>
			  <div class="text-center mt-3" style="margin-bottom:16px">Lub</div>
			  

			 <!-- <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div> -->
			 
			 </form>
       <button type="button" onclick="window.location.href='{{ route('homepage') }}';" class="btn btn-light btn-block">Wróć na stronę główną</button>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Nie masz konta? <a href="register"> REJESTRACJA</a></p>
		  </div>
	  </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('resources/admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('resources/admin/js/popper.min.js') }}"></script>
  <script src="{{ asset('resources/admin/js/bootstrap.min.js') }}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ asset('resources/admin/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('resources/admin/js/app-script.js') }}"></script>
  
</body>
</html>
