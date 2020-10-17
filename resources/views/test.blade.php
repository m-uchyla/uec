@extends('layouts.f1')
@section('content')
    <div class="container-fluid  f1-background">
        <!-- Title Cup -->
        <div class="section-1-f1">
            <div class="special-backgorund">
                <h2 class="f1"> Sezon 1 </h2>
                <br>
                <h1 class="f1"> UEC FORMULA 1 </h1>
                    <div>
                        <a href="{{ route('login') }}" class="button-f1">Weź udział</a>
                    </div>
                    <div class=" row social-f1">
                        <div class="col-sm-6 col-md-3">
                            <a class="item" href="https://www.facebook.com/UndergroundEsportCup">
                                <div id="content-media" class="logo-social">
                                    <i class="fab fa-facebook-square"></i>
                                </div>
                                <div id="content-media">
                                    <h3 id="media-text-1">Facebook</h3>
                                    <h2 id="kurwa">undergroundesportcup</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a class="item" href="https://www.youtube.com/channel/UCfP-0qKvorx7JWYMg_rpyqg">
                                <div id="content-media" class="logo-social">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <div id="content-media">
                                    <h3 id="media-text-1">Youtube</h3>
                                    <h2 id="kurwa">undergroundesportcup</h2>
                                </div>
                            </a>   
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a class="item" href="https://www.twitch.tv/mil3k00">
                                <div id="content-media" class="logo-social">
                                    <i class="fab fa-twitch"></i>
                                </div>
                                <div id="content-media">
                                    <h3 id="media-text-1">Twitch</h3>
                                    <h2 id="kurwa">mil3k00</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3">
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
        </div>
        <div class="partner">
        </div>

        <div>

    </div>
@endsection