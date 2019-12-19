@extends('layouts.app')

@section('content')
<a href="/list_Etudiant"><button class='btn btn-outline-primary btn-sm'>Retour</button></a>
<div class="row justify-content-md-center">
<form method="POST" action="/list_Etudiant">
    @csrf
    <label for="CNE">CNE</label>

<input id="CNE" type="text" name="CNE" class="@error('CNE') is-invalid @enderror">

@error('CNE')
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
<label for="Classe">Classe</label>
<select id="Classe" type="text" name="classe" class="@error('Classe') is-invalid @enderror">
      @foreach($classes as $classe)
      <option>{{ $classe->id_classe}}</option>
      @endforeach
    </select>

@error('Classe')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Ajouter">

</form>

<div>
@endsection