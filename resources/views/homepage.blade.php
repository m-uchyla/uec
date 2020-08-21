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
@yield('aside')
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
@endsection