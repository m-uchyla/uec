@extends('layouts.app')

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center" id='bracket'>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa A</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["A"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["A"][$i]->rank}}</div>
								<div class="country">
									@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
									<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
									{{$groups["B"][$i]->participant->name}}</a>
									@else
									{{$groups["B"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["A"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["A"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["A"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["A"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>

					<!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa B</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["B"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["B"][$i]->rank}}</div>
								<div class="country">
									@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
									<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
									{{$groups["B"][$i]->participant->name}}</a>
									@else
									{{$groups["B"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["B"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["B"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["B"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["B"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>

					<!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa C</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["C"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["C"][$i]->rank}}</div>
								<div class="country">
									@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
									<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
									{{$groups["B"][$i]->participant->name}}</a>
									@else
									{{$groups["B"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["C"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["C"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["C"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["C"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>

					<!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa D</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["D"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["D"][$i]->rank}}</div>
								<div class="country">
									@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
									<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
									{{$groups["B"][$i]->participant->name}}</a>
									@else
									{{$groups["B"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["D"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["D"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["D"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["D"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>
                </div>

				<div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70" style="margin-top: 150px;">
                            <span>Etap drugi</span>
                            <h2>Dogrywki fazy grupowej</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa E</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
										@if($aditional["E"][$i]->participant)
											<div class="table-row">
												<div class="serial">{{$aditional["E"][$i]->rank}}</div>
												<div class="country">
											@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
											<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
											{{$groups["B"][$i]->participant->name}}</a>
											@else
											{{$groups["B"][$i]->participant->name}}
											@endif
										</div>
										<div class="visit">{{$aditional["E"][$i]->properties->wins}}</div>
										<div class="visit">{{$aditional["E"][$i]->properties->losses}}</div>
										<div class="visit">{{$aditional["E"][$i]->properties->played}}</div>
										<div class="visit">{{$aditional["E"][$i]->points}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>
					<a href="#bracket" class="btn" id="click" style="visibility:hidden"></a>
					<!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa F</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
								@if($aditional["F"][$i]->participant)
									<div class="table-row">
										<div class="serial">{{$aditional["F"][$i]->rank}}</div>
										<div class="country">
											@if({{$groups["B"][$i]->participant->custom_fields->fanpage}})
											<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' style='color:#b91010'>
											{{$groups["B"][$i]->participant->name}}</a>
											@else
											{{$groups["B"][$i]->participant->name}}
											@endif
										</div>
										<div class="visit">{{$aditional["F"][$i]->properties->wins}}</div>
										<div class="visit">{{$aditional["F"][$i]->properties->losses}}</div>
										<div class="visit">{{$aditional["F"][$i]->properties->played}}</div>
										<div class="visit">{{$aditional["F"][$i]->points}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								@endif
							@endfor
						</div>
					</div>
                    </div>
					
					
                </div>

				<div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70" style="margin-top: 150px;">
                            <span>Etap trzeci</span>
                            <h2>Faza pucharowa</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">I ćwierćfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">II ćwierćfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">III ćwierćfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">IV ćwierćfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>

                </div>
				<div class="row">
					<!-- single semifinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 style="text-align:center">I półfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
					<!-- single semifinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 style="text-align:center">II półfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
                </div>
				<div class="row">
					<!-- single 3rd place -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 style="text-align:center">Mecz o 3 msc.</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
							</div>
						</div>
					</div>
                    </div>
					<!-- single final -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 style="text-align:center">Finał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px">
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >01</div>
							</div>
							<div class="table-row">
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="serial" style="padding-left: 10px;" >02</div>
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