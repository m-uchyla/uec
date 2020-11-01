@extends('layouts.app')

@section('content')
        <!--? Team Start -->
        <div class="team-area section-padding30" id='bracket'>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center" class="bracket-name">Grupa A</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($groups["A"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["A"][$i]->rank}}</div>
								<div class="country">
									@if($groups["A"][$i]->participant->custom_fields->fanpage)
									<a href='{{$groups["A"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
									{{$groups["A"][$i]->participant->name}}</a>
									@else
									{{$groups["A"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["A"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["A"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["A"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["A"][$i]->properties->score_difference}}</div>
								<div class="visit">{{$groups["A"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 style="text-align:center" class="bracket-name">Grupa B</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($groups["B"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["B"][$i]->rank}}</div>
								<div class="country">
								@if($groups["B"][$i]->participant->custom_fields->fanpage)
									<a href='{{$groups["B"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
									{{$groups["B"][$i]->participant->name}}</a>
									@else
									{{$groups["B"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["B"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["B"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["B"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["B"][$i]->properties->score_difference}}</div>
								<div class="visit">{{$groups["B"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 style="text-align:center" class="bracket-name">Grupa C</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($groups["C"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["C"][$i]->rank}}</div>
								<div class="country">
								@if($groups["C"][$i]->participant->custom_fields->fanpage)
									<a href='{{$groups["C"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
									{{$groups["C"][$i]->participant->name}}</a>
									@else
									{{$groups["C"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["C"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["C"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["C"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["C"][$i]->properties->score_difference}}</div>
								<div class="visit">{{$groups["C"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 style="text-align:center" class="bracket-name">Grupa D</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($groups["D"][$i]->participant)
							<div class="table-row">
								<div class="serial">{{$groups["D"][$i]->rank}}</div>
								<div class="country">
								@if($groups["D"][$i]->participant->custom_fields->fanpage)
									<a href='{{$groups["D"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
									{{$groups["D"][$i]->participant->name}}</a>
									@else
									{{$groups["D"][$i]->participant->name}}
									@endif
								</div>
								<div class="visit">{{$groups["D"][$i]->properties->wins}}</div>
								<div class="visit">{{$groups["D"][$i]->properties->losses}}</div>
								<div class="visit">{{$groups["D"][$i]->properties->played}}</div>
								<div class="visit">{{$groups["D"][$i]->properties->score_difference}}</div>
								<div class="visit">{{$groups["D"][$i]->points}}</div>
							</div>
							@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 style="text-align:center" class="bracket-name">Grupa E</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["E"][$i]->participant)
											<div class="table-row">
												<div class="serial">{{$aditional["E"][$i]->rank}}</div>
												<div class="country">
											@if($aditional["E"][$i]->participant->custom_fields->fanpage)
											<a href='{{$aditional["E"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
											{{$aditional["E"][$i]->participant->name}}</a>
											@else
											{{$aditional["E"][$i]->participant->name}}
											@endif
										</div>
										<div class="visit">{{$aditional["E"][$i]->properties->wins}}</div>
										<div class="visit">{{$aditional["E"][$i]->properties->losses}}</div>
										<div class="visit">{{$aditional["E"][$i]->properties->played}}</div>
										<div class="visit">{{$aditional["E"][$i]->properties->score_difference}}</div>
										<div class="visit">{{$aditional["E"][$i]->points}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 style="text-align:center" class="bracket-name">Grupa F</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Porażki</div>
								<div class="visit">Meczy</div>
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
							@for ($i=0;$i < 4;$i++)
							@if($aditional["F"][$i]->participant)
									<div class="table-row">
										<div class="serial">{{$aditional["F"][$i]->rank}}</div>
										<div class="country">
											@if($aditional["F"][$i]->participant->custom_fields->fanpage)
											<a href='{{$aditional["F"][$i]->participant->custom_fields->fanpage}}' id="teamname-a">
											{{$aditional["F"][$i]->participant->name}}</a>
											@else
											{{$aditional["F"][$i]->participant->name}}
											@endif
										</div>
										<div class="visit">{{$aditional["F"][$i]->properties->wins}}</div>
										<div class="visit">{{$aditional["F"][$i]->properties->losses}}</div>
										<div class="visit">{{$aditional["F"][$i]->properties->played}}</div>
										<div class="visit">{{$aditional["F"][$i]->properties->score_difference}}</div>
										<div class="visit">{{$aditional["F"][$i]->points}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="serial">{{$i+1}}</div>
										<div class="country"></div>
										<div class="visit"></div>
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
                    <h2 class="playoff-name">I Ćwierćfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px" id="border-playoff-left">
								@if($finals[0]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[0]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[0]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[0]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[0]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[0]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
						</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 class="playoff-name">II Ćwierćfinał</h2>
                    <div class="progress-table-wrap">
							<div class="progress-table" style="padding:0px" id="border-playoff-left">
								@if($finals[1]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[1]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[1]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[1]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[1]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[1]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
							</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 class="playoff-name">III Ćwierćfinał</h2>
                    <div class="progress-table-wrap">
					<div class="progress-table" style="padding:0px" id="border-playoff-right">
								@if($finals[2]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[2]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[2]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[2]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[2]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[2]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
							</div>
					</div>
                    </div>
					<!-- single quaterfinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-" style="margin-bottom:30px">
                    <h2 class="playoff-name">IV Ćwierćfinał</h2>
                    <div class="progress-table-wrap">
					<div class="progress-table" style="padding:0px" id="border-playoff-right">
								@if($finals[3]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[3]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[3]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[3]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[3]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[3]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
							</div>
					</div>
                    </div>

                </div>
				<div class="row">
					<!-- single semifinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 class="playoff-name">I Półfinał</h2>
                    <div class="progress-table-wrap">
					<div class="progress-table" style="padding:0px" id="border-playoff-left">
								@if($finals[4]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[4]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[4]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[4]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[4]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[4]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
							</div>
					</div>
                    </div>
					<!-- single semifinal -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 class="playoff-name">II Półfinał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px" id="border-playoff-right">
								@if($finals[5]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[5]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[5]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[5]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[5]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[5]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
						</div>
					</div>
                    </div>
                </div>
				<div class="row">
					<!-- single 3rd place -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 class="playoff-name">Mecz o 3 msc.</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px" id="border-playoff-left">
							@if($finals[7]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[7]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[7]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[7]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[7]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[7]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
						</div>
					</div>
                    </div>
					<!-- single final -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 offset-xl-2 offset-lg-2 offset-md-2 offset-sm-2" style="margin-bottom:30px">
                    <h2 class="playoff-name">Finał</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table" style="padding:0px" id="border-playoff-right">
							@if($finals[6]->opponents[0]->participant)
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">{{$finals[6]->opponents[0]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[6]->opponents[0]->score}}</div>
									</div>
								@else
									<div class="table-row" id="border-no">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
								@if($finals[6]->opponents[1]->participant)
									<div class="table-row">
										<div class="country" id="playoff-teamname">{{$finals[6]->opponents[1]->participant->name}}</div>
										<div class="serial" style="padding-left: 10px;" >{{$finals[6]->opponents[1]->score}}</div>
									</div>
								@else
									<div class="table-row">
										<div class="country" id="playoff-teamname">TBA</div>
										<div class="serial" style="padding-left: 10px;" >--</div>
									</div>
								@endif
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