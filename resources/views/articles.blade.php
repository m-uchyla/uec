@extends('layouts.admin')
@section('content')
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	
  <div class="row mt-3" style="margin-bottom:16px">
      <div class="col-lg-6" style="text-align:right">
      <button type="button" onclick="window.location.href='{{ route('newarticle') }}';"  class="btn btn-light px-5" style="width:400px;height:50px;"> Dodaj artykuł</button>
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
                   @foreach ($featured as $f)
                      <tr>
                        <td>{{$f->title}}</td>
                        <td>{{$f->id}}</td>
                        <td>{{$f->views}}</td>
                        <td>{{$f->created_at}}</td>
                        <td>{{$f->author}}</td>
                        <td>
                        <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                        <button type="submit" class="btn btn-light px-5"> Usuń</button>
                        </td>
                      </tr>
                    @endforeach
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
                     <th style="text-align:center">Akcje</th>
                   </tr>
                   </thead>
                   <tbody>
                    @foreach ($articles as $article)
                      <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->views }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>{{ $article->author }}</td>
                        
                          <td>
                          @if ( $article->authorID ==  Auth::id() )
                          <div class="row mt-3" style="margin:0px">
                          <div class="col-lg-6" style="text-align:right">
                          <form method="GET" action="{{ route('editArticle') }}">
                          @csrf
                            <input type="hidden" id="articleID" name="articleID" value="{{ $article->id }}">
                            <button type="submit" class="btn btn-light px-5"> Edytuj</button>
                          </form>
                          </div>
                          <div class="col-lg-6" style="padding:0px" id="{{ $article->id }}">
                          <button type="button" onClick="confirm( {{ $article->id }} )" class="btn btn-light px-5"> Usuń</button>
                          </div>
                          </div>
                          @endif
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

@section('script')
<script>
  function confirm(id){
    document.getElementById(id).innerHTML = `<form method="POST" action="{{ route('deleteArticle') }}">
                          @csrf
                            <input type="hidden" id="articleID" name="articleID" value="`+id+`">
                            <button type="submit" class="btn btn-light px-5"> Potwierdź</button>
                          </form>`
  }
</script>
@endsection