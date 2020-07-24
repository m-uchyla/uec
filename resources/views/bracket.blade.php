@extends('layouts.app')

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Etap pierwszy</span>
                            <h2>Rozgrywki fazy grupowej</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa A</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
                                <div class="country">Drużyna</div>
								<div class="visit">Punkty</div>
								<div class="visit">Rundy</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
								<div class="visit">645032</div>
								<div class="visit">645032</div>
							</div>
						</div>
					</div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa B</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Punkty</div>
								<div class="visit">Rundy</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
								<div class="visit">645032</div>
								<div class="visit">645032</div>
							</div>
						</div>
					</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa C</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Punkty</div>
								<div class="visit">Rundy</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country">Bardzo długa nazwa teamu</div>
								<div class="visit">99</div>
								<div class="visit">99</div>
							</div>
						</div>
					</div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa D</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Punkty</div>
								<div class="visit">Rundy</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
								<div class="visit">645032</div>
								<div class="visit">645032</div>
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