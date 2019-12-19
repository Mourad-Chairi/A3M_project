@extends('layouts.app')

@section('content')
<a href="/AjoutEtudiant"><button class='btn btn-outline-primary btn-sm'>Ajouter Etudiant</button></a>
<a href="/admin"><button class='btn btn-outline-primary btn-sm'>Dashboard</button></a>

<div class="row justify-content-md-center">
<p class="alert alert-primary">Nombre d'etudaint:   {{$tab_etudiants['Nb_etudiants']}}</p>
</div>
<table class="table">
						<thead class="thead-dark">
							<tr>
								<th >CNE</th>
								<th >Nom</th>
								<th >Prenom</th>
								<th >Class</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($tab_etudiants['etudiants'] as $etudiant)
							<tr >
								
								<td >{{$etudiant->CNE}}</td>
                                <td >{{$etudiant->Nom}}</td>
								<td >{{$etudiant->Prenom}}</td>
								<td >{{$etudiant->class}}</td>
							</tr>
                        @endforeach

							</tr>
						</tbody>
</table>
	
@endsection
