@extends('layouts.app')

@section('content')
<a href="/list_salle"><button class='btn btn-outline-primary btn-sm'>Retour</button></a>
<div class="row justify-content-md-center">
<form method="POST" action="/list_salle">
    @csrf
    <label for="salle">Salle</label>
<input id="salle" type="text" name="id_salle" class="@error('salle') is-invalid @enderror">

@error('salle')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<label for="Nb_places">Nombre des places</label>

<input id="Nb_places" type="text" name="Nb_places" class="@error('Nb_places') is-invalid @enderror">

@error('Nb_places')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Ajouter">

</form>

<div>
@endsection