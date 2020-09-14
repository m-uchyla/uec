@extends('layouts.app')

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
							<div class="single-defination" style="background-color:grey">
								<h3>Erydan Esports kjsnksjfd</h3>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination">
								<h4 class="mb-20">VS</h4>
								<p>14.09.2020 godz. 21:00</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination">
								<div class="progress-table-wrap" style="padding-bottom: 10px;padding-top: 10px;">
									<div class="progress-table">
										<div class="table-head">
											<div class="country">Nazwa drużyny</div>
										</div>
									</div>
								</div>
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