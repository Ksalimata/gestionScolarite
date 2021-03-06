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
                <h3>Liste des filières</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <a class="btn btn-info" href="{{route('filiere.create')}}" style="margin-left: 193%;background-color: #2a3f54;">Ajouter</a>
                  </div>
                </div>
              </div>
            </div>
              <div class="x_content">
              	<table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
              		<thead>
              			<tr>
              			<th>Code</th>
              			<th>Filière</th>
              			<th>Action</th>
              			</tr>
              		</thead>
              		<tbody>
              			@if(isset($filieres))
              			@foreach($filieres as $filiere)
              			<tr>
              				<td>{{$filiere->code_filiere}}</td>
              				<td>{{$filiere->libelle_filiere}}</td>
              				<td>
	                       <form id="frm_supprimer_filiere_{{$filiere->id}}" action="{{route('filiere.destroy',$filiere->id)}}" method="POST">
	                       <a href="{{route('filiere.edit',$filiere->id)}}" class="btn btn-success">Modifier</a>
	                       <input type="hidden" name="_method" value="DELETE">
	                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                       <a href="#" class="btn btn-danger" onclick="confirmer({{$filiere->id}})">Supprimer</a>
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
      $('#frm_supprimer_filiere_'+id).submit();
    }
  }
</script>
@endsection