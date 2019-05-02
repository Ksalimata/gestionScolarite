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
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">       
          	<div class="page-title">
              <div class="title_left">
                <h3>Ajouter un etudiant</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <a class="btn btn-info" href="{{route('etudiant.index')}}" style="margin-left:78%;background-color: #2a3f54;">Retour à la liste</a>
                  </div>
                </div>
              </div>
            </div>
          	<div class="col-md-3"></div>
          	<div class="col-md-6">
          <form action="{{route('etudiant.store')}}" method="post">
          		{{csrf_field()}}
      			  <div class="form-group">
      			    <label >Matricule</label>
      			    <input type="text" class="form-control" id="mat_etudiant" name="mat_etudiant">
      			  </div>
      			  <div class="form-group">
      			    <label>Nom:</label>
      			    <input type="text" class="form-control" id="nom_etudiant" name="nom_etudiant">
      			  </div>
      			  <div class="form-group">
      			    <label>Prenom:</label>
      			    <input type="text" class="form-control" id="prenom_etudiant" name="prenom_etudiant">
      			  </div>
      			  <div class="form-check-inline">
      			  	<label>Sexe:</label>
      			  		<div class="form-group">
                      <select name="sexe"  class="form-control">
                          <option>Choisir l'option</option>
                          <option value="masculin">Masculin</option>
                          <option value="feminin">Feminin</option>
                      </select>
                  </div>
      			  </div>
      			  <div class="form-group">
      			    <label>Date de naissance:</label>
      			    <input type="date" class="form-control" id="dateNaissance" name="dateNaissance">
      			  </div>
      			  <div class="form-group">
      			    <label>Email:</label>
      			    <input type="email" class="form-control" id="email" name="email">
      			  </div>
      			  <div class="form-group">
      			    <label>Telephone:</label>
      			    <input type="number" class="form-control" id="telephone" name="telephone">
      			  </div>
      			  <div class="form-group">
      			    <label>Etablissement:</label>
      			    <div class="form-group">
      			    	<select type="text" id="etabli_id" name="etabli_id" required="required" class="form-control">
                        @foreach($etablissements as $etablissement)
                        <option value="{{$etablissement->id}}">{{$etablissement->nom_etabli}}</option>
                        @endforeach
                  </select>
      			    </div>

      			  </div>
			         <button type="submit" class="btn btn-primary" style="margin-left: 30%;">Enregistrer</button>
                <button type="reset" class="btn btn-danger" style="">Annuler</button>
			     </form>
          		
          	</div>
          	<div class="col-md-3"></div>
      </div>      
    </div>
  </div>  

</div>	
@endsection