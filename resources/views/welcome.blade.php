<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Underground Esport Cup </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('resources/main/img/favicon.ico') }}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{ asset('resources/main/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/animated-headline.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/main/css/responsive.css') }}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('resources/main/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('resources/main/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
							<div class="main-menu black-menu menu-bg-white d-none d-lg-block">
								<div class="hamburger hamburger--collapse">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
								<nav class="hamburger-menu">
									<ul id="navigation">
										<li><a href="{{ url('/') }}">Strona główna</a></li>
                                        <li><a href="{{ url('/') }}">Newsy</a></li>
                                        <li>
											<a href="blog.html">Bieżący turniej</a>
											<ul class="submenu">
                                                <li><a href="blog.html">Harmonogram meczy</a></li>
                                                <li><a href="blog_details.html">Drabinka</a></li>
                                                <li><a href="elements.html">Drużyny</a></li>
											</ul>
										</li>
                                        <li>
											<a href="blog.html">O nas</a>
											<ul class="submenu">
                                                <li><a href="blog.html">O projekcie</a></li>
                                                <li><a href="blog_details.html">Kontakt</a></li>
											</ul>
										</li>
                                        <li><a href="#" class="genric-btn danger small" style="padding-top: 2%;padding-bottom: 2%" hover="color:red">Logowanie</a></li>
									</ul>
								</nav>
							</div>
						</div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        <!--? slider-area start -->
		<div class="slider-area">
			<div class="slider-full-active owl-carousel custom-dots">
				<div class="slide-full slider-height d-flex align-items-center" style="background-image: url( {{asset('resources/main/img/hero/h1_hero.png)')}};">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
								<div class="slide-full-content">
                                    <span>Zwycięzca poprzedniej edycji</span>
									<h1>Test <br> team</h1>
									<p>Przeprowadziliśmy wywiad z kapitanem zwycięzkiej drużyny</p>
									<a class="btn" href="#">Zobacz więcej</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-full d-flex slider-height align-items-center" style="background-image: url( {{asset('resources/main/img/hero/h1_hero2.png)')}};">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
								<div class="slide-full-content">
                                    <span>Drużyna z największą serią zwycięstw</span>
									<h1>Another<br> team</h1>
									<p>Jaki jest ich sekret?</p>
									<a class="btn" href="#">Zobacz więcej</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide-full d-flex slider-height align-items-center" style="background-image: url({{ asset('resources/main/img/hero/h1_hero.png') }}">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
								<div class="slide-full-content">
                                    <span>#1 aritecture in united stare</span>
									<h1>Focus on<br> Design Quality</h1>
									<p>We creating lasting impression through architecture design.</p>
									<a class="btn" href="#">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area end -->

        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('resources/main/img/blog/single_blog_1.png') }}" alt="">
                                    <div class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                    <li style="color:#999999"><i class="fa fa-user"></i>VEEX</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('resources/main/img/blog/single_blog_2.png') }}" alt="">
                                    <div class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li style="color:#999999"><i class="fa fa-user"></i>VEEX</li>
                                    </ul>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('resources/main/img/blog/single_blog_3.png') }}" alt="">
                                    <div class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="blog_details.html">
                                        <h2 class="blog-head" style="color: #2d2d2d;">Google inks pact for new 35-storey office</h2>
                                    </a>
                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                        he earth it first without heaven in place seed it second morning saying.</p>
                                    <ul class="blog-info-link">
                                        <li style="color:#999999"><i class="fa fa-user"></i>VEEX</li>
                                    </ul>
                                </div>
                            </article>

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Aktualnie na żywo</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">BO3</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">   
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Oglądaj</button>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Bądź na bieżąco</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Twitch</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Instagram</p>
                                        </a>
                                    </li>

                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Najbliższe spotkania</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">   
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">   
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">   
                                </div>
                            </aside>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
        
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding section-bg" data-background="{{ asset('resources/main/img/gallery/footer_bg.png') }}">
            <div class="container">
                <!-- Footer Top -->
                <!-- Footer bottom -->
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib </a>| Created by <a href="https://facebook.com/VEEXesport" target="_blank">VEEX</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            <div class="footer-copy-right f-right">
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{ asset('resources/main/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('resources/main/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/popper.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('resources/main/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('resources/main/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('resources/main/js/wow.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/animated.headline.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('resources/main/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('resources/main/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.sticky.js') }}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('resources/main/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('resources/main/js/contact.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.form.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resources/main/js/mail-script.js') }}"></script>
    <script src="{{ asset('resources/main/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('resources/main/js/plugins.js') }}"></script>
    <script src="{{ asset('resources/main/js/main.js') }}"></script>

    <!-- <script>
        let elements = document.getElementsByClassName('owl-dot');
        console.log(elements[0]);
        elements[0].className = "owl-dot";
        elements[1].className = "owl-dot active";
    </script> -->
    
    </body>
</html>