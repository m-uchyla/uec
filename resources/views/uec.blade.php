@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Zapisz się do najbliższej edycji Underground Esport Cup CS:GO!</div>
           <hr>
           <form method="POST" action="">
           @csrf
           <input type="hidden" id="teamID" value="0" name="teamID">
           <div class="form-group">
            <label for="input-1" id="title">Nazwa drużyny</label>
            <input type="text" class="form-control" id="teamName" value="teamName" maxlength="50" name="teamName" autofocus required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Logo drużyny</label>
            <input type="text" class="form-control" id="logo" value="logo" maxlength="50" name="logo"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Email kontaktowy</label>
            <input type="text" class="form-control" id="email" value="email" maxlength="50" name="email"  required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Fanpage</label>
            <input type="email" class="form-control" id="facebook" value="facebook" maxlength="50" name="facebook" required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Kapitan</label>
            <input type="email" class="form-control" id="ownerID" value="ownerID" maxlength="50" name="ownerID" required>
           </div>
           <div class="form-group">
            <label for="input-1" id="title">Wyznacz podstawowy skład (max 5 osób)</label>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 1<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 2<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 3<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 4<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 5<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 6<br>
            <input class="single-checkbox" type="checkbox" name="vehicle" value="Bike">Level 7<br>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-assignment"></i>  Zapisz się!</button>
          </div>
          </form>
         </div>
         </div>
	 </div>
	</div><!--End Row-->
@endsection

@section('script')
<script>
  var limit = 5;
  $('input.single-checkbox').on('change', function(evt) {
    if($(this).siblings(':checked').length >= limit) {
        this.checked = false;
    }
  });
</script>
@endsection
