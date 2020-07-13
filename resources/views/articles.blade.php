@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	
  <div class="row mt-3" style="margin-bottom:16px">
      <div class="col-lg-6" style="text-align:right">
      <button type="submit" class="btn btn-light px-5" style="width:400px;height:50px;text-align:"> Dodaj artykuł</button>
      </div>

      <div class="col-lg-6">
      <button type="submit" class="btn btn-light px-5" style="width:400px;height:50px"> Zarządzaj artykułami wyróżnionymi</button>
 
      </div>
    </div>

	<div class="row">
	  <div class="col-12 col-lg-12">
	    <div class="card">
	      <div class="card-header">Artykuły
	        <div class="card-action">
            <div class="dropdown">
              <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
              </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
            </div>
          </div>
        </div>
	    </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Tytuł</th>
                     <th>ID artykułu</th>
                     <th>Ilość wyświetleń</th>
                     <th>Data publikacji</th>
                     <th>Autor</th>
                     <th>Akcje</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Tytuł testowy</td>
                    <td>#9405822</td>
                    <td>1235</td>
                    <td>03 Aug 2017</td>
                    <td>VEEX</td>
                    <td>
                    <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                    <button type="submit" class="btn btn-light px-5"> Usuń</button>
                    </td>
                   </tr>

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
@endsection