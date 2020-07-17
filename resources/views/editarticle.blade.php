@extends('layouts.admin')
@section('content')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

<div class="card-body">
           <div class="card-title">Edytuj artykuł</div>
           <hr>
           <form method="POST" action="{{ route('updateArticle') }}">
           @csrf
           <input type="hidden" id="id" name="id" value="{{ $article->id }}">
           <div class="form-group">
            <label for="input-1" id="title">Tytuł *</label>
            <input type="text" class="form-control" id="title" value="{{ $article->title }}" name="title" required>
           </div>
           <div class="form-group">
            <label for="input-2">Drużyna *</label>
            <input type="text" class="form-control" id="team" value="{{ $article->team }}" name="team" required>
           </div>
           <div class="form-group">
            <label for="input-3">Podtytuł *</label>
            <input type="text" class="form-control" id="subtitle" value="{{ $article->subtitle }}" name="subtitle" required>
           </div>
           <div class="form-group">
            <label for="input-4">Link do grafiki głownej *</label>
            <input type="text" class="form-control" id="main_pic" value="{{ $article->main_pic }}" name="main_pic" required>
           </div>
           <div class="form-group">
            <label for="input-5">Link do grafiki dodatkowej</label>
            <input type="text" class="form-control" id="big_pic" value="{{ $article->big_pic }}" name="big_pic">
           </div>
           <div class="form-group">
            <label for="input-6">Treść *</label>
            <!-- <input type="text" class="form-control" id="input-4" placeholder="Enter Password"> -->
            <textarea id="content" name="content" rows="10" class="form-control"required> {{ $article->content }} </textarea>
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