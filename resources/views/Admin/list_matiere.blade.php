@extends('layouts.app')

@section('content')
<a href="/AjoutMatiere"><button class='btn btn-outline-primary btn-sm'>Ajouter Matiere</button></a>
<a href="/admin"><button class='btn btn-outline-primary btn-sm'>Dashboard</button></a>
<div class="row justify-content-md-center">
<p class="alert alert-primary">Nombre de matiere:   {{$tab_Matieres['Nb_Matieres']}}</p>
</div>
<table class="table">
						<thead class="thead-dark">
							<tr>
								<th >id_Matiere</th>
								<th >Nomb de matieres</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($tab_Matieres['Matieres'] as $Matiere)
							<tr >
								
								<td >{{$Matiere->id_matiere}}</td>
								<td >{{$Matiere->Nom_matiere}}</td>
							</tr>
                        @endforeach

							</tr>
						</tbody>
</table>
@endsection