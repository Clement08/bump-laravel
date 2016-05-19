@extends('layouts.app')

@section('content')
    @if(Auth::check() && (Auth::user()->id == $project->id OR Auth::user()->isAdmin))
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>{{ $project->project_name }}</h3>
                        <h4 class="text-right">{{$project->status}}</h4>
                    </div>
                    <div class="panel-body">
                        <h3>Informations du client</h3>
                        <p>{{ $project->customer_infos }}</p>

                        <h3>Adresse du client</h3>
                        <p>{{ $project->customer_infos }}</p>

                        <h3>Adresse email du client</h3>
                        <p>{{ $project->customer_email }}</p>

                        <h3>Numéro de téléphone du client</h3>
                        <p>{{ $project->customer_numberphone }}</p>

                        <h3>Informations du contact</h3>
                        <p>{{ $project->contact_infos }}</p>

                        <h3>Adresse du contact</h3>
                        <p>{{ $project->contact_adress }}</p>

                        <h3>Adresse email du contact</h3>
                        <p>{{ $project->contact_email }}</p>

                        <h3>Numéro de télphone du client</h3>
                        <p>{{ $project->contact_numberphone }}</p>

                        <h3>Fiche d'identité</h3>
                        <p>{{ $project->identity_sheet }}</p>

                        <h3>Type du projet</h3>
                        <p>{{ $project->project_type }}</p>

                        <h3>Contexte</h3>
                        <p>{{ $project->context }}</p>

                        <h3>Demandes</h3>
                        <p>{{ $project->request }}</p>

                        <h3>Contraintes</h3>
                        <p>{{ $project->constraints }}</p>

                        <a href="{{ route('project.index') }}">Retour à la liste des projets</a>
                    </div>
                </div>
                @if(Auth::check() && Auth::user()->isAdmin)
                    @include('projects.adminEdit')
                @endif
                <a href="{{ route('project.index') }}">Retour à la liste des projets</a>
            </div>
        </div>
    </div>
    @else
        <div class="container text-center">
            <h3 class="text-center">Vous n'avez pas les droits nécessaires...</h3>
            <a href="{{ route('user.show', Auth::user()->id) }}" class="btn btn-primary">Retour à mon profil</a>
        </div>
    @endif
@endsection