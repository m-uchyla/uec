@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Edytuj profil</div>
           <hr>
           <form method="POST" action="{{ route('editProfile') }}">
           @csrf
           <div class="form-group">
            <label for="input-1" id="title">Imię</label>
            <input type="text" class="form-control" id="name" placeholder="{{$user->name}}" maxlength="50" name="name" autofocus required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Nick</label>
            <input type="text" class="form-control" id="nick" placeholder="{{$user->nick}}" maxlength="50" name="nick"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Nazwisko</label>
            <input type="text" class="form-control" id="lastName" placeholder="{{$user->lastName}}" maxlength="50" name="lastName"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">E-mail</label>
            <input type="text" class="form-control" id="email" placeholder="{{$user->email}}" maxlength="50" name="email" required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Steam ID 64</label>
            <input type="text" class="form-control" id="steamID" placeholder="Podaj steamID 64 (np. przy użyciu www.steamid.io)" maxlength="50" name="steamID">
           </div>
           <div class="form-group">
            <label for="input-2">Data urodzenia</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
           </div>
           <div class="form-group">
            <label for="input-3">Zdjęcie</label>
            <input type="text" class="form-control" id="photo" maxlength="200" placeholder="Podaj link do Twojego zdjęcia (np. przy użyciu https://imgur.com/)" name="photo">
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
