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
          	
          	<div class="col-md-12">
              <form action="{{route('etudiant.store')}}" method="post">
              		{{csrf_field()}}
                      
                      <div class="col-12">
                          <div class="col-md-4">
                            <div class="form-group">
                                <label >Matricule</label>
                                <input type="text" class="form-control" id="mat_etudiant" name="mat_etudiant">
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
                                <label>Nom du père *</label>
                                <input type="text" class="form-control" id="nomPere" name="nomPere">
                            </div>
                            <div class="form-group">
                                <label>Nom de la mère *</label>
                                <input type="text" class="form-control" id="nomMere" name="nomMere">
                            </div>
                            <div class="form-group">
                                <label>Personne à contacter en cas d'urgence *</label>
                                <input type="text" class="form-control" id="casUrgence" name="casUrgence">
                            </div>
                            <div class="form-group">
                                <label>Ecole d'origine *</label>
                                <input type="text" class="form-control" id="ecole" name="ecole">
                            </div>
                            <div class="form-group">
                                <label>Personne devant payer les frais de scolarité *</label>
                                <input type="text" class="form-control" id="scolarite" name="scolarite">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Nom:</label>
                                <input type="text" class="form-control" id="nom_etudiant" name="nom_etudiant">
                            </div>
                            <div class="form-group">
                                <label>Lieu de naissance:</label>
                                <input type="text" class="form-control" id="lieu" name="lieu">
                            </div>
                            <div class="form-group">
                                <label>Telephone Personnel:</label>
                                <input type="number" class="form-control" id="telephone" name="telephone">
                            </div>      
                            <div class="form-group">
                                <label>Profession du Père *</label>
                                <input type="text" class="form-control" id="profPere" name="profPere">
                            </div>
                            <div class="form-group">
                                <label>Profession de la Mère *</label>
                                <input type="text" class="form-control" id="profMere" name="profMere">
                            </div>
                             <div class="form-group">
                                <label>Profession *</label>
                                <input type="text" class="form-control" id="profUrgence" name="profUrgence">
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Etablissement *</label>
                                <div class="form-group">
                                  <select type="text" id="etabli_id" name="etabli_id"  class="form-control">
                                        @foreach($etablissements as $etablissement)
                                        <option value="{{$etablissement->id}}">{{$etablissement->nom_etabli}}</option>
                                        @endforeach
                                  </select>
                                </div>
                            </div>
                          </div>
                            
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Prenom:</label>
                                <input type="text" class="form-control" id="prenom_etudiant" name="prenom_etudiant">
                            </div>
                            <div class="form-group">
                                <label>Nationnalité:</label>
                                <input type="text" class="form-control" id="nationnalite" name="nationnalite">
                            </div>
                            <div class="form-group">
                                <label>Résidense(ville ou quartier):</label>
                                <input type="text" class="form-control" id="residense" name="residense">
                            </div>
                            <div class="form-group">
                                <label>Contact du père *</label>
                                <input type="number" class="form-control" id="telPere" name="telPere">
                            </div>
                            <div class="form-group">
                                <label>Contact de la Mère *</label>
                                <input type="number" class="form-control" id="telMere" name="telMere">
                            </div>
                            <div class="form-group">
                                <label>Contact *</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="form-group">
                                <label>Année scolaire *</label>
                                <input type="text" class="form-control" id="anneOrigine" name="anneOrigine">
                            </div>
                            <div class="form-group">
                                <label>Nature, série n° diplome (ou du relevé) *</label>
                                <input type="text" class="form-control" id="nature" name="nature">
                            </div>
                          </div>
                          
                        </div>
                        <div class="col-12">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Date d'inscription *</label>
                                <input type="date" class="form-control" id="dateInscri" name="dateInscri">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Classe *</label>
                                <div class="form-group">
                                  <select type="text" id="classe_id" name="classe_id"  class="form-control">
                                        @foreach($classes as $classe)
                                        <option value="{{$classe->id}}">{{$classe->libelle_classe}}</option>
                                        @endforeach
                                  </select>
                                </div>
                            </div>
                          </div>
                          
                        </div>
    			               <button type="submit" class="btn btn-primary" style="margin-left: 30%;">Enregistrer</button>
                          <button type="reset" class="btn btn-danger" style="">Annuler</button>
    			     </form>
          	</div>
      </div>      
    </div>
  </div>  

</div>	
@endsection