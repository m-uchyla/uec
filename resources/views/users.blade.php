@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
  
	<div class="row">
	  <div class="col-12 col-lg-12">
	    <div class="card">
	      <div class="card-header">Użytkownicy
	        <div class="card-action">
            <div class="dropdown">
              
           
          </div>
        </div>
	    </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>ID</th>
                     <th>Nick</th>
                     <th>E-mail</th>
                     <th>Rola</th>
                     <th>Utworzono</th>
                     <th>Edytowano</th>
                     <th style="text-align:center">Akcje</th>
                   </tr>
                   </thead>
                   <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                        <div class="row mt-3" style="margin:0px">
                        <div class="col-lg-6" style="text-align:right">
                        <form method="GET" action="">
                        @csrf
                          <input type="hidden" id="articleID" name="articleID" value="0">
                          <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                        </form>
                        </div>
                        <div class="col-lg-6" style="padding:0px" id="0">
                        <button type="button" onClick="confirm( 0 )" class="btn btn-light px-5"> Usuń</button>
                        </div>
                        </div>
                        </td>
                      </tr>
                    @endforeach

                 </tbody></table>
               </div>
               
	   </div>
     {{ $users->links() }}
	 </div>
	</div><!--End Row-->
@endsection

@section('script')
<script>
  function confirm(id){
    document.getElementById(id).innerHTML = `<form method="POST" action="">
                          @csrf
                            <input type="hidden" id="articleID" name="articleID" value="0">
                            <button type="submit" class="btn btn-light px-5"> Potwierdź</button>
                          </form>`
  }
</script>
@endsection