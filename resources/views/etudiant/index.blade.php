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
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>DateNaissance</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Ecole</th>
                    <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($etudiants))
                    @foreach($etudiants as $etudiant)
                    <tr>
                      <td>{{$etudiant->mat_etudiant}}</td>
                      <td>{{$etudiant->nom_etudiant}}</td>
                      <td>{{$etudiant->prenom_etudiant}}</td>
                      <td>{{$etudiant->sexe}}</td>
                      <td>{{$etudiant->dateNaissance}}</td>
                      <td>{{$etudiant->telephone}}</td>
                      <td>{{$etudiant->email}}</td>
                      <td>{{$etudiant->nom_etabli}}</td>
                      <td>
                        <form id="frm_supprimer_etudiant_{{$etudiant->id}}" action="{{route('etudiant.destroy',$etudiant->id)}}" method="POST">
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