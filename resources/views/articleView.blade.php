@extends('layouts.app')

@section('content')
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
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
                           <p>{{$content}}</p>
                        @endforeach
                     </div>
                  </div>
                  
                  <div class="navigation-top">
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="{{ asset('resources/main/img/blog/author.png') }}" alt="">
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
                                    <img class="img-fluid" src="{{ asset('resources/main/img/post/preview.png') }}" alt="">
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
                                    <img class="img-fluid" src="{{ asset('resources/main/img/post/next.png') }}" alt="">
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
                        <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                        <div class="media post_item">
                           <img src="{{ asset('resources/main/img/post/post_1.png') }}" alt="post">
                           <div class="media-body">
                              <a href="blog_details.html">
                                 <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                              </a>
                              <p>January 12, 2019</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="{{ asset('resources/main/assets/img/post/post_2.png') }}" alt="post">
                           <div class="media-body">
                              <a href="blog_details.html">
                                 <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                              </a>
                              <p>02 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="{{ asset('resources/main/img/post/post_3.png') }}" alt="post">
                           <div class="media-body">
                              <a href="blog_details.html">
                                 <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="{{ asset('resources/main/img/post/post_4.png') }}" alt="post">
                           <div class="media-body">
                              <a href="blog_details.html">
                                 <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                              </a>
                              <p>01 Hours ago</p>
                           </div>
                        </div>
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
      <!-- Blog Area End -->
@endsection