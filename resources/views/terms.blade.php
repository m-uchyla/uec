@extends('layouts.app')

@section('content')
        <!--? Blog Area Start-->
        <section class="about-area section-padding2"  id="terms" style="padding-top:0px">
            <a href="#terms" class="btn" id="click" style="visibility:hidden"></a>
            <!--? Team Start -->
            <div class="team-area section-padding30" style="padding-top:50px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                            <!-- Section Tittle -->
                            <div class="section-tittle text-center mb-70">
                                <span>Regulamin</span>
                                <h2>Zasady dotyczące użytkowników serwisu</h2>
                            </div> 
                        </div>
                    </div>  
                </div>
            </div>
        <section>
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