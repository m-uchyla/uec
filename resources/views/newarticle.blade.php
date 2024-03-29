@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('resources/trumbowyg/dist/ui/trumbowyg.min.css', true) }}">
@endsection

@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Nowy artykuł</div>
           <hr>
           <form method="POST" action="{{ route('newarticle') }}">
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
           @csrf
           <div class="form-group">
            <label for="input-1" id="title">Tytuł *</label>
            <input type="text" class="form-control" id="title" placeholder="Wprowadź tytuł" maxlength="250" name="title" autofocus required>
           </div>
           <input type="hidden" id="author" name="author" value="{{ Auth::id() }}">
           <div class="form-group">
            <label for="input-2">Drużyna *</label>
            <input type="text" class="form-control" id="team" maxlength="50" placeholder="Podaj drużynę/osobę której dotyczy artykuł" name="team" required>
           </div>
           <div class="form-group">
            <label for="input-3">Podtytuł *</label>
            <input type="text" class="form-control" id="subtitle" maxlength="250" placeholder="Napisz dwa-trzy zdania do czego odnosi się artykuł nawiązując do tytułu." name="subtitle" required>
           </div>
           <div class="form-group">
            <label for="input-4">Link do grafiki głownej *</label>
            <input type="url" class="form-control" id="main_pic" placeholder="Link do obrazu o wymiarach: " maxlength="250" name="main_pic" required>
           </div>
           <div class="form-group">
            <label for="input-5">Link do grafiki dodatkowej</label>
            <input type="url" class="form-control" id="big_pic" maxlength="250" placeholder="Tylko na potrzeby wyróżnionego posta. Link do obrazu o wymiarach" name="big_pic">
           </div>
           <div class="form-group">
            <label for="input-6">Treść *</label>
            <!-- <input type="text" class="form-control" id="input-4" placeholder="Enter Password"> -->
            <textarea id="content" onkeyup="charcountupdate(this.value)" name="content" rows="10" class="form-control" maxlength="10000" required> </textarea>
           </div>
           <span id=charcount></span>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="{{ asset('resources/trumbowyg/dist/trumbowyg.min.js', true) }}"></script>


<script>

$('#content').trumbowyg();

function charcountupdate(str) {
	var lng = str.length;
	document.getElementById("charcount").innerHTML = 10000-lng + ' pozostało z 10000 znaków';
}

</script>
@endsection