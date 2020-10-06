@extends('layouts.app')
@section('content')
<div class="team-area section-padding30" id='bracket'>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                         <!-- Section Tittle -->
                         <div class="section-tittle text-center mb-70">
                            <span>Etap Trzeci</span>
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
								<div class="visit">+/-</div>
								<div class="visit">Punkty</div>
							</div>
						    @else
									<div class="table-row">
										<div class="serial"></div>
										<div class="country"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
										<div class="visit"></div>
									</div>
								
							@endfor
						</div>
					</div>
            </div>
</div>                
@endsection