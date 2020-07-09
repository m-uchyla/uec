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
                                        <li><a href="login">Newsy</a></li>
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
                                        @guest
                                        <li>
                                            <a href="login" class="genric-btn danger small" style="padding-top: 2%;padding-bottom: 2%" hover="color:red">Logowanie</a>
                                        </li>
                                        @endguest
                                        @auth
                                        <li>
                                            <a href="blog.html">Panel użytkownika</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="genric-btn danger small" style="padding-top: 2%;padding-bottom: 2%" hover="color:red">Wyloguj się</a>
                                        </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endauth
                                        
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