@extends('layouts.app')

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Uczestnicy turnieju</span>
                            <h2>Drużyny które wezmą udział w nadchodzących zmaganiach</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="serial">Logo</div>
								<div class="country">Nazwa drużyny</div>
								<div class="visit">Fanpage</div>
								<div class="visit">Kapitan</div>
							</div>
							@foreach ($list as $team)
							<div class="table-row">
								<div class="serial">01</div>
								<div class="serial"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag"></div>
								<div class="country"> {{$team->name}} </div>
								<div class="visit"> {{$team->lineup[0]->name}} </div>
								<div class="visit">Nick gracza</div>
							</div>
							@endforeach
						</div> 
					</div>
                    </div>		
                </div>
            </div>
        </div>
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