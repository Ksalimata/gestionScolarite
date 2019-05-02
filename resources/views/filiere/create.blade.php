@extends('layouts.master')
@section('content')
<div class="right_col" role="main">
          <div class="">
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}} 
  </div>  
@endif
@if(session('error'))
  <div class="alert alert-error">
      {{session('error')}}
  </div>
@endif
  @if(!$errors->isEmpty())
     <div class="alert alert-danger">
     @foreach($errors->all() as $error)
       {{$error}}<br/>
     @endforeach
     </div>
@endif            
			<div class="page-title">
              <div class="title_left">
                <h3>Ajouter une filière</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <a class="btn btn-info" href="{{route('filiere.index')}}" style="margin-left:78%;background-color: #2a3f54;">Retour à la liste</a>
                  </div>
                </div>
              </div>
            </div>

<div class="col-md-3"></div>
<div class="col-md-6">
	<form action="{{route('filiere.store')}}" method="post">
		{{csrf_field()}}
	  <div class="form-group">
	    <label>Code filière</label>
	    <input type="text" class="form-control" id="code_filiere" name="code_filiere" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
	    <label>Libellé de la filière</label>
	    <input type="text" class="form-control" id="libelle_filiere" name="libelle_filiere">
	  </div>
	  
	  <button type="submit" class="btn btn-primary" style="margin-left: 30%;margin-top: 6%;">Enregistrer</button>
    <button type="reset" class="btn btn-danger" style="margin-top: 6%">Annuler</button>
	</form>
</div>
<div class="col-md-3"></div>
 </div>
</div>
@endsection