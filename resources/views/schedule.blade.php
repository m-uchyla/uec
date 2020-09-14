@extends('layouts.app')

@section('style')
<style>
.match {
	background-color:#f9f9ff; 
	padding-top:20px;
	padding-bottom:20px;
	text-align:center;
	font-weight: 700;
	color: #262d48;
}
.vs{
	color: #ad1515;
	font-size: 20px;
	font-weight: 550;
	margin-bottom: 5px;
}
</style>
@endsection

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30" id='bracket'>
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
					<h3 class="mb-30">Definition</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="single-defination match">
								<h3>Erydan Esports kjsnksjfd</h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination" style="text-align:center">
								<p class="vs">VS</p>
								<h4 class="mb-20">14.09.2020 godz. 21:00</h4>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination match">
								<h3>Erydan Esports kjsnksjfd</h3>
							</div>
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