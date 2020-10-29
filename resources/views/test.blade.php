@extends('layouts.f1')
@section('content')
    <div class="f1-background">
        <!-- Title Cup -->
        <div class="section-1-f1">
            <div class="special-backgorund">
                <h2 class="f1"> Sezon 1 </h2>
                <h1 class="f1"> UEC FORMULA 1 </h1>
                    <div>
                        <a href="{{ route('login') }}" class="button-f1">Weź udział</a>
                    </div>
                    <div class="social-f1">
                        <a class="item" href="https://www.facebook.com/UndergroundEsportCup">
                            <div id="content-media" class="logo-social">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div id="content-media">
                                <h3 id="media-text-1">Facebook</h3>
                                <h2 id="kurwa">undergroundesportcup</h2>
                            </div>
                        </a>
                        <a class="item" href="https://www.twitch.tv/mil3k00">
                            <div id="content-media" class="logo-social">
                                <i class="fab fa-twitch"></i>
                            </div>
                            <div id="content-media">
                                <h3 id="media-text-1">Twitch</h3>
                                <h2 id="kurwa">mil3k00</h2>
                            </div>
                        </a>
                        <a class="item" href="https://www.youtube.com/channel/UCfP-0qKvorx7JWYMg_rpyqg">
                            <div id="content-media" class="logo-social">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <div id="content-media">
                                <h3 id="media-text-1">Youtube</h3>
                                <h2 id="kurwa">undergroundesportcup</h2>
                            </div>
                        </a>  
                        <a class="item" href="https://www.twitch.tv/qn3k">
                            <div id="content-media" class="logo-social">
                                <i class="fab fa-twitch"></i>
                            </div>
                            <div id="content-media">
                                <h3 id="media-text-1">twitch</h3>
                                <h2 id="kurwa">qn3k</h2>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
        <!-- partners -->
        <div class="partner">
            <div class="my-5 d-flex justify-content-center flex-wrap">
                <a href="https://www.facebook.com/KXNPL">
                    <img class="logo-partner" src="{{ asset('resources/main/img/loga/kxn.svg', true) }}" alt="kxn-logo">
                </a>
                <a href="https://www.facebook.com/AstroBoyzGG">
                    <img class="logo-partner" src="{{ asset('resources/main/img/loga/astro.svg', true) }}" alt="astro-logo">
                </a>
                <a href="https://www.toornament.com/pl/">
                    <img class="logo-partner" src="{{ asset('resources/main/img/loga/toornament.svg', true) }}" alt="toornament-logo">
                </a>
                <a href="#">
                    <img class="logo-partner" src="{{ asset('resources/main/img/loga/luke.svg', true) }}" alt="luke-logo">
                </a>
            </div>
        </div>
        <!-- newsy -->
        <div>
        @include('slider')
        </div>
        <!-- description cup -->
        <div class="f1-sec3">
            <h3> UEC F1 </h3>
            <h2>Co nas czeka ?</h2>
            <div class="film-f1">
                
            </div>
            <div class="sec3-content">
                <div>
                    <i class="fas fa-coins"></i>
                    <h3 class=>Pula nagród 0000zł </h3>
                </div>
                <div>
                    <i class="fas fa-users"></i>
                    <h3>20 kierowców</h3>
                </div>
                <div>
                    <i class="fas fa-user-friends"></i>
                    <h3>10 Zespołów</h3>
                </div>
                <div>
                    <i class="fas fa-flag-checkered"></i>
                    <h3>12 wyścigów</h3>
                </div>
            </div>
        </div>
        <div class="starups-area testimonial-area fix">
            <div class="starups-img">
                <div class="play-btn"><a class="popup-video" href="https://www.youtube.com/watch?v=gv2uuj-nIJE"><i class="flaticon-null-3"></i></a></div>
            </div>
            <div class="starups">
                <div class="d-flex mb-40">
                    <div>
                        <h3 class="h1">UEC F1 <br> Sezon 1
                        </h3>
                    </div>
                    <ul class="list-description">
                        <li>pula nagród 0000 zł</li>
                        <li>20 kierowców</li>
                        <li>22 wyścigi</li>
                        <li>10 zespołów</li>
                        <li>3 miesiące emocji</li>
                    </ul>
                </div>
             </div>
        </div>
        </div>
    </div>
@endsection