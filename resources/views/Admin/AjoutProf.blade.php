@extends('layouts.app')

@section('content')
<a href="/list_Prof"><button class='btn btn-outline-primary btn-sm'>Retour</button></a>

<div class="row justify-content-md-center">
<form method="POST" action="/list_Prof">
@csrf
    <label for="ID">ID</label>

<input id="ID" type="text" name="ID" class="@error('ID') is-invalid @enderror">

@error('ID')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<label for="Nom">Nom</label>

<input id="Nom" type="text" name="Nom" class="@error('Nom') is-invalid @enderror">

@error('NOM')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<label for="Prenom">Prenom</label>

<input id="Prenom" type="text" name="Prenom" class="@error('Prenom') is-invalid @enderror">

@error('Prenom')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<label for="matiere">Matiere</label>
<select id="matiere" type="text" name="matiere" class="@error('matiere') is-invalid @enderror">
      @foreach($matieres as $matiere)
      <option>{{ $matiere->Nom_matiere}}</option>
      @endforeach
    </select>

@error('matiere')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Ajouter">

</form>

<div>
@endsection