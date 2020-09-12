@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
@if($main->signedIn == 0)
<div class="card-body">
           <div class="card-title">Zapisz się do najbliższej edycji Underground Esport Cup CS:GO!</div>
           <hr>
           <form method="POST" action="{{ route('createSignIn') }}">
           @csrf
           <input type="hidden" id="teamID" value="{{$main->teamID}}" name="teamID">
           <div class="form-group">
            <label for="input-1" id="title">Nazwa drużyny</label>
            <input type="text" class="form-control" id="teamName" value="{{$main->teamName}}" name="teamName" readonly required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Logo drużyny</label>
            <input type="text" class="form-control" id="logo" value="{{$main->logo}}" name="logo" readonly required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Email kontaktowy</label>
            <input type="text" class="form-control" id="email" value="{{$main->email}}" name="email" readonly required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Fanpage</label>
            <input type="email" class="form-control" id="facebook" value="{{$main->facebook}}" maxlength="50" name="facebook" readonly>
           </div>
           <div class="form-group" style="margin-top: 30px; margin-bottom: 25px">
            <label for="input-1" id="title">Wyznacz podstawowy skład (5 osób)</label><br>
            @for ($i = 0; $i< count($players); $i++)
            <input class="single-checkbox" type="checkbox" name="{{'player'.$i}}" value="{{$players[$i]->id}}"> {{$players[$i]->name}} "{{$players[$i]->nick}}" {{$players[$i]->lastName}}<br>
            @endfor
           </div>
           <div class="form-group">
            <button type="submit" id="submit" class="btn btn-light px-5" disabled><i class="zmdi zmdi-assignment" ></i>  Zapisz się!</button>
          </div>
          </form>
         </div>
@elseif ($main->signedIn == 1)
<div class="card-title" style="margin-top:100px">Twoja drużyna wysłała już zgłoszenie</div>
<hr>
<p>Lista zakwalifikowanych drużyn dostępna jest w zakładce <a href="{{ route('teams') }}">DRUŻYNY</a></p>
@elseif (!$main)
<div class="card-title" style="margin-top:100px">Jak zapisać się do najbliższej edycji Underground Esport Cup CS:GO?</div>
<hr>
<p> Aby Twoja drużyna mogła wziąć udział w rozgrywkach UEC wypełnij poniższe instrukcje w podanej kolejności: </p>
<ol>
  <li>Każdy z zawodników powinien założyć swoje osobne konto na portalu UEC</li>
  <li>Po założeniu konta każdy gracz musi wypełnić wszystkie informacje w zakładce <a href="{{ route('profile') }}">EDYTUJ PROFIL</a></li>
  <li>Założyciel drużyny, po uzupełnieniu informacji ma za zadanie udać się do zakładki <a href="{{ route('dashboard') }}">PANEL GŁÓWNY</a> i utworzyć drużynę</li>
  <li>W tej samej zakładce po przejściu do zarządzania drużyną kapitan ma możliwość zaprosić pozostałych członków drużyny</li>
  <li>Po wysłaniu zaproszeń, gracze powinni zaakceptować zaproszenia</li>
  <li>Jeżeli wszyscy gracze należą już do drużyny, kapitan może powrócić w to miejsce, pojawi się tutaj formularz zgłoszeniowy</li>
  <li>Po wysłaniu formularza pozostało oczekiwanie na decyzję administracji. Jeżeli drużyna oraz gracze posiadają poprawne informacje, oraz wszelkie formularze są bezbłędnie wypełnione, Twoja drużyna pojawi się wśród drużyn zakwalifikowanych do turnieju</li>
  <li>Lista zakwalifikowanych drużyn dostępna jest w zakładce <a href="{{ route('teams') }}">DRUŻYNY</a></li>
</ol>
<br>
<br>
<div class="card-title">UWAGA: Po wysłaniu formularza Twoje dane nie mogą być zmienione. Aby zaktualizować informacje o Tobie lub Twojej drużynie, edytuj odpowiednie pola na stronie, a następnie powiadom o tym administrację turnieju!</div>
@endif
         </div>
	 </div>
	</div><!--End Row-->
@endsection

@section('script')
<script>
  const limit = 5;
  $('input.single-checkbox').on('change', function(evt) {
    if($(this).siblings(':checked').length >= limit) {
        this.checked = false;
    }
  });
</script>
@endsection
