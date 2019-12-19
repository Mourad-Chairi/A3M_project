@extends('layouts.app')

@section('content')
<a href="/AjoutSalle"><button class='btn btn-outline-primary btn-sm'>Ajouter Salle</button></a>
<a href="/admin"><button class='btn btn-outline-primary btn-sm'>Dashboard</button></a>
<div class="row justify-content-md-center">
<p class="alert alert-primary">Nombre des Salles:   {{$tab_Salles['Nb_Salles']}}</p>
</div>
<table class="table">
						<thead class="thead-dark">
							<tr>
								<th >Salle</th>
								<th >Nombre des places</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($tab_Salles['Salles'] as $Salle)
							<tr >
								
								<td >{{$Salle->id_salle}}</td>
								<td >{{$Salle->Nb_places}}</td>
							</tr>
                        @endforeach

							</tr>
						</tbody>
</table>
		
@endsection