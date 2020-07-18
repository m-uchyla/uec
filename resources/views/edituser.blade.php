@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Edytuj użytkownika</div>
           <hr>
           <form method="POST" action="{{ route('updateUser') }}">
           @csrf
           <input type="hidden" id="id" name="id" value="{{ $user->id }}">
           <div class="form-group">
            <label for="input-1" id="title">Nazwa użytkownika *</label>
            <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name" required>
           </div>
           <div class="form-group">
            <label for="input-2">Email *</label>
            <input type="text" class="form-control" id="email" value="{{ $user->email }}" name="email" required>
           </div>
           <div class="form-group">
            <label for="input-3">Rola *</label>
            <input type="text" class="form-control" id="role" value="{{ $user->role }}" name="role" required>
           </div>
            <p>* - pola wymagane</p>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-assignment"></i>  Edytuj</button>
          </div>
          </form>
         </div>
         </div>
	 </div>
	</div><!--End Row-->
@endsection