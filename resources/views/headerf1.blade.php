<header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ route('homepage') }}"><img src="{{ asset('resources/main/img/logo/logo1.png', true) }}" alt=""></a>
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
                                        <li><a href="{{ route('homepage') }}">Strona główna</a></li>
                                            <li>
                                                <a href="{{ route('homepage') }}">Nasze gry</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('homepage') }}">CS:GO</a></li>
                                                    <li><a href="{{ route('f1') }}">Formula 1</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('f1') }}">Bieżący Sezon</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('schedule-f1') }}">Terminarz</a></li>
                                                    <li><a href="{{ route('team-f1') }}">Kwalifikacja kierowców</a></li>
                                                    <li><a href="{{ route('constructor-f1') }}">Kwalifikacja Konstruktorów</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('regulamin') }}">Zasady</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('regulamin-f1') }}">Regulamin turnieju</a></li>
                                                    <li><a href="{{ route('terms') }}">Regulamin serwisu</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">O nas</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('about') }}">O projekcie</a></li>
                                                    <li><a href="https://facebook.com/UndergroundEsportCup/">Kontakt</a></li>
                                                </ul>
                                            </li>
                                        @guest
                                        <li>
                                            <a href="{{ route('login') }}" class="genric-btn danger small" style="padding-top: 2%;padding-bottom: 2%" hover="color:red">Logowanie</a>
                                        </li>
                                        @endguest
                                        @auth
                                        <li>
                                            <a href="{{ route('dashboard') }}">Panel użytkownika</a>
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