@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<style>
@import 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,700';

.bracket {
  display: inline-block;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  white-space: nowrap;
  font-size: 0;
}
.bracket .round {
  display: inline-block;
  vertical-align: middle;
}
.bracket .round .winners > div {
  display: inline-block;
  vertical-align: middle;
}
.bracket .round .winners > div.matchups .matchup:last-child {
  margin-bottom: 0 !important;
}
.bracket .round .winners > div.matchups .matchup .participants {
  border-radius: 0.25rem;
  overflow: hidden;
}
.bracket .round .winners > div.matchups .matchup .participants .participant {
  box-sizing: border-box;
  color: #858585;
  border-left: 0.25rem solid #858585;
  background: white;
  width: 14rem;
  height: 3rem;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.12);
}
.bracket .round .winners > div.matchups .matchup .participants .participant.winner {
  color: #60c645;
  border-color: #60c645;
}
.bracket .round .winners > div.matchups .matchup .participants .participant.loser {
  color: #dc563f;
  border-color: #dc563f;
}
.bracket .round .winners > div.matchups .matchup .participants .participant:not(:last-child) {
  border-bottom: thin solid #f0f2f2;
}
.bracket .round .winners > div.matchups .matchup .participants .participant span {
  margin: 0 1.25rem;
  line-height: 3;
  font-size: 1rem;
  font-family: "Roboto Slab";
}
.bracket .round .winners > div.connector.filled .line, .bracket .round .winners > div.connector.filled.bottom .merger:after, .bracket .round .winners > div.connector.filled.top .merger:before {
  border-color: #60c645;
}
.bracket .round .winners > div.connector .line, .bracket .round .winners > div.connector .merger {
  box-sizing: border-box;
  width: 2rem;
  display: inline-block;
  vertical-align: top;
}
.bracket .round .winners > div.connector .line {
  border-bottom: thin solid #c0c0c8;
  height: 4rem;
}
.bracket .round .winners > div.connector .merger {
  position: relative;
  height: 8rem;
}
.bracket .round .winners > div.connector .merger:before, .bracket .round .winners > div.connector .merger:after {
  content: "";
  display: block;
  box-sizing: border-box;
  width: 100%;
  height: 50%;
  border: 0 solid;
  border-color: #c0c0c8;
}
.bracket .round .winners > div.connector .merger:before {
  border-right-width: thin;
  border-top-width: thin;
}
.bracket .round .winners > div.connector .merger:after {
  border-right-width: thin;
  border-bottom-width: thin;
}
.bracket .round.quarterfinals .winners:not(:last-child) {
  margin-bottom: 2rem;
}
.bracket .round.quarterfinals .winners .matchups .matchup:not(:last-child) {
  margin-bottom: 2rem;
}
.bracket .round.semifinals .winners .matchups .matchup:not(:last-child) {
  margin-bottom: 10rem;
}
.bracket .round.semifinals .winners .connector .merger {
  height: 16rem;
}
.bracket .round.semifinals .winners .connector .line {
  height: 8rem;
}
.bracket .round.finals .winners .connector .merger {
  height: 3rem;
}
.bracket .round.finals .winners .connector .line {
  height: 1.5rem;
}

</style>
@endsection

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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa A</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
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
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
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
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
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
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
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
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
						</div>
					</div>
                    </div>

					<!-- single Tem -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-" style="margin-bottom:30px">
                    <h2 style="text-align:center">Grupa F</h2>
                    <div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="country">Drużyna</div>
								<div class="visit">Zwycięstwa</div>
								<div class="visit">Remisy</div>
								<div class="visit">Porażki</div>
								<div class="visit">Punkty</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">03</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
							<div class="table-row">
								<div class="serial">04</div>
								<div class="country"> <img src="{{ asset('resources/main/img/elements/f1.jpg', true) }}" alt="flag">Canada</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
								<div class="visit">645</div>
							</div>
						</div>
					</div>
                    </div>


					<div class="bracket">
  <section class="round quarterfinals">
    <div class="winners">
      <div class="matchups">
        <div class="matchup">
          <div class="participants">
            <div class="participant winner"><span>Uno</span></div>
            <div class="participant"><span>Ocho</span></div>
          </div>
        </div>
        <div class="matchup">
          <div class="participants">
            <div class="participant"><span>Dos</span></div>
            <div class="participant winner"><span>Siete</span></div>
          </div>
        </div>
      </div>
      <div class="connector">
        <div class="merger"></div>
        <div class="line"></div>
      </div>
    </div>
    <div class="winners">
      <div class="matchups">
        <div class="matchup">
          <div class="participants">
            <div class="participant"><span>Treis</span></div>
            <div class="participant winner"><span>Seis</span></div>
          </div>
        </div>
        <div class="matchup">
          <div class="participants">
            <div class="participant"><span>Cuatro</span></div>
            <div class="participant winner"><span>Cinco</span></div>
          </div>
        </div>
      </div>
      <div class="connector">
        <div class="merger"></div>
        <div class="line"></div>
      </div>
    </div>
  </section>
  <section class="round semifinals">
    <div class="winners">
      <div class="matchups">
        <div class="matchup">
          <div class="participants">
            <div class="participant winner"><span>Uno</span></div>
            <div class="participant"><span>Dos</span></div>
          </div>
        </div>
        <div class="matchup">
          <div class="participants">
            <div class="participant winner"><span>Seis</span></div>
            <div class="participant"><span>Cinco</span></div>
          </div>
        </div>
      </div>
      <div class="connector">
        <div class="merger"></div>
        <div class="line"></div>
      </div>
    </div>
  </section>
  <section class="round finals">
    <div class="winners">
      <div class="matchups">
        <div class="matchup">
          <div class="participants">
            <div class="participant winner"><span>Uno</span></div>
            <div class="participant"><span>Seis</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
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