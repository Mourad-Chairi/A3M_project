@extends('layouts.app')

@section('content')
<a href="/list_Classe"><button class='btn btn-outline-primary btn-sm'>Retour</button></a>
<div class="row justify-content-md-center">
<form method="POST" action="/list_Classe">
    @csrf
    <label for="Classe">Classe</label>
<input id="Classe" type="text" name="id_classe" class="@error('Classe') is-invalid @enderror">

@error('Classe')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<label for="Nb_etudiant">Nombre d'etudiant</label>

<input id="Nb_etudiant" type="text" name="Nb_etudiant" class="@error('Nb_etudiant') is-invalid @enderror">

@error('Nb_etudiant')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Ajouter">

</form>

<div>
@endsection