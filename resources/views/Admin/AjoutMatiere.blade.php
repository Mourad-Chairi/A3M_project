@extends('layouts.app')

@section('content')
<a href="/list_matiere"><button class='btn btn-outline-primary btn-sm'>Retour</button></a>

<div class="row justify-content-md-center">
<form method="POST" action="/list_matiere">
@csrf
<label for="Nom_matiere">Nom de matiere</label>

<input id="Nom_matiere" type="text" name="Nom_matiere" class="@error('Nom_matiere') is-invalid @enderror">

@error('Nom_matiere')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Ajouter">

</form>

<div>
@endsection