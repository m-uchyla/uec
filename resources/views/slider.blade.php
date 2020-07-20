        <!--? slider-area start -->
		<div class="slider-area">
			<div class="slider-full-active owl-carousel custom-dots">
				@foreach ($featured as $f)
					<div class="slide-full slider-height d-flex align-items-center" style="background-image: url({{ $f->big_pic }});">
						<div class="container">
							<div class="row">
								<div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
									<div class="slide-full-content">
										<span>{{ $f->title }}</span>
										<h1>
										@foreach ( (explode(" ", $f->team)) as $t )
											{{$t}} <br>
										@endforeach
										</h1>
										<p>{{ $f->subtitle }}</p>
										<a class="btn" href="article/{{ $f->id }}">Zobacz więcej</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				<div class="slide-full d-flex slider-height align-items-center" style="background-image: url( {{asset('resources/main/img/hero/h1_hero2.png)')}};">
					<div class="container">
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-md-7 col-sm-8">
								<div class="slide-full-content">
                                    <span>Drużyna z największą serią zwycięstw</span>
									<h1>Another<br> team</h1>
									<p>Jaki jest ich sekret?</p>
									<a class="btn" href="">Zobacz więcej</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider-area end -->