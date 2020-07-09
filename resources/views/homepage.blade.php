@extends('layouts.app')

@section('content')
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
@endsection