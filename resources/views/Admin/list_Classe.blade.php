@extends('layouts.app')

@section('content')
<a href="/AjoutClasse"><button class='btn btn-outline-primary btn-sm'>Ajouter Classe</button></a>
<a href="/admin"><button class='btn btn-outline-primary btn-sm'>Dashboard</button></a>
<div class="row justify-content-md-center">
<p class="alert alert-primary">Nombre d'etudaint:   {{$tab_classes['Nb_classes']}}</p>
</div>
                   <table class="table">
						<thead class="thead-dark">
							<tr>
								<th >classe</th>
								<th >Nombre etudiants</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($tab_classes['classes'] as $classe)
							<tr >
								
								<td >{{$classe->id_classe}}</td>
								<td >{{$classe->Nb_etud}}</td>
							</tr>
                        @endforeach

							</tr>
						</tbody>
					</table>
				
   
@endsection