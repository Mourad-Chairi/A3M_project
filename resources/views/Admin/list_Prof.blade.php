@extends('layouts.app')

@section('content')
<a href="/AjoutProf"><button class='btn btn-outline-primary btn-sm'>Ajouter Prof</button></a>
<a href="/admin"><button class='btn btn-outline-primary btn-sm'>Dashboard</button></a>
<div class="row justify-content-md-center">
<p class="alert alert-primary">Nombre de prof:   {{$tab_profs['Nb_profs']}}</p>
</div>
<table class="table">
						<thead class="thead-dark">
							<tr>
								<th >ID_prof</th>
								<th >Nom</th>
								<th >Prenom</th>
								<th >Matiere</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($tab_profs['profs'] as $prof)
							<tr >
					
								<td >{{$prof->id_prof}}</td>
                                <td >{{$prof->Nom}}</td>
								<td >{{$prof->Prenom}}</td>
								<td >{{$prof->matiere}}</td>
							</tr>
                        @endforeach

							</tr>
						</tbody>
</table>

@endsection