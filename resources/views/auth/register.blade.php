<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="{{ asset('resources/admin/css/pace.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('resources/admin/js/pace.min.js') }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('resources/admin/images/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('resources/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('resources/admin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('resources/admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('resources/admin/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper" style="margin-top:150px"> 

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{ asset('resources/admin/images/logo-icon.png') }}" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Rejestracja</div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
			  <div class="form-group">
			  <label for="name" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="name" name="name" class="form-control input-shadow @error('name') is-invalid @enderror" placeholder="Wprowadź nazwę użytkownika" required autofocus>
          @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>

			   </div>
			  </div>
			  <div class="form-group">
			  <label for="email" class="sr-only">Email</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="email" name="email" class="form-control input-shadow @error('email') is-invalid @enderror" placeholder="Podaj adres e-mail" required>
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
				  <input type="password" id="password" name="password" class="form-control input-shadow @error('password') is-invalid @enderror" placeholder="Wybierz hasło" required>
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
        <div class="form-group">
			   <label for="password-confirm" class="sr-only">Password confirmation</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="password-confirm" name="password_confirmation" class="form-control input-shadow" placeholder="Powtórz hasło" required>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  
			   <!-- <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox">I Agree With Terms & Conditions</label>
			     </div>
			    </div> -->
			  
			 <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Załóż konto</button>
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
		    <p class="text-warning mb-0">Masz już konto?<a href="login"> ZALOGUJ SIĘ</a></p>
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
