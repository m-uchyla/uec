@extends('layouts.app')

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30" id="teams">
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
								<div class="country">Nazwa drużyny</div>
								<div class="visit">Zawodnik #1</div>
								<div class="visit">Zawodnik #2</div>
								<div class="visit">Zawodnik #3</div>
								<div class="visit">Zawodnik #4</div>
								<div class="visit">Zawodnik #5</div>
							</div>
							@for ($i = 0; $i < count($list); $i++)
							<div class="table-row">
								<div class="serial">{{$i+1}}</div>
								<div class="country"><a href="{{$list[$i]->custom_fields->fanpage}}" style='color:#c51414'>{{$list[$i]->name}}</a></div>
								<div class="visit">{{$list[$i]->lineup[0]->name}} </div>
								<div class="visit">{{$list[$i]->lineup[1]->name}}</div>
								<div class="visit">{{$list[$i]->lineup[2]->name}}</div>
								<div class="visit">{{$list[$i]->lineup[3]->name}}</div>
								<div class="visit">{{$list[$i]->lineup[4]->name}}</div>
							</div>
							@endfor
						</div> 
					</div>
                    </div>		
                </div>
            </div>
        </div>
		<a href="#teams" class="btn" id="click" style="visibility:hidden"></a>
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