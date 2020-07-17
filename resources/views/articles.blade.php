@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	
  <div class="row mt-3" style="margin-bottom:16px">
      <div class="col-lg-6" style="text-align:right">
      <button type="button" onclick="window.location.href='{{ route('newarticle') }}';"  class="btn btn-light px-5" style="width:400px;height:50px;text-align:"> Dodaj artykuł</button>
      </div>

      <div class="col-lg-6">
      <button type="submit" class="btn btn-light px-5" style="width:400px;height:50px"> Zarządzaj artykułami wyróżnionymi</button>
 
      </div>
    </div>

    <div class="row">
	  <div class="col-12 col-lg-12">
	    <div class="card">
	      <div class="card-header">Artykuły wyróżnione
	        <div class="card-action">
            <div class="dropdown">
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
                   <tbody>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>
                        <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                        <button type="submit" class="btn btn-light px-5"> Usuń</button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>
                        <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                        <button type="submit" class="btn btn-light px-5"> Usuń</button>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
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

	<div class="row">
	  <div class="col-12 col-lg-12">
	    <div class="card">
	      <div class="card-header">Artykuły
	        <div class="card-action">
            <div class="dropdown">
              
           
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
                   <tbody>
                    @foreach ($articles as $article)
                      <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->id }}</td>
                        <td>1235</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->author }}</td>
                        <td>
                        <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                        <button type="submit" class="btn btn-light px-5"> Usuń</button>
                        </td>
                      </tr>
                    @endforeach

                 </tbody></table>
               </div>
               
	   </div>
     {{ $articles->links() }}
	 </div>
	</div><!--End Row-->
@endsection