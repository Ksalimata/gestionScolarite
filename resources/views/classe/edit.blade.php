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
                <h3>Modifier une classe</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <a class="btn btn-info" href="{{route('classe.index')}}" style="margin-left:78%;background-color: #2a3f54;">Retour à la liste</a>
                  </div>
                </div>
              </div>
      </div>
<div class="col-md-3"></div>
<div class="col-md-6">
	<form action="{{route('classe.update', $classe->id)}}" method="post">
		{{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
	  <div class="form-group">
	    <label>Code classe</label>
	    <input type="text" class="form-control" id="code_classe" name="code_classe" value="{{$classe->code_classe}}" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
	    <label>Libellé de la classe</label>
	    <input type="text" class="form-control" id="libelle_classe" name="libelle_classe" value="{{$classe->libelle_classe}}">
	  </div>
    <div class="form-group">
      <label>Filiere</label>
      <div class="form-group">
            <select type="text" id="filiere_id" name="filiere_id" required="required" class="form-control">
                  @foreach($filieres as $filiere)
                  @if($filiere->id==$filiere->filiere)
                  <option value="{{$filiere->id}}">{{$filiere->libelle_filiere}}</option>
                  @else
                  <option value="{{$filiere->id}}">{{$filiere->libelle_filiere}}</option>
                  @endif
                  @endforeach
            </select>
      </div>
    </div>
    <div class="form-group">
      <label>Matiere</label>
      <div class="form-group">
            <select type="text" id="matiere_id" name="matiere_id" required="required" class="form-control">
                  @foreach($matieres as $matiere)
                  @if($matiere->id==$matiere->matiere)
                  <option value="{{$matiere->id}}">{{$matiere->code_matiere}}</option>
                  @else
                  <option value="{{$matiere->id}}">{{$matiere->code_matiere}}</option>
                  @endif
                  @endforeach
            </select>
      </div>
    </div>
	  
	  <button type="submit" class="btn btn-primary" style="margin-left: 30%;margin-top: 6%;">Modifier</button>
    <button type="reset" class="btn btn-danger" style="margin-top: 6%">Annuler</button>
	</form>
</div>
<div class="col-md-3"></div>
 </div>
</div>
@endsection