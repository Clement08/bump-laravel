@extends('layouts.app')

@section('content')
    @if(Auth::check() && ($project->user_id == Auth::user()->id || Auth::user()->isAdmin) )
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Soumettre un projet
                    </div>

                    <div class="panel-body">
                        {!! Form::model($project,
                        array(
                        'route' => array(
                        'project.update', $project->id),
                        'method' => 'PUT')
                        )
                        !!}

                        <div class="form-group">
                            {!! Form::label('project_name', 'Nom du projet') !!}
                            {!! Form::text('project_name', old('project_name'), [
                                'class' => 'form-control',
                                'placeholder' => 'Votre nom du projet'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_infos', 'Informations à propos du client') !!}
                            {!! Form::text('customer_infos', old('customer_info'), [
                                'class' => 'form-control',
                                'placeholder' => 'Information'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_adress', 'Adresse du client') !!}
                            {!! Form::text('customer_adress', old('customer_adress'), [
                                'class' => 'form-control',
                                'placeholder' => 'votre addresse'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_email', 'Adresse email du client') !!}
                            {!! Form::email('customer_email', old('customer_email'), [
                                'class' => 'form-control',
                                'placeholder' => 'exemple@gmail.com'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('customer_numberphone', 'Numéro de téléphone du client') !!}
                            {!! Form::number('customer_numberphone', old('customer_numberphone'), [
                                'class' => 'form-control',
                                'placeholder' => 'Votre numéro de téléphone personnel'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_infos', 'Informations à propos du contact') !!}
                            {!! Form::text('contact_infos', old('customer_infos'), [
                                'class' => 'form-control',
                                'placeholder' => 'Info contact'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_adress', 'Adresse du contact') !!}
                            {!! Form::text('contact_adress', old('contact_adress'), [
                                'class' => 'form-control',
                                'placeholder' => 'Addresse du contatct'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_email', 'Adresse email du contact') !!}
                            {!! Form::email('contact_email', old('contact_email'), [
                                'class' => 'form-control',
                                'placeholder' => 'exemple@gmail.com'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact_numberphone', 'Numéro de téléphone du contact') !!}
                            {!! Form::number('contact_numberphone', old('contact_numberphone'), [
                                'class' => 'form-control',
                                'placeholder' => 'numéro de téléphone personnel du contact'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('identity_sheet', "Fiche d'identité") !!}
                            {!! Form::textarea('identity_sheet', old('identity_sheet'), [
                                'class' => 'form-control',
                                'placeholder' => "Votre fiche d'identité"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('project_type', 'Type de projet') !!}
                            <div class="col-md-offset-1">
                                {!! Form::radio('project_type', 'Site-web') !!}
                                Site internet
                                <br>
                                {!! Form::radio('project_type', '3D') !!}
                                3D
                                <br>
                                {!! Form::radio('project_type', 'Animation-2D') !!}
                                Animation 2D
                                <br>
                                {!! Form::radio('project_type', 'Installation') !!}
                                Installation multimédia
                                <br>
                                {!! Form::radio('project_type', 'Jeu-video') !!}
                                Jeu vidéo
                                <br>
                                {!! Form::radio('project_type', 'Dvd') !!}
                                DVD
                                <br>
                                {!! Form::radio('project_type', 'Print') !!}
                                Print
                                <br>
                                {!! Form::radio('project_type', 'Cd-rom') !!}
                                CD-ROM
                                <br>
                                {!! Form::radio('project_type', 'Evenement') !!}
                                Événement
                                <br>
                                {!! Form::radio('project_type', 'autre') !!}
                                Autre
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('context', "Contexte du projet") !!}
                            {!! Form::textarea('context', old('context'), [
                                'class' => 'form-control',
                                'placeholder' => "Contexte du projet"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('request', "Demandes") !!}
                            {!! Form::textarea('request', old('request'), [
                                'class' => 'form-control',
                                'placeholder' => "Votre demande"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('goals', "Objectifs") !!}
                            {!! Form::textarea('goals', old('goals'), [
                                'class' => 'form-control',
                                'placeholder' => 'Votre Objectifs]'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('constraints', "Contraintes") !!}
                            {!! Form::textarea('constraints', old('contraints'), [
                                'class' => 'form-control',
                                'placeholder' => 'Vos contraintes'
                                ])
                            !!}
                        </div>

                        <div class="text-center">
                            {!! Form::submit('Modifier',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection