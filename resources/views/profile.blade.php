@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Edytuj profil</div>
           <hr>
           <form method="POST" action="{{ route('profileEdit') }}">
           @csrf
           <input type="hidden" id="id" value="{{$user->id}}"name="id">
           <div class="form-group">
            <label for="input-1" id="title">Imię</label>
            <input type="text" class="form-control" id="name" value="{{$user->name}}" maxlength="50" name="name" autofocus required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Nick</label>
            <input type="text" class="form-control" id="nick" value="{{$user->nick}}" maxlength="50" name="nick"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Nazwisko</label>
            <input type="text" class="form-control" id="lastName" value="{{$user->lastName}}" maxlength="50" name="lastName"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">E-mail</label>
            <input type="email" class="form-control" id="email" value="{{$user->email}}" maxlength="50" name="email" required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Steam ID 64</label>
            @if ( $user->steamID == null )
            <input type="text" class="form-control" id="steamID" placeholder="Podaj steamID 64 (np. przy użyciu www.steamid.io)" minlength="17" maxlength="17" name="steamID">
            @else
            <input type="text" class="form-control" id="steamID" value="{{$user->steamID}}" minlength="17" maxlength="17" name="steamID">
            @endif
           </div>
           <div class="form-group">
            <label for="input-2">Data urodzenia</label>
            @if ( $user->dateOfBirth == null )
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" max="2015-01-01" min="1915-01-01">
            @else
            <input type="date" class="form-control" value="{{$user->dateOfBirth}}" id="dateOfBirth" name="dateOfBirth" max="2015-01-01" min="1915-01-01"> 
            @endif
           </div>
           <div class="form-group">
            <label for="input-3">Zdjęcie</label>
            @if ( $user->photo == null )
            <input type="url" class="form-control" id="photo" maxlength="200" placeholder="Podaj link do Twojego zdjęcia (np. przy użyciu https://imgur.com/)" name="photo">
            @else
            <input type="url" class="form-control" id="photo" maxlength="200" value="{{$user->photo}}" name="photo">
            @endif
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-assignment"></i>  Aktualizuj</button>
          </div>
          </form>
         </div>
         </div>
	 </div>
	</div><!--End Row-->
@endsection
