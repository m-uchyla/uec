@extends('layouts.app')

@section('style')
<meta property="og:title" content="{{$article->title}} - UEC" />
<meta property="og:type" content="article" />
<meta property="og:description" content="{{$article->subtitle}}" />
<meta property="og:image" content="{{ $article->main_pic }}" />
@endsection

@section('content')
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding" id="article">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ $article->main_pic }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d; font-size:40px">{{$article->title}}</h2>

                        <ul class="blog-info-link mt-3 mb-4" style="color:grey">
                           <li><i class="fa fa-user"></i> {{$article->author}}</li>
                           <li><i class="fa fa-angle-double-right"></i> {{$article->team}}<li>
                        </ul></br>
                        <h3 style="color: #2d2d2d; font-size:25px">{{$article->subtitle}} </h3> </br>
                        @foreach ($contents as $content)
                           <p>{!! $content !!}</p>
                        @endforeach
                     </div>
                  </div>
                  
                  <!-- <div class="navigation-top">
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="{{ asset('resources/main/img/blog/author.png', true) }}" alt="">
                        <div class="media-body">
                           <a href="#">
                              <h4>Harvard milan</h4>
                           </a>
                           <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                              our dominion twon Second divided from</p>
                        </div>
                     </div>
                  </div>
                     <div class="navigation-area">
                        <div class="row">
                           <div
                              class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                              <div class="thumb">
                                 <a href="#">
                                    <img class="img-fluid" src="{{ asset('resources/main/img/post/preview.png', true) }}" alt="">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Prev Post</p>
                                 <a href="#">
                                    <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                 </a>
                              </div>
                           </div>
                           <div
                              class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                              <div class="detials">
                                 <p>Next Post</p>
                                 <a href="#">
                                    <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="thumb">
                                 <a href="#">
                                    <img class="img-fluid" src="{{ asset('resources/main/img/post/next.png', true) }}" alt="">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->

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
                            @guest
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Zapisz się do turnieju</h3>
                                <div class="media post_item">
                                    <p>Wkrótce rozpoczną się zapisy do turnieju. Bądz gotowy i załóż konto już teraz!</p>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" onclick="window.location.href='{{ route('register') }}';"
                                        type="submit">Rejestracja</button>
                            </aside>
                            @endguest
                            @auth
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Zapisz się do turnieju</h3>
                                <div class="media post_item">
                                    <p>Zostałeś już zapisany do drużyny? Jeżeli nie- odwiedź swój profil, dołącz do istniejącej drużyny, lub utwórz ją i bądz gotów na zapisy do turnieju!</p>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" onclick="window.location.href='{{ route('dashboard') }}';"
                                        type="button">Panel drużyn</button>
                            </aside>
                            @endauth
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
                                        <a href="#" class="d-flex">
                                        <p> Facebook</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Twitter</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
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
      <a href="#article" class="btn" id="click" style="visibility:hidden"></a>
      <!-- Blog Area End -->
@endsection

@section('script')
<script>

$(document).ready(function(){
    document.getElementById("click").click();
});


$('#nav').onePageNav({
	currentClass: 'current',
	changeHash: false,
	scrollSpeed: 750,
	scrollThreshold: 0.5,
	filter: '',
	easing: 'swing',
	begin: function() {
		//I get fired when the animation is starting
	},
	end: function() {
		//I get fired when the animation is ending
	},
	scrollChange: function($currentListItem) {
		//I get fired when you enter a section and I pass the list item of the section
	}
});
</script>
@endsection