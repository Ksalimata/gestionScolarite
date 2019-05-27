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
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" >
            <div class="x_panel">
              <div class="page-title">
              <div class="title_left">
                <h3>Liste des etudiants</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <a class="btn btn-info" href="{{route('etudiant.create')}}" style="margin-left: 193%;background-color: #2a3f54;">Ajouter</a>
                  </div>
                </div>
              </div>
            </div>
              <div class="x_content">
                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                  <thead>
                    <tr>
                    <th>Matricule</th>
                    <th hidden>DateNaissance</th>
                    <th hidden>Lieu de naissance</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th hidden>Nationnalié</th>
                    <th>Résidence</th>
                    <th hidden>Nom du père</th>
                    <th hidden>Profession du père</th>
                    <th hidden>Contact du père</th>
                    <th hidden>Nom de la mère</th>
                    <th hidden>Profession de la mère</th>
                    <th hidden>Contact de la mère</th>
                    <th hidden>Tuteur</th>
                    <th hidden>Profession tuteur</th>
                    <th hidden>Ecole origine</th>
                    <th>Contact </th>
                    <th hidden>Année scolaire</th>
                    <th hidden>Email</th>
                    <th hidden>Nature du diplome</th>
                    <th hidden>Personne qui devra soldé</th>
                    <th hidden>Date inscription</th>
                    <th hidden>Classe</th>
                    <th hidden>Etablissement</th>
                    <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($etudiants))
                    @foreach($etudiants as $etudiant)
                    <tr>
                      <td>{{$etudiant->mat_etudiant}}</td>
                      <td hidden>{{$etudiant->dateNaissance}}</td>
                      <td hidden>{{$etudiant->lieu}}</td>
                      <td>{{$etudiant->nom_etudiant}}</td>
                      <td>{{$etudiant->prenom_etudiant}}</td>
                      <td>{{$etudiant->telephone}}</td>
                      <td hidden>{{$etudiant->nationnalite}}</td>
                      <td>{{$etudiant->residense}}</td>
                      <td hidden>{{$etudiant->nomPere}}</td>
                      <td hidden>{{$etudiant->profPere}}</td>
                      <td hidden>{{$etudiant->telPere}}</td>
                      <td hidden>{{$etudiant->nomMere}}</td>
                      <td hidden>{{$etudiant->profMere}}</td>
                      <td hidden>{{$etudiant->telMere}}</td>
                      <td hidden>{{$etudiant->casUrgence}}</td>
                      <td hidden>{{$etudiant->profUrgence}}</td>
                      <td hidden>{{$etudiant->ecole}}</td>
                      <td>{{$etudiant->contact}}</td>
                      <td hidden>{{$etudiant->anneOrigine}}</td>
                      <td hidden>{{$etudiant->email}}</td>
                      <td hidden>{{$etudiant->nature}}</td>
                      <td hidden>{{$etudiant->scolarite}}</td>
                      <td hidden>{{$etudiant->dateInscri}}</td>
                      <td hidden>{{$etudiant->code_classe}}</td>
                      <td hidden>{{$etudiant->code_etabli}}</td>
                      <td>
                        <form id="frm_supprimer_etudiant_{{$etudiant->id}}" action="{{route('etudiant.destroy',$etudiant->id)}}" method="POST">
                          <a href="{{route('etudiant.show', $etudiant->id)}}" class="btn btn-primary"> Savoir Plus</a> 
                          <a href="{{route('etudiant.edit',$etudiant->id)}}" class="btn btn-success">Modifier</a>
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <a href="#" class="btn btn-danger" onclick="confirmer({{$etudiant->id}})">Supprimer
                          </a>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>  
            </div>  
        </div>
        </div>    
  </div>
</div>

<script type="text/javascript">
  function confirmer(id)
  {
    var r = confirm("Confirmez vous la suppression ?");

    if (r == true)
    {
      $('#frm_supprimer_etudiant_'+id).submit();
    }
  }
</script>
@endsection