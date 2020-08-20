@extends('layouts.app')

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
                           <p>{{ htmlspecialchars($content) }}</p>
                        @endforeach
                     </div>
                  </div>
                  
                  <div class="navigation-top">
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
                  </div>

               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                  
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Resaurant food</p>
                                 <p>(37)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Travel news</p>
                                 <p>(10)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Modern technology</p>
                                 <p>(03)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Product</p>
                                 <p>(11)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Inspiration</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Health Care</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title" style="color: #2d2d2d;">Zobacz również</h3>
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
                     <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                        <ul class="list">
                           <li>
                              <a href="#">project</a>
                           </li>
                           <li>
                              <a href="#">love</a>
                           </li>
                           <li>
                              <a href="#">technology</a>
                           </li>
                           <li>
                              <a href="#">travel</a>
                           </li>
                           <li>
                              <a href="#">restaurant</a>
                           </li>
                           <li>
                              <a href="#">life style</a>
                           </li>
                           <li>
                              <a href="#">design</a>
                           </li>
                           <li>
                              <a href="#">illustration</a>
                           </li>
                        </ul>
                     </aside>
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