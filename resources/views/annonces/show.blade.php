@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @include('errors.message')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>{{ $annonce->annonce_name }}</h3>
                        </div>
                        <div class="panel-body">
                            <h3>Informations</h3>
                            <p>{{ $annonce->annonce_infos }}</p>

                            <h3>Adresse mail de l'annonceur</h3>
                            <p>{{ $annonce->annonce_email }}</p>

                            <h3>Numéro de téléphone de l'annonceur</h3>
                            <p>{{ $annonce->annonce_numberphone }}</p>

                            <h3>Prix de l'annonce</h3>
                            <p>{{ $annonce->annonce_prix }}</p>

                            <h3>Type de transaction</h3>
                            <p>{{ $annonce->annonce_type }}</p>

                            <h3>Pointure</h3>
                            <p>{{ $annonce->annonce_pointure }}</p>

                            <h3>Aperçu</h3>
                            <p>{{ $annonce->annonce_image }}</p>

                            <a href="{{ route('annonce.index') }}">Retour</a>
                        </div>
                    </div>
                    @if(Auth::check() && Auth::user()->isAdmin)
                        @include('annonce.adminEdit')
                    @endif
                    <a href="{{ route('annonce.index') }}">Retour</a>
                </div>
            </div>
        </div>

@endsection