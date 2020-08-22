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
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Zarządzaj drużyną</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Utwórz drużynę</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">{{Auth::user()->name}} "{{Auth::user()->nick}}" {{Auth::user()->lastName}}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Kontakt</h6>
                            <p>
                            {{Auth::user()->email}}
                            </p>
                            <h6>Drużyna, której jesteś założycielem</h6>
                            <p>
                                Erydan Esports
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Drużyny, do których należysz</h6>
                            <div class="badge badge-dark badge-pill">html5</div>
                            <div class="badge badge-dark badge-pill">react</div>
                            <div class="badge badge-dark badge-pill">codeply</div>
                            <div class="badge badge-dark badge-pill">angularjs</div>
                            <div class="badge badge-dark badge-pill">css3</div>
                            <div class="badge badge-dark badge-pill">jquery</div>
                            <div class="badge badge-dark badge-pill">bootstrap</div>
                            <div class="badge badge-dark badge-pill">responsive-design</div>
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
                                    <tr>
                                        <td>
                                            <strong>VEEX</strong> zaprosił Cię do drużyny <strong>`Erydan Esports`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissible" role="alert">
				   <button type="button" class="close" data-dismiss="alert">×</button>
				    <div class="alert-icon">
					 <i class="icon-info"></i>
				    </div>
				    <div class="alert-message">
				      <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
				    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>                                    
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus. 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                   <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros. 
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="edit">
                    <form method="POST" action="{{ route('createTeam') }}">
                    @csrf
                        <input type="hidden" value="{{Auth::id()}}">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nazwa drużyny</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" placeholder="Wprowadź nazwę teamu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fanpage (opcjonalnie)</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" placeholder="Podaj link do strony drużyny na facebooku">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" placeholder="Wprowadź główny email kontaktowy drużyny">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Logo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" placeholder="Podaj link do logotypu drużyny (BEZ TŁA)">
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
