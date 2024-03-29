@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$users["count"]}}<span class="float-right"><i class="fa fa-users"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Suma użytkowników  {{date("Y-m-d H:i:s",strtotime("-1 days"))}}</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$users["lastWeek"]}}<span class="float-right"><i class="fa fa-user"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Nowi użytkownicy (w tym tyg.)</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$views}} <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Suma wyświetleń artykułów</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">{{$lastViews}} <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Wyświetlenia artykułów z 7 dni wstecz</p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
	<div class="row">
     <div class="col-12 col-lg-8 col-xl-8">
	    <div class="card">
		 <div class="card-header">Użytkownicy na stronie
		   <div class="card-action">
		   </div>
		 </div>
		 <div class="card-body">
		    <ul class="list-inline">
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>Zarejstrowani w obecnym tygodniu</li>
			  <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Zarejstrowani w poprzednim tygodniu</li>
			</ul>
			<div class="chart-container-1">
			  <canvas id="chart1"></canvas>
			</div>
		 </div>
		 
		 <div class="row m-0 row-group text-center border-top border-light-3">
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">{{$users["count"]}}</h5>
			   <small class="mb-0">Zarejstrowanych użytkowników w sumie</small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">{{$users["lastMonth"]}}</h5>
			   <small class="mb-0">Nowi użytkowicy z ostatniego miesiąca <span> <i class="fa fa-arrow-up"></i> 12.65%</span></small>
		     </div>
		   </div>
		   <div class="col-12 col-lg-4">
		     <div class="p-3">
		       <h5 class="mb-0">{{$users["lastWeek"]}}</h5>
			   <small class="mb-0">Nowi użytkownicy z ostatniego tygodnia <span> <i class="fa fa-arrow-up"></i> 5.62%</span></small>
		     </div>
		   </div>
		 </div>
		 
		</div>
	 </div>
     <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
           <div class="card-header">Zgłoszenia do turnieju
             <div class="card-action">
            
             </div>
           </div>
           <div class="card-body">
		     <div class="chart-container-2">
               <canvas id="chart2"></canvas>
			  </div>
           </div>
           <div class="table-responsive">
             <table class="table align-items-center">
               <tbody>
               <tr>
                   <td></i>Suma zgłoszeń</td>
                   <td>16</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-white mr-2"></i> Potwierdzone zgłoszenia</td>
                   <td id='accepted'>9</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-2 mr-2"></i>Niepotwierdzone zgłoszenia</td>
                   <td id='pending'>4</td>
                 </tr>
                 <tr>
                   <td><i class="fa fa-circle text-light-3 mr-2"></i>Wolne miejsca</td>
                   <td id='free'>3</td>

                 </tr>
               </tbody>
             </table>
           </div>
         </div>
     </div>
	</div><!--End Row-->
  
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Niepotwierdzone zgłoszenia
		  <div class="card-action">
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Nazwa drużyny</th>
                     <th>Email</th>
                     <th>ID drużyny</th>
                     <th>Kapitan</th>
                     <th>Data zgłoszenia</th>
                     <th>Akcja</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach ($registrations as $r)
                    @if($r->status == "pending")
                    <tr>
                      <td>{{$r->name}}</td>
                      <td>{{$r->email}}</td>
                      <td>{{$r->id}}</td>
                      <td>{{$r->lineup[0]->name}}</td>
                      <td>{{$r->created_at}}</td>
                      <td>
                      <form method="GET" action="{{ route('registration') }}">
                          @csrf
                          <input type="hidden" id="registrationID" name="registrationID" value="{{$r->id}}">
                          <button type="submit" class="btn btn-light px-5">Moderowanie</button>
                      </form>
                      </td>
                    </tr>
                    @endif
                   @endforeach


                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

  <div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Potwierdzone zgłoszenia
		  <div class="card-action">
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                  <tr>
                     <th>Nazwa drużyny</th>
                     <th>Logo</th>
                     <th>ID drużyny</th>
                     <th>Ilość graczy</th>
                     <th>Data zgłoszenia</th>
                     <th>Akcja</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach ($registrations as $r)
                    @if($r->status == "accepted")
                    <tr>
                      <td>{{$r->name}}</td>
                      <td>{{$r->email}}</td>
                      <td>{{$r->id}}</td>
                      <td>{{$r->lineup[0]->name}}</td>
                      <td>{{$r->created_at}}</td>
                      <td>
                      <form method="GET" action="{{ route('registration') }}">
                          @csrf
                          <input type="hidden" id="registrationID" name="registrationID" value="{{$r->id}}">
                          <button type="submit" class="btn btn-light px-5">Zgłoszenie</button>
                      </form>
                      </td>
                    </tr>
                    @endif
                   @endforeach
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
@endsection

@section('script')
<script>
$(document).ready(function(){

function getDay(days){
  let d = new Date();
  let weekday = new Array(7);
  weekday[0] = "Niedziela";
  weekday[1] = "Poniedziałek";
  weekday[2] = "Wtorek";
  weekday[3] = "Środa";
  weekday[4] = "Czwartek";
  weekday[5] = "Piątek";
  weekday[6] = "Sobota";

  let n = d.getDay() - days;

  if( n < 0 ){
    n = 7 + n;
  }
  return weekday[n]
}

const array = @json($count);
var ctx = document.getElementById('chart1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [getDay(6), getDay(5), getDay(4), getDay(3), getDay(2), getDay(1), getDay(0)],
            datasets: [{
                label: 'New Visitor',
                data: [array[6], array[5], array[4], array[3], array[2], array[1], array[0]],
                backgroundColor: '#fff',
                borderColor: "transparent",
                pointRadius: "0",
                borderWidth: 3
            }, {
                label: 'Old Visitor',
                data: [array[13], array[12], array[11], array[10], array[9], array[8], array[7]],
                backgroundColor: "rgba(255, 255, 255, 0.25)",
                borderColor: "transparent",
                pointRadius: "0",
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false,
                labels: {
                    fontColor: '#ddd',
                    boxWidth: 40
                }
            },
            tooltips: {
                displayColors: false
            },
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                    },
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                        display: true,
                        color: "rgba(221, 221, 221, 0.08)"
                    },
                }]
            }

        }
    });

    var ctx = document.getElementById("chart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Potwierdzone zgłoszenia", "Niepotwierdzone zgłoszenia", "Wolne miejsca"],
            datasets: [{
                backgroundColor: [
                    "#ffffff",
                    "rgba(255, 255, 255, 0.50)",
                    "rgba(255, 255, 255, 0.20)"
                ],
                data: [
                  document.getElementById("accepted").innerHTML, 
                  document.getElementById("pending").innerHTML, 
                  document.getElementById("free") .innerHTML
                ],
                borderWidth: [0, 0, 0]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                position: "bottom",
                display: false,
                labels: {
                    fontColor: '#ddd',
                    boxWidth: 15
                }
            },
            tooltips: {
                displayColors: false
            }
        }
    });

});
</script>
@endsection