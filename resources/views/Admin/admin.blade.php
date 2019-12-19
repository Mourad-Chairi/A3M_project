@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in admin page!
                    <div>
                    <a href="/list_Classe"><button class='btn btn-outline-primary '> Classe</button></a>
                    <a href="/list_Prof"><button class='btn btn-outline-primary '>Prof</button></a>
                    <a href="/list_salle"><button class='btn btn-outline-primary '>Salle</button></a>
                    <a href="/list_Etudiant"><button class='btn btn-outline-primary '>Etudiant</button></a>
                    <a href="/list_matiere"><button class='btn btn-outline-primary '>matiere</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
