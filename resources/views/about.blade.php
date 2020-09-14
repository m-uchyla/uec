@extends('layouts.app')

@section('content')
        <!--? Blog Area Start-->
        <!--? About Start-->
        <section class="about-area section-padding2"  id="about" style="padding-bottom: 0px">
            <div class="container"> 
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-35">
                                <span>O nas</span>
                                <h2>Przede wszystkim doświadczenie</h2>
                            </div>
                            <p>
                                Naszym celem jest zaprezentowanie Państwu esportowego wydarzenia mogącego konkurować z największymi turniejami online w kraju. Jest to możliwe dzięki grupie doświadczonych ludzi pracujących nad projektem. Wśród tych osób znaleźć można- komentatorów, administratorów, grafików, montażystów, programistów i web developerów. Nasi realizatorzy i komentatorzy mogą się pochwalić doświadczeniem w relacjonowaniu największych międzynarodowych eventów oraz spotkań najbardziej popularnych drużyn z całego świata, a nad naszymi meczami przez cały okres trwania wydarzenia czuwają doświadczeni administratorzy i organizatorzy rozmaitych turniejów online jak i offline. Wielu z nich w swoim portfolio posiada nie kilka a kilkanaście turniejów nad którymi sprawowali pieczę. Dzięki współpracy wszystkich tych specjalistów jesteśmy w stanie organizować wydarzenia, których na pewno nie zapomną ani kibice ani zawodnicy.
                            </p>
                            <a href="https://m.me/UndergroundEsportCup" class="btn">Skontaktuj się z nami</a>
                            <a href="#about" class="btn" id="click" style="visibility:hidden"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img ">
                                <img src="{{ asset('resources/main/img/gallery/about.png', true) }}" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="{{ asset('resources/main/img/gallery/about2.png', true) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->


        <!--? All startups Start -->
        <div class="starups-area testimonial-area fix">
            <div class="starups-img">
                <div class="play-btn"><a class="popup-video" href="https://www.youtube.com/watch?v=gv2uuj-nIJE"><i class="flaticon-null-3"></i></a></div>
            </div>
            <div class="starups">
                <div class="h1-testimonial-active">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <div class="testimonial-founder d-flex align-items-center justify-content-center mb-40">
                                <div class="founder-img">
                                    <img src="https://i.imgur.com/6ewtPHO.png" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Krzysiek "KXN" Szymczak</span>
                                    <p>Były manager ACTINA PACT i Pompa Team</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>Jest to jeden z najlepiej organizowanych turnijeów na amatorskim szczeblu na które trafiłem. Szczególnie warto uwagę zwrócić na realizację transmisji, która jest boska. Jeśli szukasz turnieju dla swojej drużyny- UEC to najlepszy wybór</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--All startups End -->


        <!--? Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Nasi eksperci</span>
                            <h2>Kadra zarządzająca projektem</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('resources/main/img/gallery/team_milek.png', true) }}" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" style="font-size:25px">Jakub "mil3k" Milewski</a></h3>
                                <span>Komentarz & koordynacja</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('resources/main/img/gallery/team_qnek.png', true) }}" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" style="font-size:25px">Jakub "Qn3k" Jankowski</a></h3>
                                <span>Realizacja & komentarz</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('resources/main/img/gallery/team_vexon.png', true) }}" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" style="font-size:25px">Jacek "Vexon" Sosnowski</a></h3>
                                <span>Social media & administracja</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('resources/main/img/gallery/team_2.png', true) }}" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="#" style="font-size:25px">Mateusz "VEEX" Uchyła</a></h3>
                                <span>Design & web development</span>
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