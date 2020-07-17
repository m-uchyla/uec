@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Nowy artykuł</div>
           <hr>
           <form method="POST" action="{{ route('newarticle') }}">
           @csrf
           <div class="form-group">
            <label for="input-1" id="title">Tytuł * {{ Auth::id() }}</label>
            <input type="text" class="form-control" id="title" placeholder="Wprowadź tytuł" name="title" autofocus required>
           </div>
           <input type="hidden" id="author" name="author" value="0">
           <div class="form-group">
            <label for="input-2">Drużyna *</label>
            <input type="text" class="form-control" id="team" placeholder="Podaj drużynę/osobę której dotyczy artykuł" name="team" required>
           </div>
           <div class="form-group">
            <label for="input-3">Podtytuł *</label>
            <input type="text" class="form-control" id="subtitle" placeholder="Napisz dwa-trzy zdania do czego odnosi się artykuł nawiązując do tytułu." name="subtitle" required>
           </div>
           <div class="form-group">
            <label for="input-4">Link do grafiki głownej *</label>
            <input type="text" class="form-control" id="main_pic" placeholder="Link do obrazu o wymiarach: " name="main_pic" required>
           </div>
           <div class="form-group">
            <label for="input-5">Link do grafiki dodatkowej</label>
            <input type="text" class="form-control" id="big_pic" placeholder="Tylko na potrzeby wyróżnionego posta. Link do obrazu o wymiarach" name="big_pic">
           </div>
           <div class="form-group">
            <label for="input-6">Treść *</label>
            <!-- <input type="text" class="form-control" id="input-4" placeholder="Enter Password"> -->
            <textarea id="content" name="content" rows="10" class="form-control" required> </textarea>
           </div>
            <p>* - pola wymagane</p>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-assignment"></i>  Dodaj</button>
          </div>
          </form>
         </div>
         </div>
	 </div>
	</div><!--End Row-->
@endsection

@section('script')
<script>

document.getElementById("author").value = {{ Auth::id() }};

</script>
@endsection