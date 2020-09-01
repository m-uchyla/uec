@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      
    <div class="col-lg-12">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Podsumowanie</span></a>
                </li>
                @if ( ((Auth::user()->dateOfBirth) != null) && ((Auth::user()->steamID) != null) && ((Auth::user()->photo) != null))
                    @if ($main != null )
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Zarządzaj drużyną</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edytuj drużynę</span></a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#new" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Utwórz drużynę</span></a>
                        </li>
                    @endif
                @endif
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <h5 class="mb-3">{{Auth::user()->name}} "{{Auth::user()->nick}}" {{Auth::user()->lastName}}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Kontakt</h6>
                            <p>
                            {{Auth::user()->email}}
                            </p>
                            @if ($main != null )
                                <h6>Drużyna, której jesteś założycielem</h6>
                                <p>
                                    {{$main->teamName}}
                                </p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h6>Drużyny, do których należysz</h6>
                            @forelse ($teams as $t)
                            <div class="badge badge-dark badge-pill">{{$t->teamName}}</div>
                            @empty
                            <div class="badge badge-dark badge-pill">BRAK DRUŻYN</div>
                            @endforelse
                            <hr>
                            @if ( (Auth::user()->steamID)== null)
                            <span class="badge badge-danger">Brak przypisanego Steam ID 64 do konta</span>
                            @endif
                            @if ( (Auth::user()->photo)== null)
                            <span class="badge badge-danger">Brak przypisanego zdjęcia do konta</span>
                            @endif
                            @if ( (Auth::user()->dateOfBirth)== null)
                            <span class="badge badge-danger">Brak przypisanej daty urodzenia do konta</span>
                            @endif
                            @if ( ((Auth::user()->dateOfBirth) != null) && ((Auth::user()->steamID) != null) && ((Auth::user()->photo) != null))
                            <span class="badge badge-success">Konto aktywne</span>
                            @endif
                            @if ( ((Auth::user()->dateOfBirth) == null) || ((Auth::user()->steamID) == null) || ((Auth::user()->photo) == null))
                            <span class="badge badge-primary">Konto nieaktywne, uzupełnij brakujące informacje</span>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3">Zaproszenia do drużyny</h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    @if ( ((Auth::user()->dateOfBirth) == null) || ((Auth::user()->steamID) == null) || ((Auth::user()->photo) == null))
                                        <tr>
                                            <td>
                                                Konto nieaktywne, zaproszenia ukryte
                                            </td>
                                        </tr>
                                    @else  
                                        @forelse ($invite as $i)                                  
                                        <tr>
                                            <td>
                                                <span class="float-right font-weight-bold">
                                                    <div class="row mt-3" style="margin:0px">
                                                        <div class="col-lg-6" style="text-align:right">
                                                            <form method="POST" action="{{ route('acceptInvite') }}">
                                                                @csrf
                                                                <input type="hidden" name="teamuserID" value="{{$i->teamuserID}}">
                                                                <input type="submit" class="btn btn-light px-5" value="Akceptuj">
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6" style="text-align:right">
                                                            <form method="POST" action="{{ route('rejectInvite') }}">
                                                                @csrf
                                                                <input type="hidden" name="teamuserID" value="{{$i->teamuserID}}">
                                                                <input type="submit" class="btn btn-light px-5" value="Odrzuć">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </span>
                                                <strong>{{$i->owner}}</strong> zaprosił Cię do drużyny <strong>"{{$i->team}}"</strong> 
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>
                                                Brak nowych zaproszeń
                                            </td>
                                        </tr>
                                        @endforelse
                                    @endif
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                @if ($main != null )
                <div class="tab-pane" id="messages">
                    <h4 style="text-align:center"> {{$main->teamName}} </h4>
                <h5 class="mt-2 mb-3">Członkowie drużyny</h5>
                  <div class="table-responsive" style="margin-bottom:25px">
                    <table class="table table-hover table-striped">
                        <tbody>  
                            @forelse ($players as $p) 
                                @if ($p->id == Auth::user()->id)
                                    <tr>
                                        <td>
                                        {{$p->name}} "{{$p->nick}}" {{$p->lastName}}
                                        </td>
                                    </tr> 
                                @else                                
                                    <tr>
                                        <td>
                                            <form method="POST" action="{{ route('remove') }}">
                                                @csrf
                                                <input type="hidden" name="userID" value="{{$p->id}}">
                                                <input type="hidden" name="teamID" value="{{$main->teamID}}">
                                                <span class="float-right font-weight-bold"><input type="submit">Usuń</input></span> 
                                            </form>
                                            {{$p->name}} "{{$p->nick}}" {{$p->lastName}}
                                        </td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td>
                                    <span class="float-right font-weight-bold"></span> 
                                    Brak graczy
                                    </td>
                                </tr>
                            @endforelse
                        </tbody> 
                    </table>
                  </div>
                  <h5 class="mt-2 mb-3">Zaproś zawodników</h5>
                  
                  <form method="POST" action="{{ route('invite') }}">
                    @csrf
                        <input type="hidden" name="ownerID" value="{{Auth::id()}}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="hidden" name="teamID" id="teamID" value="{{$main->teamID}}">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Wprowadź email zawodnika, którego chcesz dodać do drużyny">
                            </div>
                            <input type="submit" class="btn btn-light px-5" value="Zaproś">
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="edit">
                    <form method="POST" action="{{ route('editTeam') }}">
                    @csrf
                        <input type="hidden" name="ownerID" value="{{Auth::id()}}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nazwa drużyny</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="teamName" name="teamName" value="{{$main->teamName}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fanpage (opcjonalnie)</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" id="facebook" name="facebook" value="{{$main->facebook}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" id="email" name="email" value="{{$main->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Logo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" id="logo" name="logo" value="{{$main->logo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-light px-5" value="Edytuj drużynę">
                            </div>
                        </div>
                    </form>
                </div>
                @endif
                <div class="tab-pane" id="new">
                    <form method="POST" action="{{ route('createTeam') }}">
                    @csrf
                        <input type="hidden" name="ownerID" value="{{Auth::id()}}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nazwa drużyny</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="teamName" name="teamName" placeholder="Wprowadź nazwę teamu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fanpage (opcjonalnie)</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" id="facebook" name="facebook" placeholder="Podaj link do strony drużyny na facebooku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Wprowadź główny email kontaktowy drużyny">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Logo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" id="logo" name="logo" placeholder="Podaj link do logotypu drużyny (BEZ TŁA)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-light px-5" value="Utwórz drużynę">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>

	
	 </div>
	</div><!--End Row-->
@endsection
