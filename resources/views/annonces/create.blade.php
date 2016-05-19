@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Poster une annonce</h2>
                    </div>
                    <div class="panel-body">
                        <h6 class="text-muted">Champs obligatoires *</h6>
                        {!! Form::open(array(
                        'route' => 'annonce.store',
                        'method' => 'POST',
                        'file' => true
                        )) !!}

                        <div class="form-group">
                            {!! Form::label('annonce_name', 'Nom de l&apos;annonce *') !!}
                            {!! Form::text('annonce_name', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Le nom de votre annonce'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('annonce_infos', 'Informations à propos de l&apos;annonce *') !!}
                            {!! Form::text('annonce_infos', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Informations'
                                ])
                            !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('annonce_email', 'Adresse email de l&apos;annonceur *') !!}
                            {!! Form::email('annonce_email', '', [
                                'class' => 'form-control',
                                'placeholder' => 'exemple@gmail.com'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('annonce_numberphone', 'Numéro de téléphone de l&apos;annonceur *') !!}
                            {!! Form::number('annonce_numberphone', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Votre numéro de téléphone'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('annonce_prix', 'Prix de l&apos;annonce *') !!}
                            {!! Form::number('annonce_prix', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Prix'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('annonce_image', 'Image *') !!}
                            {!! Form::file('annonce_image', '', [
                                'class' => 'form-control',
                                'placeholder' => 'Prix'
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('annonce_type', 'Type de transaction *') !!}
                            <div class="col-md-offset-1">
                                <br>
                                {!! Form::radio('annonce_type', 'Echange') !!}
                                Echange
                                <br>
                                {!! Form::radio('annonce_type', 'Vente') !!}
                                Vente
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::label('annonce_pointure', 'Pointure *') !!}
                            <div class="col-md-offset-1">
                                <br>
                                {!! Form::radio('annonce_pointure', '36') !!}
                                36
                                <br>
                                {!! Form::radio('annonce_pointure', '37') !!}
                                37
                                <br>
                                {!! Form::radio('annonce_pointure', '38') !!}
                                38
                                <br>
                                {!! Form::radio('annonce_pointure', '39') !!}
                                39
                                <br>
                                {!! Form::radio('annonce_pointure', '40') !!}
                                40
                                <br>
                                {!! Form::radio('annonce_pointure', '41') !!}
                                41
                                <br>
                                {!! Form::radio('annonce_pointure', '42') !!}
                                42
                                <br>
                                {!! Form::radio('annonce_pointure', '43') !!}
                                43
                                <br>
                                {!! Form::radio('annonce_pointure', '44') !!}
                                44
                                <br>
                                {!! Form::radio('annonce_pointure', '45') !!}
                                45
                                <br>
                                {!! Form::radio('pointure', '46') !!}
                                46
                            </div>
                        </div>
                        <div class="text-center">
                            {!! Form::submit('Soumettre',
                                ['class' => 'btn btn-primary'])
                            !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection