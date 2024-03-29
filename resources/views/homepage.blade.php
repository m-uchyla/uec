@extends('layouts.app')

@section('content')
        <!--? Blog Area Start-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach ($articles as $article)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <a href="article/{{ $article->id }}"><img class="card-img rounded-0" src="{{ $article->main_pic }}" alt=""></a>
                                        <div class="blog_item_date">
                                            <h3>{{ substr($article->created_at,8,-9) }}</h3>
                                            <p>
                                                @switch(substr($article->created_at,5,-12))
                                                    @case("01")
                                                        STY
                                                        @break
                                                    @case("02")
                                                        LUT
                                                        @break
                                                    @case("03")
                                                        MAR
                                                        @break
                                                    @case("04")
                                                        KWI
                                                        @break
                                                    @case("05")
                                                        MAJ
                                                        @break
                                                    @case("06")
                                                        CZE
                                                        @break
                                                    @case("07")
                                                        LIP
                                                        @break
                                                    @case("08")
                                                        SIE
                                                        @break
                                                    @case("09")
                                                        WRZ
                                                        @break
                                                    @case("10")
                                                        PAŹ
                                                        @break
                                                    @case("11")
                                                        LIS
                                                        @break
                                                    @case("12")
                                                        GRU
                                                        @break
                                                @endswitch
                                            </p>
                                        </div>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="article/{{ $article->id }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{ $article->title }}</h2>
                                        </a>
                                        <p>{{ $article->subtitle }}</p>
                                        <ul class="blog-info-link">
                                        <li style="color:#999999"><i class="fa fa-user"></i>{{ $article->author }}</li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach
                            
                            
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                {{ $articles->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                        {{-- 
                        
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Trwający mecz</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">BO3</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Oglądaj na żywo</button>
                            </aside>
                        
                        --}}
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Harmonogram</h3>
                                <div class="media post_item">
                                    <p>Śledź rozgrywki najbliższej edycji!</p>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" onclick="window.location.href='{{ route('schedule') }}';"
                                        type="submit">Harmonogram</button>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Najpopularniejsze posty</h3>
                                @foreach ($also as $a)
                                <div class="media post_item">
                                <img src="{{$a->main_pic}}" style="width:50%;height:50%" alt="post">
                                <div class="media-body">
                                    <a href="{{ route('viewArticle',[$a->id]) }}">
                                        <h3 style="color: #2d2d2d;">{{$a->title}}</h3>
                                    </a>
                                    <p>{{ substr($a->created_at,0,-8) }}</p>
                                </div>
                                </div>
                                @endforeach
                            </aside>
                            {{--  
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Wspierają nas</h3>
                                <img style="length=350px"  src="{{ asset('resources/main/img/gallery/yabu_ad.png', true) }}" alt="">
                            </aside>
                            --}}
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Bądź na bieżąco</h4>
                                <ul class="list cat-list" >
                                    <li>
                                        <a href="https://www.facebook.com/UndergroundEsportCup/" class="d-flex" target="_blank">
                                        <p> Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCfP-0qKvorx7JWYMg_rpyqg" class="d-flex" target="_blank">
                                            <p>YouTube</p>
                                        </a>
                                    </li>

                                </ul>
                            </aside>
                            {{--
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Najbliższe spotkania</h3>
                                <div class="media post_item">
                                <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                </div>
                                <div class="media post_item">
                                <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                </div>
                                <div class="media post_item">
                                <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                    <div class="media-body" style="text-align:center">
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                            <h3 style="color: #2d2d2d;">VS</h3>
                                            <h3 style="color: #2d2d2d;">Erydan Esports</h3>
                                        <p style="text-align:center">12 czerwiec </br> godz. 20:00</p>
                                    </div>
                                    <img src="{{ asset('resources/main/img/gallery/team.png', true) }}" alt="post">
                                </div>
                            </aside>
                            --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
@endsection