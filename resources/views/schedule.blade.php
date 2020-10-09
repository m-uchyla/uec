@extends('layouts.app')

@section('style')
<style>
.match {
	background: rgb(29,36,52);
    background: linear-gradient(90deg, rgba(29,36,52,1) 0%, rgba(29,36,52,1) 70%, rgba(60,75,109,1) 100%);
	padding-top:20px;
	padding-bottom:20px;
	text-align:center;
	font-weight: 700;
	color: #f9f9ff;
	border-radius: 20px;
}

.match-2 {
	background: rgb(60,75,109);
    background: linear-gradient(90deg, rgba(60,75,109,1) 0%, rgba(29,36,52,1) 30%, rgba(29,36,52,1) 100%);
	padding-top:20px;
	padding-bottom:20px;
	text-align:center;
	font-weight: 700;
	color: #f9f9ff;
	border-radius: 20px;
}
.vs{
	background: rgb(60,75,109);
    background: linear-gradient(90deg, rgba(60,75,109,1) 0%, rgba(29,36,52,1) 50%, rgba(60,75,109,1) 100%);
	color: #ad1515;
	font-size: 20px;
	font-weight: 550;
	margin-bottom: 5px;
	border-radius: 20px;
}
</style>
@endsection

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30" id='schedule'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Harmonogram</span>
                            <h2>Lista spotkań UEC S2</h2>
                        </div> 
                    </div>
                </div>

				<div class="section-top-border">
					@forelse($matches as $match)
							@if($match->round != 0)
								<h3 class="mb-30" style="padding-bottom:10px; padding-top:100px; text-align: center; font-size: 25px; font-weight: 550;"> @if($match->round < 7)
																					Runda {{$match->round}}
																				@elseif($match->round == 7)
																					Ćwierćfinały
																				@elseif($match->round == 8)
																					Półfinały
																				@elseif($match->round == 9)
																					Mecz o trzecie miejsce
																				@elseif($match->round == 10)
																					Wielki finał
																				@endif
								</h3>
							@endif
							<div class="row">
								<div class="col-md-4">
									<div class="single-defination match">
										@if ($match->opponents[0]->participant)
										<h3 id="schedule-teamname">{{$match->opponents[0]->participant->name}}</h3>
										@else
										<h3 id="schedule-teamname">TBA</h3>
										@endif
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-defination" style="text-align:center">
										<p class="vs">VS</p>
										@if($match->scheduled_datetime)
											<h4 class="mb-20">
												@if ($match->opponents[0]->participant && $match->opponents[1]->participant)
													@if ($match->opponents[0]->score && $match->opponents[1]->score)
														{{$match->opponents[0]->score}}
														: 
														{{$match->opponents[1]->score}}
													@else
														{{date("H:i:s d-m-Y", strtotime($match->scheduled_datetime))}}
													@endif
												@else
													{{date("H:i:s d-m-Y", strtotime($match->scheduled_datetime))}}
												@endif
											</h4>
										@endif
									</div>
								</div>
								<div class="col-md-4">
									<div class="single-defination match-2">
									@if ($match->opponents[1]->participant)
										<h3 id="schedule-teamname">{{$match->opponents[1]->participant->name}}</h3>
										@else
										<h3 id="schedule-teamname">TBA</h3>
										@endif
									</div>
								</div>
							</div>
							@empty
							<div class="row">
							</div>
					@endforelse
				</div>
                </div>
            </div>
        </div>
		<a href="#schedule" class="btn" id="click" style="visibility:hidden"></a>
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