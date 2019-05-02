@extends('layouts.master')
@section('content')
<div class="right_col" role="main">
          <div class="">
           

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                  
                <div class="x_title">
                    <h1>Dashboard </h1>
                    
                    <div class="clearfix"></div>
                </div>
            
                <div class="row" style="margin-bottom:50px">
                  <div class="col-sm-4">
                      <div class="card" style="background-color:#2b7b94">
                      <div class="card-body">
                          <center><h5 class="card-title">Nombre d' etudiant</h5>
                          <h1>{{$nbre_etudiants}}</h1>
                          <a href="{{route('etudiant.index')}}" class="btn btn-primary">Etudiants</a></center>
                      </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card" style="background-color:#3ca5c5">
                      <div class="card-body">
                          <center><h5 class="card-title">Nombre de filière</h5>
                          <h1>{{$nbre_filieres}}</h1>
                          <a href="{{route('filiere.index')}}" class="btn btn-primary">Filières</a></center>
                      </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="card" style="background-color:#f3bd4b">
                      <div class="card-body">
                          <center><h5 class="card-title">Nombre de matière</h5>
                          <h1>{{$nbre_matieres}}</h1>
                          <a href="{{route('matiere.index')}}" class="btn btn-primary">Matières</a></center>
                      </div>
                      </div>
                  </div>
                
                </div>
                  
               
              </div>
            </div>
        </div>
</div>

<style type="text/css">
  .card-body{
    flex: 1 1 auto;
    padding: 1.25rem;
    height: 176px;
  }
  .card{
    border-radius: .25rem;
  }
  h5{
    margin-bottom:22px;
    font-size: 20px;
    color: black;
  }
</style>


@endsection        